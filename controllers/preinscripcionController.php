<?php

class preinscripcionController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
		$this->_view->assign('titulo', 'Preinscripción');
		// 1. Activar estilo dark en el header (pone el logo blanco)
		$this->_view->assign('header_style', 'dark'); 
		// 2. Ocultar breadcrumb si es necesario (común en landings dark)
		$this->_view->assign('hide_breadcrumb', true);
		// 3. Clase CSS para el body (si el CSS lo requiere para fondo negro)
		$this->_view->assign('bodyClass', 'body-dark-class');
		$this->_view->setJs(array('script'));
		$this->_view->renderClean('index');
    }

public function enviar()
{
    header('Content-Type: application/json; charset=utf-8');

    $errores = [];

    $nombres   = trim($this->getPostParam('txt_nombres'));
    $apellidos = trim($this->getPostParam('txt_apellidos'));
    $celular   = trim($this->getPostParam('txt_celular'));
    $dni       = trim($this->getPostParam('txt_dni'));
    $email     = trim($this->getPostParam('txt_email'));

    // VALIDACIONES
    if ($nombres === '')   $errores['txt_nombres'] = 'Ingrese sus nombres';
    if ($apellidos === '') $errores['txt_apellidos'] = 'Ingrese sus apellidos';
    if (!preg_match('/^[0-9]{9}$/', $celular)) $errores['txt_celular'] = 'Celular inválido';
    if (!preg_match('/^[0-9]{8}$/', $dni)) $errores['txt_dni'] = 'DNI inválido';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores['txt_email'] = 'Correo inválido';

    if (!empty($errores)) {
        echo json_encode([
            'status' => false,
            'errors' => $errores
        ]);
        exit;
    }

    // ENVÍO A GOOGLE SHEETS
    $datosParaGoogle = [
        'Nombres'   => $nombres,
        'Apellidos' => $apellidos,
        'WhatsApp'  => $celular,
        'DNI'       => $dni,
        'Correo'    => $email
    ];

    $ch = curl_init('https://script.google.com/macros/s/AKfycby8c19p2xqwbDzmq9XW9lhTAaqBPIP7lzK9zTEfkK4Avq-IBFzhK9Jai1yGrApx-Q6k1w/exec');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_POSTFIELDS => json_encode($datosParaGoogle)
    ]);
    curl_exec($ch);
    curl_close($ch);

    // EVENTO FACEBOOK CAPI Integration
    $this->enviarEventoFacebook(
        'Preinscripcion',
        $nombres,
        $apellidos,
        $celular,
        $dni,
        $email
    );
    // EVENTO TIKTOK CAPI Integration
    $this->enviarEventoTikTok(
        'CompleteRegistration',
        $nombres,
        $apellidos,
        $celular,
        $dni,
        $email,
        0
    );

    echo json_encode([
        'status' => true,
        'msg' => '
        🎉 <strong>¡REGISTRO EXITOSO!</strong><br><br>

        <strong>🚨 PASO FINAL OBLIGATORIO</strong><br><br>

        Para asegurar tu vacante debes unirte ahora al
        <strong>Grupo Privado de WhatsApp</strong>.<br><br>

        <strong>🎁 ¿QUÉ RECIBIRÁS DENTRO DEL GRUPO?</strong><br><br>

        ✅ PDF informativo oficial del Diplomado<br>
        ✅ Confirmación de matrícula gratuita<br>
        ✅ Descuentos exclusivos (solo grupo)<br>
        ✅ Resolución de dudas en tiempo real<br>
        ✅ Avisos antes del cierre de inscripciones
        '
    ]);

    exit;
}




// controllers/indexController.php

private function enviarEventoFacebook($evento, $nombre = null, $apellido = null, $celular = null, $dni  = null, $email = null, $monto = 0) {
    
    $pixel_id = FB_PIXEL_ID;
    $token = FB_ACCESS_TOKEN;
    
    $data = array(
        'data' => array(
            array(
                'event_name' => $evento, // Ej: 'Purchase', 'Lead', 'PageView'
                'event_time' => time(),
                'action_source' => 'website',
                'user_data' => array(
                    'fn' => $nombre ? [hash('sha256', strtolower(trim($nombre)))] : [],
                    'ln' => $apellido ? [hash('sha256', strtolower(trim($apellido)))] : [],
                    'ph' => $celular ? [hash('sha256', preg_replace('/[^0-9]/', '', $celular))] : [],
                    'st' => $dni ? [hash('sha256', preg_replace('/[^0-9]/', '', $dni))] : [],
                    'email' => $email ? [hash('sha256', strtolower(trim($email)))] : []
                ),
                'custom_data' => array(
                    'currency' => 'PEN',
                    'value' => $monto
                )
            )
        )
    );

    $url = "https://graph.facebook.com/v19.0/{$pixel_id}/events?access_token={$token}";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}




private function enviarEventoTikTok(
    $evento,
    $nombre = null,
    $apellido = null,
    $celular = null,
    $dni = null,
    $email = null,
    $valor = 0
) {
    $access_token = TIKTOK_ACCESS_TOKEN;

    $data = [
        'event' => $evento, // Ej: CompleteRegistration
        'event_time' => time(),
        'event_id' => uniqid('evt_', true),
        'context' => [
            'page' => [
                'url' => $_SERVER['HTTP_REFERER'] ?? ''
            ],
            'user' => [
                'email' => $email ? [hash('sha256', strtolower(trim($email)))] : [],
                'phone' => $celular ? [hash('sha256', preg_replace('/[^0-9]/', '', $celular))] : [],
                'external_id' => $dni ? [hash('sha256', trim($dni))] : [],
                'first_name' => $nombre ? [hash('sha256', strtolower(trim($nombre)))] : [],
                'last_name' => $apellido ? [hash('sha256', strtolower(trim($apellido)))] : []
            ]
        ],
        'properties' => [
            'currency' => 'PEN',
            'value' => $valor
        ]
    ];

    $payload = [
        'pixel_code' => TIKTOK_PIXEL_ID, // Define esto en config
        'events' => [$data]
    ];

    $ch = curl_init('https://business-api.tiktok.com/open_api/v1.3/event/track/');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Access-Token: ' . $access_token
        ],
        CURLOPT_POSTFIELDS => json_encode($payload)
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}





}
?>