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
        $this->_view->assign('flash_ok', Session::get('bo_flash_ok'));
        $this->_view->assign('flash_error', Session::get('bo_flash_error'));
        $this->_view->assign('siguiente_id', $this->siguienteParejaId());
        Session::set('bo_flash_ok', null);
        Session::set('bo_flash_error', null);
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

        $okUser = hash_equals($this->_auth['username'], $usuario);
        $okPass = password_verify($clave, $this->_auth['password_hash']);

        if (!$okUser || !$okPass) {
            $this->registrarIntentoFallido();
            usleep(400000);
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

    public function catalogo()
    {
        $this->requerirAuth();
        $catalogo = $this->_bo->listarCatalogo('', 0, 400);
        foreach ($catalogo as &$row) {
            $row['imagen_archivo'] = $this->basenameImagen($row['imagen'] ?? '');
        }
        unset($row);

        $this->_view->assign('titulo', 'Backoffice | Catálogo');
        $this->_view->assign('catalogo', $catalogo);
        $this->_view->assign('categorias', $this->_bo->listarCategorias(true));
        $this->_view->assign('categorias_todas', $this->_bo->listarCategorias(false));
        $this->_view->assign('imagenes', $this->listarImagenesLocales());
        $this->_view->assign('csrf', $this->csrfToken());
        $this->_view->assign('usuario', Session::get('bo_user'));
        $this->_view->assign('flash_ok', Session::get('bo_flash_ok'));
        $this->_view->assign('flash_error', Session::get('bo_flash_error'));
        Session::set('bo_flash_ok', null);
        Session::set('bo_flash_error', null);
        $this->renderBo('catalogo');
    }

    public function categorias()
    {
        $this->requerirAuth();
        $this->_view->assign('titulo', 'Backoffice | Categorías');
        $this->_view->assign('categorias', $this->_bo->listarCategorias(false));
        $this->_view->assign('csrf', $this->csrfToken());
        $this->_view->assign('usuario', Session::get('bo_user'));
        $this->_view->assign('flash_ok', Session::get('bo_flash_ok'));
        $this->_view->assign('flash_error', Session::get('bo_flash_error'));
        Session::set('bo_flash_ok', null);
        Session::set('bo_flash_error', null);
        $this->renderBo('categorias');
    }

    public function crearCategoria()
    {
        $this->requerirAuth();
        $this->soloPost();
        if (!$this->validarCsrf()) {
            Session::set('bo_flash_error', 'Token CSRF inválido.');
            $this->redireccionar('backoffice/categorias');
        }

        $nombre = trim(strip_tags((string) $this->getPostRaw('nombre')));
        if ($nombre === '' || strlen($nombre) > 80) {
            Session::set('bo_flash_error', 'Nombre de categoría inválido.');
            $this->redireccionar('backoffice/categorias');
        }

        try {
            $id = $this->_bo->crearCategoria($nombre, 1);
            Session::set('bo_flash_ok', $id > 0 ? 'Categoría creada (ID ' . $id . ').' : 'No se pudo crear.');
        } catch (Exception $e) {
            Session::set('bo_flash_error', 'Error al crear categoría.');
        }
        $this->redireccionar('backoffice/categorias');
    }

    public function actualizarCategoria()
    {
        $this->requerirAuth();
        $this->soloPost();
        if (!$this->validarCsrf()) {
            Session::set('bo_flash_error', 'Token CSRF inválido.');
            $this->redireccionar('backoffice/categorias');
        }

        $id = $this->postInt('categoria_id');
        $nombre = trim(strip_tags((string) $this->getPostRaw('nombre')));
        $activo = ((string) $this->getPostRaw('activo') === '1') ? 1 : 0;

        if ($id < 1 || $nombre === '' || strlen($nombre) > 80) {
            Session::set('bo_flash_error', 'Datos inválidos.');
            $this->redireccionar('backoffice/categorias');
        }

        try {
            $ok = $this->_bo->actualizarCategoria($id, $nombre, $activo);
            Session::set('bo_flash_ok', $ok ? 'Categoría actualizada.' : 'No se pudo actualizar.');
        } catch (Exception $e) {
            Session::set('bo_flash_error', 'Error al actualizar categoría.');
        }
        $this->redireccionar('backoffice/categorias');
    }

    public function desactivarCategoria()
    {
        $this->requerirAuth();
        $this->soloPost();
        if (!$this->validarCsrf()) {
            Session::set('bo_flash_error', 'Token CSRF inválido.');
            $this->redireccionar('backoffice/categorias');
        }

        $id = $this->postInt('categoria_id');
        if ($id < 1 || !$this->_bo->obtenerCategoria($id)) {
            Session::set('bo_flash_error', 'Categoría no válida.');
            $this->redireccionar('backoffice/categorias');
        }

        try {
            $ok = $this->_bo->desactivarCategoria($id);
            Session::set('bo_flash_ok', $ok ? 'Categoría desactivada.' : 'No se pudo desactivar.');
        } catch (Exception $e) {
            Session::set('bo_flash_error', 'Error al desactivar.');
        }
        $this->redireccionar('backoffice/categorias');
    }

    public function pareja($parejaId = 0)
    {
        $this->requerirAuth();
        $parejaId = (int) $parejaId;
        $pareja = $this->obtenerPareja($parejaId);
        if (!$pareja) {
            $this->redireccionar('backoffice');
        }

        $this->_view->assign('titulo', 'Regalos | ' . $pareja['nombre']);
        $this->_view->assign('pareja', $pareja);
        $this->_view->assign('asignaciones', $this->_bo->listarAsignaciones($parejaId));
        $this->_view->assign('categorias', $this->_bo->listarCategorias(true));
        $this->_view->assign('catalogo', $this->_bo->listarCatalogo('', 0, 400));
        $this->_view->assign('imagenes', $this->listarImagenesLocales());
        $this->_view->assign('csrf', $this->csrfToken());
        $this->_view->assign('usuario', Session::get('bo_user'));
        $this->_view->assign('flash_ok', Session::get('bo_flash_ok'));
        $this->_view->assign('flash_error', Session::get('bo_flash_error'));
        Session::set('bo_flash_ok', null);
        Session::set('bo_flash_error', null);
        $this->renderBo('pareja');
    }

    public function crearBoda()
    {
        $this->requerirAuth();
        $this->soloPost();
        if (!$this->validarCsrf()) {
            Session::set('bo_flash_error', 'Token CSRF inválido.');
            $this->redireccionar('backoffice');
        }

        $id = $this->postInt('pareja_id');
        $nombre = trim(strip_tags((string) $this->getPostRaw('nombre')));
        $slug = strtolower(trim((string) $this->getPostRaw('slug')));
        $slug = preg_replace('/[^a-z0-9\-]/', '', $slug);

        if ($id < 1 || $nombre === '' || $slug === '') {
            Session::set('bo_flash_error', 'Completa ID, nombre y slug.');
            $this->redireccionar('backoffice');
        }

        if ($this->obtenerPareja($id)) {
            Session::set('bo_flash_error', 'Ese ID de pareja ya existe.');
            $this->redireccionar('backoffice');
        }

        $parejas = $this->leerParejas();
        array_unshift($parejas, array(
            'id' => $id,
            'nombre' => $nombre,
            'slug' => $slug,
        ));
        $this->guardarParejas($parejas);
        Session::set('bo_flash_ok', 'Boda agregada. Ya puedes asignarle regalos.');
        $this->redireccionar('backoffice/pareja/' . $id);
    }

    public function crearObsequio()
    {
        $this->requerirAuth();
        $this->soloPost();
        if (!$this->validarCsrf()) {
            Session::set('bo_flash_error', 'Token CSRF inválido.');
            $this->redireccionar('backoffice/catalogo');
        }

        $redirect = $this->sanitizarRedirect((string) $this->getPostRaw('redirect'), 'backoffice/catalogo');

        $baseId = $this->postInt('base_obsequio_id');
        $categoriaId = $this->postInt('categoria_id');
        $nombre = trim(strip_tags((string) $this->getPostRaw('nombre')));
        $monto = round($this->postFloat('monto'), 2);
        $imagenFile = basename((string) $this->getPostRaw('imagen_archivo'));
        $asignarPareja = $this->postInt('asignar_pareja_id');
        $cupos = $this->postInt('cantidad', 1);
        if ($cupos < 1) {
            $cupos = 1;
        }

        // Duplicar desde un obsequio existente (misma imagen/categoría/nombre base)
        $imagen = '';
        try {
            $uploadName = $this->procesarImagenSubida('imagen_upload');

            if ($baseId > 0) {
                $base = $this->_bo->obtenerObsequio($baseId);
                if (!$base) {
                    Session::set('bo_flash_error', 'Obsequio base no encontrado.');
                    $this->redireccionar($redirect);
                }
                if ($categoriaId < 1) {
                    $categoriaId = (int) $base['categoria_id'];
                }
                if ($nombre === '') {
                    $nombre = $base['nombre'];
                }
                if ($uploadName !== '') {
                    $imagen = $this->urlImagenLocal($uploadName);
                } elseif ($imagenFile !== '' && $imagenFile !== '.') {
                    $imagen = $this->urlImagenLocal($imagenFile);
                } else {
                    $imagen = $base['imagen'];
                }
            } else {
                if ($nombre === '') {
                    Session::set('bo_flash_error', 'Escribe el nombre del obsequio.');
                    $this->redireccionar($redirect);
                }
                if ($categoriaId < 1) {
                    Session::set('bo_flash_error', 'Selecciona una categoría (no dejes “del base” si es nuevo).');
                    $this->redireccionar($redirect);
                }
                if ($uploadName !== '') {
                    $imagen = $this->urlImagenLocal($uploadName);
                } elseif ($imagenFile !== '' && $imagenFile !== '.') {
                    $imagen = $this->urlImagenLocal($imagenFile);
                } else {
                    Session::set('bo_flash_error', 'Sube una imagen o elige una existente de la carpeta.');
                    $this->redireccionar($redirect);
                }
            }

            if ($monto < 0 || $monto > 999999.99) {
                Session::set('bo_flash_error', 'Monto inválido.');
                $this->redireccionar($redirect);
            }

            if (strlen($nombre) > 80) {
                $nombre = substr($nombre, 0, 80);
            }

            $nuevoId = $this->_bo->crearObsequio($categoriaId, $imagen, $nombre, number_format($monto, 2, '.', ''), 1);
            if ($nuevoId < 1) {
                Session::set('bo_flash_error', 'No se pudo crear el obsequio.');
                $this->redireccionar($redirect);
            }

            if ($asignarPareja > 0 && $this->obtenerPareja($asignarPareja)) {
                $this->_bo->asignar($asignarPareja, $nuevoId, $cupos);
                Session::set('bo_flash_ok', 'Nuevo registro creado (ID ' . $nuevoId . ') y asignado a la boda.');
                $this->redireccionar('backoffice/pareja/' . $asignarPareja);
            }

            Session::set('bo_flash_ok', 'Obsequio creado en catálogo (ID ' . $nuevoId . ').');
        } catch (Exception $e) {
            $msg = trim($e->getMessage());
            Session::set('bo_flash_error', $msg !== '' ? $msg : 'Error al crear obsequio. Revisa imagen/datos.');
        }

        $this->redireccionar($redirect);
    }

    public function actualizarObsequio()
    {
        $this->requerirAuth();
        $this->soloPost();
        if (!$this->validarCsrf()) {
            Session::set('bo_flash_error', 'Token CSRF inválido.');
            $this->redireccionar('backoffice/catalogo');
        }

        $obsequioId = $this->postInt('obsequio_id');
        $categoriaId = $this->postInt('categoria_id');
        $nombre = trim(strip_tags((string) $this->getPostRaw('nombre')));
        $monto = round($this->postFloat('monto'), 2);
        $imagenFile = basename((string) $this->getPostRaw('imagen_archivo'));
        $activo = ((string) $this->getPostRaw('activo') === '1') ? 1 : 0;

        $actual = $this->_bo->obtenerObsequio($obsequioId);
        if (!$actual) {
            Session::set('bo_flash_error', 'Obsequio no encontrado.');
            $this->redireccionar('backoffice/catalogo');
        }

        if ($categoriaId < 1 || $nombre === '' || strlen($nombre) > 80) {
            Session::set('bo_flash_error', 'Nombre y categoría son obligatorios.');
            $this->redireccionar('backoffice/catalogo');
        }

        if ($monto < 0 || $monto > 999999.99) {
            Session::set('bo_flash_error', 'Monto inválido.');
            $this->redireccionar('backoffice/catalogo');
        }

        try {
            $uploadName = $this->procesarImagenSubida('imagen_upload');
            if ($uploadName !== '') {
                $imagen = $this->urlImagenLocal($uploadName);
            } elseif ($imagenFile !== '' && $imagenFile !== '.') {
                $imagen = $this->urlImagenLocal($imagenFile);
            } else {
                $imagen = $actual['imagen'];
            }

            $ok = $this->_bo->actualizarObsequio(
                $obsequioId,
                $categoriaId,
                $imagen,
                $nombre,
                number_format($monto, 2, '.', ''),
                $activo
            );
            Session::set('bo_flash_ok', $ok ? 'Obsequio #' . $obsequioId . ' actualizado.' : 'No se pudo actualizar.');
        } catch (Exception $e) {
            $msg = trim($e->getMessage());
            Session::set('bo_flash_error', $msg !== '' ? $msg : 'Error al actualizar obsequio.');
        }

        $this->redireccionar('backoffice/catalogo');
    }

    private function sanitizarRedirect($redirect, $default)
    {
        $redirect = trim($redirect);
        if ($redirect === '' || strpos($redirect, 'backoffice') !== 0) {
            return $default;
        }
        if (!preg_match('#^backoffice(/[a-zA-Z0-9_\-/]*)?$#', $redirect)) {
            return $default;
        }
        return $redirect;
    }

    private function basenameImagen($url)
    {
        $url = trim((string) $url);
        if ($url === '') {
            return '';
        }
        $path = parse_url($url, PHP_URL_PATH);
        if (!$path) {
            $path = $url;
        }
        return basename(rawurldecode($path));
    }

    public function asignar()
    {
        $this->requerirAuth();
        $this->soloPost();
        if (!$this->validarCsrf()) {
            Session::set('bo_flash_error', 'Token CSRF inválido.');
            $this->redireccionar('backoffice');
        }

        $parejaId = $this->postInt('pareja_id');
        $obsequioId = $this->postInt('obsequio_id');
        $cantidad = $this->postInt('cantidad', 1);
        if ($cantidad < 1) {
            $cantidad = 1;
        }
        if ($cantidad > 9999) {
            $cantidad = 9999;
        }

        if (!$this->obtenerPareja($parejaId) || $obsequioId < 1) {
            Session::set('bo_flash_error', 'Datos inválidos.');
            $this->redireccionar('backoffice/pareja/' . max(0, $parejaId));
        }

        try {
            // Copiar el catálogo a un registro NUEVO y asignar solo esa copia a esta boda.
            // Así no se toca el original ni las listas de otras bodas.
            $base = $this->_bo->obtenerObsequio($obsequioId);
            if (!$base) {
                Session::set('bo_flash_error', 'Obsequio no encontrado.');
                $this->redireccionar('backoffice/pareja/' . $parejaId);
            }

            $nuevoId = $this->_bo->crearObsequio(
                (int) $base['categoria_id'],
                $base['imagen'],
                $base['nombre'],
                $base['monto'],
                1
            );
            if ($nuevoId < 1) {
                Session::set('bo_flash_error', 'No se pudo copiar el obsequio.');
                $this->redireccionar('backoffice/pareja/' . $parejaId);
            }

            $ok = $this->_bo->asignar($parejaId, $nuevoId, $cantidad);
            Session::set(
                'bo_flash_ok',
                $ok
                    ? 'Copia creada (obsequio #' . $nuevoId . ') y asignada solo a esta boda.'
                    : 'No se pudo guardar la asignación.'
            );
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

        $parejaId = $this->postInt('pareja_id');
        $id = $this->postInt('obsequio_pareja_id');
        $cantidad = $this->postInt('cantidad', 1);
        $activo = ((string) $this->getPostRaw('activo') === '1') ? 1 : 0;

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

        $parejaId = $this->postInt('pareja_id');
        $id = $this->postInt('obsequio_pareja_id');

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

    /* ===================== Datos auxiliares ===================== */

    private function parejasFile()
    {
        return ROOT . 'application' . DS . 'backoffice_parejas.json';
    }

    private function leerParejas()
    {
        $file = $this->parejasFile();
        if (!is_file($file)) {
            return array();
        }
        $data = json_decode((string) file_get_contents($file), true);
        if (!is_array($data)) {
            return array();
        }
        usort($data, function ($a, $b) {
            return ((int) $b['id']) - ((int) $a['id']);
        });
        return $data;
    }

    private function guardarParejas($parejas)
    {
        usort($parejas, function ($a, $b) {
            return ((int) $b['id']) - ((int) $a['id']);
        });
        file_put_contents(
            $this->parejasFile(),
            json_encode(array_values($parejas), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
            LOCK_EX
        );
    }

    private function siguienteParejaId()
    {
        $max = 0;
        foreach ($this->leerParejas() as $p) {
            $max = max($max, (int) $p['id']);
        }
        return $max + 1;
    }

    private function listarImagenesLocales()
    {
        $dir = ROOT . 'views' . DS . 'layout' . DS . 'neela' . DS . 'images';
        if (!is_dir($dir)) {
            return array();
        }
        $files = scandir($dir);
        $out = array();
        foreach ($files as $f) {
            if ($f === '.' || $f === '..') {
                continue;
            }
            if (!preg_match('/\.(webp|png|jpe?g)$/i', $f)) {
                continue;
            }
            // Evitar decorativos del layout
            if (preg_match('/^(flower|logo|cards|background|izipay|yvanna)/i', $f)) {
                continue;
            }
            $out[] = $f;
        }
        sort($out, SORT_NATURAL | SORT_FLAG_CASE);
        return $out;
    }

    private function imagenesDir()
    {
        return ROOT . 'views' . DS . 'layout' . DS . 'neela' . DS . 'images';
    }

    /**
     * Procesa $_FILES[$campo]: valida, redimensiona y guarda en neela/images.
     * @return string nombre de archivo guardado, o '' si no hubo upload
     */
    private function procesarImagenSubida($campo)
    {
        if (!isset($_FILES[$campo]) || !is_array($_FILES[$campo])) {
            return '';
        }
        $file = $_FILES[$campo];
        if (!isset($file['error']) || (int) $file['error'] === UPLOAD_ERR_NO_FILE) {
            return '';
        }
        if ((int) $file['error'] !== UPLOAD_ERR_OK) {
            throw new Exception('Error al subir la imagen.');
        }
        if (!is_uploaded_file($file['tmp_name'])) {
            throw new Exception('Archivo de imagen inválido.');
        }

        $maxBytes = 5 * 1024 * 1024;
        if ((int) $file['size'] > $maxBytes) {
            throw new Exception('La imagen supera 5 MB.');
        }

        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime = $finfo->file($file['tmp_name']);
        $allowed = array(
            'image/jpeg' => 'jpg',
            'image/png' => 'png',
            'image/webp' => 'webp',
        );
        if (!isset($allowed[$mime])) {
            throw new Exception('Solo se permiten JPG, PNG o WebP.');
        }

        $dir = $this->imagenesDir();
        if (!is_dir($dir) || !is_writable($dir)) {
            throw new Exception('No se puede escribir en la carpeta de imágenes.');
        }

        $baseName = 'obsequio-' . date('Ymd-His') . '-' . bin2hex(random_bytes(3));
        $maxSide = 900;

        if (extension_loaded('gd')) {
            $saved = $this->redimensionarYGuardar($file['tmp_name'], $mime, $dir, $baseName, $maxSide);
            if ($saved !== '') {
                return $saved;
            }
        }

        // Fallback sin GD: copiar con extensión original
        $destName = $baseName . '.' . $allowed[$mime];
        $destPath = $dir . DS . $destName;
        if (!move_uploaded_file($file['tmp_name'], $destPath)) {
            throw new Exception('No se pudo guardar la imagen.');
        }
        @chmod($destPath, 0644);
        return $destName;
    }

    private function redimensionarYGuardar($tmpPath, $mime, $dir, $baseName, $maxSide)
    {
        switch ($mime) {
            case 'image/jpeg':
                $src = @imagecreatefromjpeg($tmpPath);
                break;
            case 'image/png':
                $src = @imagecreatefrompng($tmpPath);
                break;
            case 'image/webp':
                $src = function_exists('imagecreatefromwebp') ? @imagecreatefromwebp($tmpPath) : false;
                break;
            default:
                $src = false;
        }
        if (!$src) {
            return '';
        }

        $w = imagesx($src);
        $h = imagesy($src);
        if ($w < 1 || $h < 1) {
            imagedestroy($src);
            return '';
        }

        $scale = 1.0;
        $longest = max($w, $h);
        if ($longest > $maxSide) {
            $scale = $maxSide / $longest;
        }
        $nw = max(1, (int) round($w * $scale));
        $nh = max(1, (int) round($h * $scale));

        $dst = imagecreatetruecolor($nw, $nh);
        imagealphablending($dst, false);
        imagesavealpha($dst, true);
        $transparent = imagecolorallocatealpha($dst, 0, 0, 0, 127);
        imagefilledrectangle($dst, 0, 0, $nw, $nh, $transparent);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $nw, $nh, $w, $h);
        imagedestroy($src);

        $destName = $baseName . '.webp';
        $destPath = $dir . DS . $destName;
        $ok = false;
        if (function_exists('imagewebp')) {
            $ok = imagewebp($dst, $destPath, 82);
        }
        if (!$ok) {
            $destName = $baseName . '.png';
            $destPath = $dir . DS . $destName;
            $ok = imagepng($dst, $destPath, 6);
        }
        imagedestroy($dst);

        if (!$ok || !is_file($destPath)) {
            return '';
        }
        @chmod($destPath, 0644);
        return $destName;
    }

    private function urlImagenLocal($filename)
    {
        $filename = basename($filename);
        $path = $this->imagenesDir() . DS . $filename;
        if (!is_file($path)) {
            throw new Exception('Imagen no encontrada');
        }
        return rtrim(BASE_URL, '/') . '/views/layout/neela/images/' . $filename;
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

    /** Entero desde POST sin usar empty() (evita perder el 0). */
    private function postInt($clave, $default = 0)
    {
        if (!isset($_POST[$clave]) || $_POST[$clave] === '' || $_POST[$clave] === null) {
            return (int) $default;
        }
        return (int) $_POST[$clave];
    }

    private function postFloat($clave, $default = 0.0)
    {
        if (!isset($_POST[$clave]) || $_POST[$clave] === '' || $_POST[$clave] === null) {
            return (float) $default;
        }
        return (float) str_replace(',', '.', (string) $_POST[$clave]);
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
        foreach ($this->leerParejas() as $p) {
            if ((int) $p['id'] === (int) $parejaId) {
                return $p;
            }
        }
        return null;
    }

    private function enriquecerParejas()
    {
        $out = array();
        foreach ($this->leerParejas() as $p) {
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
