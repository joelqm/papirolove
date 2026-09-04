<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>{$titulo|escape:'html'}</title>
    <style>
        :root { --bg:#0b1220; --card:#111827; --line:#374151; --text:#f3f4f6; --muted:#9ca3af; --accent:#cfb89d; --ok:#34d399; }
        * { box-sizing:border-box; }
        body { margin:0; font-family: Georgia, serif; background:var(--bg); color:var(--text); }
        header { display:flex; justify-content:space-between; align-items:center; gap:1rem; padding:1rem 1.25rem; border-bottom:1px solid var(--line); background:#111827; position:sticky; top:0; }
        header h1 { margin:0; font-size:1.2rem; color:var(--accent); }
        header .meta { color:var(--muted); font-size:.85rem; }
        main { max-width:980px; margin:0 auto; padding:1.25rem; }
        .grid { display:grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap:1rem; }
        .card { background:var(--card); border:1px solid var(--line); border-radius:14px; padding:1rem 1.1rem; }
        .card h2 { margin:0 0 .4rem; font-size:1.05rem; }
        .card p { margin:0 0 .9rem; color:var(--muted); font-size:.88rem; }
        .badge { display:inline-block; background:#1f2937; border:1px solid var(--line); border-radius:999px; padding:.2rem .55rem; font-size:.75rem; color:var(--ok); }
        a.btn, button.btn { display:inline-flex; align-items:center; justify-content:center; text-decoration:none; border:0; border-radius:999px; padding:.55rem 1rem; background:var(--accent); color:#1f2937; font-weight:700; cursor:pointer; font-size:.9rem; }
        a.btn-ghost, button.btn-ghost { background:transparent; color:var(--text); border:1px solid var(--line); }
        form.inline { display:inline; margin:0; }
    </style>
</head>
<body>
    <header>
        <div>
            <h1>Backoffice · Listas de regalos</h1>
            <div class="meta">Usuario: {$usuario|escape:'html'}</div>
        </div>
        <form class="inline" method="post" action="{$_layoutParams.root}backoffice/logout">
            <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
            <button class="btn btn-ghost" type="submit">Salir</button>
        </form>
    </header>

    <main>
        <p style="color:#9ca3af; margin-top:0;">Elige una boda para administrar su colectivo (tbl_obsequio_pareja).</p>
        <div class="grid">
            {foreach from=$parejas item=p}
                <div class="card">
                    <h2>{$p.nombre|escape:'html'}</h2>
                    <p>ID pareja: {$p.id|escape:'html'} · slug: {$p.slug|escape:'html'}</p>
                    <p><span class="badge">{$p.activos|escape:'html'} activos / {$p.total|escape:'html'} total</span></p>
                    <a class="btn" href="{$_layoutParams.root}backoffice/pareja/{$p.id|escape:'url'}">Administrar regalos</a>
                </div>
            {/foreach}
        </div>
    </main>
</body>
</html>
