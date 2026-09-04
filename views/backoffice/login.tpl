<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>{$titulo|escape:'html'}</title>
    <style>
        :root { --bg:#111827; --card:#1f2937; --text:#f3f4f6; --muted:#9ca3af; --accent:#cfb89d; --danger:#f87171; }
        * { box-sizing: border-box; }
        body { margin:0; min-height:100vh; display:flex; align-items:center; justify-content:center; font-family: Georgia, 'Times New Roman', serif; background: radial-gradient(circle at top, #1f2937, #0b1220 60%); color: var(--text); }
        .card { width: min(420px, 92vw); background: var(--card); border:1px solid #374151; border-radius:16px; padding:2rem 1.5rem; box-shadow: 0 20px 50px rgba(0,0,0,.35); }
        h1 { margin:0 0 .35rem; font-size:1.6rem; color: var(--accent); }
        p { margin:0 0 1.25rem; color: var(--muted); font-size:.95rem; }
        label { display:block; margin:0 0 .35rem; font-size:.85rem; color: var(--muted); }
        input { width:100%; padding:.75rem .85rem; border-radius:10px; border:1px solid #4b5563; background:#111827; color:var(--text); margin-bottom:1rem; font-size:1rem; }
        button { width:100%; border:0; border-radius:999px; padding:.85rem 1rem; background: var(--accent); color:#1f2937; font-weight:700; cursor:pointer; font-size:1rem; }
        button:hover { opacity:.92; }
        .error { background: rgba(248,113,113,.12); color: var(--danger); border:1px solid rgba(248,113,113,.35); padding:.7rem .85rem; border-radius:10px; margin-bottom:1rem; font-size:.9rem; }
        .hint { margin-top:1rem; font-size:.75rem; color:#6b7280; text-align:center; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Backoffice Papiro</h1>
        <p>Acceso restringido. Solo personal autorizado.</p>

        {if $error}
            <div class="error">{$error|escape:'html'}</div>
        {/if}

        <form method="post" action="{$_layoutParams.root}backoffice/autenticar" autocomplete="off">
            <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
            <label for="usuario">Usuario</label>
            <input id="usuario" name="usuario" type="text" maxlength="40" required autocomplete="username">

            <label for="clave">Contraseña</label>
            <input id="clave" name="clave" type="password" maxlength="100" required autocomplete="current-password">

            <button type="submit">Ingresar</button>
        </form>
        <div class="hint">Panel protegido · noindex · intentos limitados</div>
    </div>
</body>
</html>
