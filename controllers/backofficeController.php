<?php

class backofficeController extends Controller
{
    private $_bo;
    private $_auth;

    public function __construct()
    {
        parent::__construct();
        $this->_bo = $this->loadModel('backoffice');
        $this->_auth = require ROOT . 'application' . DS . 'backoffice_auth.php';
        $this->enviarCabecerasSeguridad();
    }

    public function index()
    {
        $this->requerirAuth();
        $parejas = $this->enriquecerParejas();
        $this->_view->assign('titulo', 'Backoffice | Bodas');
        $this->_view->assign('parejas', $parejas);
        $this->_view->assign('csrf', $this->csrfToken());
        $this->_view->assign('usuario', Session::get('bo_user'));
        $this->renderBo('index');
    }

    public function login()
    {
        if ($this->estaAutenticado()) {
            $this->redireccionar('backoffice');
        }

        $this->_view->assign('titulo', 'Backoffice | Login');
        $this->_view->assign('csrf', $this->csrfToken());
        $this->_view->assign('error', Session::get('bo_login_error'));
        Session::set('bo_login_error', null);
        $this->renderBo('login');
    }

    public function autenticar()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redireccionar('backoffice/login');
        }

        if (!$this->validarCsrf()) {
            Session::set('bo_login_error', 'Sesión inválida. Recarga e intenta de nuevo.');
            $this->redireccionar('backoffice/login');
        }

        if ($this->estaBloqueado()) {
            Session::set('bo_login_error', 'Demasiados intentos. Espera unos minutos e intenta otra vez.');
            $this->redireccionar('backoffice/login');
        }

        $usuario = $this->limpiarUsuario($this->getPostRaw('usuario'));
        $clave = (string) $this->getPostRaw('clave');

        // Comparación en tiempo constante / sin filtrar SQL (no hay query)
        $okUser = hash_equals($this->_auth['username'], $usuario);
        $okPass = password_verify($clave, $this->_auth['password_hash']);

        if (!$okUser || !$okPass) {
            $this->registrarIntentoFallido();
            usleep(400000); // ralentiza fuerza bruta
            Session::set('bo_login_error', 'Usuario o contraseña incorrectos.');
            $this->redireccionar('backoffice/login');
        }

        $this->limpiarIntentos();
        session_regenerate_id(true);
        Session::set('autenticado', true);
        Session::set('level', 'admin');
        Session::set('bo_auth', true);
        Session::set('bo_user', $this->_auth['username']);
        Session::set('tiempo', time());
        Session::set('bo_csrf', bin2hex(random_bytes(32)));

        $this->redireccionar('backoffice');
    }

    public function logout()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->validarCsrf();
        }
        Session::destroy();
        session_start();
        $this->redireccionar('backoffice/login');
    }

    public function pareja($parejaId = 0)
    {
        $this->requerirAuth();
        $parejaId = (int) $parejaId;
        $pareja = $this->obtenerPareja($parejaId);
        if (!$pareja) {
            $this->redireccionar('backoffice');
        }

        $asignaciones = $this->_bo->listarAsignaciones($parejaId);
        $categorias = $this->_bo->listarCategorias();
        $catalogo = $this->_bo->listarCatalogo('', 0);

        $this->_view->assign('titulo', 'Regalos | ' . $pareja['nombre']);
        $this->_view->assign('pareja', $pareja);
        $this->_view->assign('asignaciones', $asignaciones);
        $this->_view->assign('categorias', $categorias);
        $this->_view->assign('catalogo', $catalogo);
        $this->_view->assign('csrf', $this->csrfToken());
        $this->_view->assign('usuario', Session::get('bo_user'));
        $this->_view->assign('flash_ok', Session::get('bo_flash_ok'));
        $this->_view->assign('flash_error', Session::get('bo_flash_error'));
        Session::set('bo_flash_ok', null);
        Session::set('bo_flash_error', null);
        $this->renderBo('pareja');
    }

    public function asignar()
    {
        $this->requerirAuth();
        $this->soloPost();
        if (!$this->validarCsrf()) {
            Session::set('bo_flash_error', 'Token CSRF inválido.');
            $this->redireccionar('backoffice');
        }

        $parejaId = (int) $this->getInt('pareja_id');
        $obsequioId = (int) $this->getInt('obsequio_id');
        $cantidad = (int) $this->getInt('cantidad');
        if ($cantidad < 1) {
            $cantidad = 1;
        }
        if ($cantidad > 9999) {
            $cantidad = 9999;
        }

        if (!$this->obtenerPareja($parejaId) || $obsequioId < 1) {
            Session::set('bo_flash_error', 'Datos inválidos.');
            $this->redireccionar('backoffice/pareja/' . $parejaId);
        }

        try {
            $ok = $this->_bo->asignar($parejaId, $obsequioId, $cantidad);
            Session::set('bo_flash_ok', $ok ? 'Regalo agregado/actualizado.' : 'No se pudo guardar.');
        } catch (Exception $e) {
            Session::set('bo_flash_error', 'Error al guardar. Intenta de nuevo.');
        }

        $this->redireccionar('backoffice/pareja/' . $parejaId);
    }

    public function actualizar()
    {
        $this->requerirAuth();
        $this->soloPost();
        if (!$this->validarCsrf()) {
            Session::set('bo_flash_error', 'Token CSRF inválido.');
            $this->redireccionar('backoffice');
        }

        $parejaId = (int) $this->getInt('pareja_id');
        $id = (int) $this->getInt('obsequio_pareja_id');
        $cantidad = (int) $this->getInt('cantidad');
        $activo = (int) $this->getInt('activo') === 1 ? 1 : 0;

        if ($cantidad < 1) {
            $cantidad = 1;
        }
        if ($cantidad > 9999) {
            $cantidad = 9999;
        }

        if (!$this->obtenerPareja($parejaId) || !$this->_bo->perteneceAPareja($id, $parejaId)) {
            Session::set('bo_flash_error', 'Registro no válido.');
            $this->redireccionar('backoffice/pareja/' . $parejaId);
        }

        try {
            $ok = $this->_bo->actualizar($id, $cantidad, $activo);
            Session::set('bo_flash_ok', $ok ? 'Actualizado correctamente.' : 'No se pudo actualizar.');
        } catch (Exception $e) {
            Session::set('bo_flash_error', 'Error al actualizar.');
        }

        $this->redireccionar('backoffice/pareja/' . $parejaId);
    }

    public function desactivar()
    {
        $this->requerirAuth();
        $this->soloPost();
        if (!$this->validarCsrf()) {
            Session::set('bo_flash_error', 'Token CSRF inválido.');
            $this->redireccionar('backoffice');
        }

        $parejaId = (int) $this->getInt('pareja_id');
        $id = (int) $this->getInt('obsequio_pareja_id');

        if (!$this->obtenerPareja($parejaId) || !$this->_bo->perteneceAPareja($id, $parejaId)) {
            Session::set('bo_flash_error', 'Registro no válido.');
            $this->redireccionar('backoffice/pareja/' . $parejaId);
        }

        try {
            $ok = $this->_bo->desactivar($id);
            Session::set('bo_flash_ok', $ok ? 'Regalo desactivado.' : 'No se pudo desactivar.');
        } catch (Exception $e) {
            Session::set('bo_flash_error', 'Error al desactivar.');
        }

        $this->redireccionar('backoffice/pareja/' . $parejaId);
    }

    /* ===================== Seguridad ===================== */

    private function enviarCabecerasSeguridad()
    {
        header('X-Robots-Tag: noindex, nofollow, noarchive, nosnippet');
        header('X-Frame-Options: DENY');
        header('X-Content-Type-Options: nosniff');
        header('Referrer-Policy: no-referrer');
        header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
        header("Content-Security-Policy: default-src 'self'; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline'; img-src 'self' https: data:; base-uri 'self'; form-action 'self'; frame-ancestors 'none'");
        if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
            header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
        }
    }

    private function renderBo($vista)
    {
        $this->_view->assign('_layoutParams', array(
            'root' => BASE_URL,
            'filever' => time()
        ));
        $this->_view->setTemplateDir(ROOT . 'views' . DS . 'backoffice' . DS);
        $this->_view->setCompileDir(ROOT . 'tmp' . DS . 'template' . DS);
        $this->_view->setCacheDir(ROOT . 'tmp' . DS . 'cache' . DS);
        $this->_view->display($vista . '.tpl');
    }

    private function requerirAuth()
    {
        if (!$this->estaAutenticado()) {
            $this->redireccionar('backoffice/login');
        }

        $maxMin = (int) ($this->_auth['session_minutes'] ?? 60);
        $inicio = (int) Session::get('tiempo');
        if ($inicio && (time() - $inicio) > ($maxMin * 60)) {
            Session::destroy();
            session_start();
            Session::set('bo_login_error', 'Sesión expirada. Ingresa de nuevo.');
            $this->redireccionar('backoffice/login');
        }
        Session::set('tiempo', time());
    }

    private function estaAutenticado()
    {
        return Session::get('autenticado') && Session::get('bo_auth') && Session::get('level') === 'admin';
    }

    private function csrfToken()
    {
        if (!Session::get('bo_csrf')) {
            Session::set('bo_csrf', bin2hex(random_bytes(32)));
        }
        return Session::get('bo_csrf');
    }

    private function validarCsrf()
    {
        $token = (string) $this->getPostRaw('csrf');
        $sessionToken = (string) Session::get('bo_csrf');
        if ($token === '' || $sessionToken === '') {
            return false;
        }
        return hash_equals($sessionToken, $token);
    }

    private function soloPost()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            exit('Método no permitido');
        }
    }

    private function getPostRaw($clave)
    {
        return isset($_POST[$clave]) ? $_POST[$clave] : '';
    }

    private function limpiarUsuario($usuario)
    {
        $usuario = trim((string) $usuario);
        $usuario = preg_replace('/[^a-zA-Z0-9_\-\.]/', '', $usuario);
        return substr($usuario, 0, 40);
    }

    private function attemptsFile()
    {
        return ROOT . 'tmp' . DS . 'backoffice_login_attempts.json';
    }

    private function clientKey()
    {
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
        return hash('sha256', $ip);
    }

    private function leerIntentos()
    {
        $file = $this->attemptsFile();
        if (!is_file($file)) {
            return array();
        }
        $data = json_decode((string) file_get_contents($file), true);
        return is_array($data) ? $data : array();
    }

    private function guardarIntentos($data)
    {
        $dir = ROOT . 'tmp';
        if (!is_dir($dir)) {
            @mkdir($dir, 0755, true);
        }
        file_put_contents($this->attemptsFile(), json_encode($data), LOCK_EX);
    }

    private function registrarIntentoFallido()
    {
        $key = $this->clientKey();
        $data = $this->leerIntentos();
        $now = time();
        $item = isset($data[$key]) ? $data[$key] : array('count' => 0, 'first' => $now);

        if (($now - (int) $item['first']) > ((int) $this->_auth['lockout_minutes'] * 60)) {
            $item = array('count' => 0, 'first' => $now);
        }

        $item['count'] = (int) $item['count'] + 1;
        $item['last'] = $now;
        $data[$key] = $item;
        $this->guardarIntentos($data);
    }

    private function estaBloqueado()
    {
        $key = $this->clientKey();
        $data = $this->leerIntentos();
        if (!isset($data[$key])) {
            return false;
        }
        $item = $data[$key];
        $max = (int) $this->_auth['max_attempts'];
        $lock = (int) $this->_auth['lockout_minutes'] * 60;
        if ((int) $item['count'] >= $max && (time() - (int) $item['first']) < $lock) {
            return true;
        }
        return false;
    }

    private function limpiarIntentos()
    {
        $key = $this->clientKey();
        $data = $this->leerIntentos();
        if (isset($data[$key])) {
            unset($data[$key]);
            $this->guardarIntentos($data);
        }
    }

    private function obtenerPareja($parejaId)
    {
        foreach ($this->_auth['parejas'] as $p) {
            if ((int) $p['id'] === (int) $parejaId) {
                return $p;
            }
        }
        return null;
    }

    private function enriquecerParejas()
    {
        $out = array();
        foreach ($this->_auth['parejas'] as $p) {
            $rows = $this->_bo->listarAsignaciones((int) $p['id']);
            $activos = 0;
            foreach ($rows as $r) {
                if ((int) $r['activo'] === 1) {
                    $activos++;
                }
            }
            $p['total'] = count($rows);
            $p['activos'] = $activos;
            $out[] = $p;
        }
        return $out;
    }
}
