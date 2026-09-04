<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>{$titulo|escape:'html'}</title>
    <style>
        :root { --bg:#0b1220; --card:#111827; --line:#374151; --text:#f3f4f6; --muted:#9ca3af; --accent:#cfb89d; --ok:#34d399; --danger:#f87171; }
        * { box-sizing:border-box; }
        body { margin:0; font-family: Georgia, serif; background:var(--bg); color:var(--text); }
        header { display:flex; justify-content:space-between; align-items:center; gap:1rem; flex-wrap:wrap; padding:1rem 1.25rem; border-bottom:1px solid var(--line); background:#111827; position:sticky; top:0; z-index:5; }
        header h1 { margin:0; font-size:1.2rem; color:var(--accent); }
        header .meta { color:var(--muted); font-size:.85rem; }
        main { max-width:980px; margin:0 auto; padding:1.25rem; }
        .grid { display:grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap:1rem; }
        .card, .panel { background:var(--card); border:1px solid var(--line); border-radius:14px; padding:1rem 1.1rem; margin-bottom:1rem; }
        .card h2, .panel h2 { margin:0 0 .4rem; font-size:1.05rem; }
        .card p { margin:0 0 .9rem; color:var(--muted); font-size:.88rem; }
        .badge { display:inline-block; background:#1f2937; border:1px solid var(--line); border-radius:999px; padding:.2rem .55rem; font-size:.75rem; color:var(--ok); }
        a.btn, button { display:inline-flex; align-items:center; justify-content:center; text-decoration:none; border:0; border-radius:999px; padding:.55rem 1rem; background:var(--accent); color:#1f2937; font-weight:700; cursor:pointer; font-size:.9rem; }
        a.btn-ghost, button.ghost { background:transparent; color:var(--text); border:1px solid var(--line); }
        form.inline { display:inline; margin:0; }
        .row { display:flex; gap:.6rem; flex-wrap:wrap; align-items:end; }
        label { display:block; font-size:.78rem; color:var(--muted); margin-bottom:.25rem; }
        input, select { padding:.55rem .65rem; border-radius:8px; border:1px solid var(--line); background:#0b1220; color:var(--text); min-width:140px; }
        .flash { padding:.75rem 1rem; border-radius:10px; margin-bottom:1rem; }
        .flash.ok { background:rgba(52,211,153,.12); border:1px solid rgba(52,211,153,.35); color:var(--ok); }
        .flash.err { background:rgba(248,113,113,.12); border:1px solid rgba(248,113,113,.35); color:var(--danger); }
        .actions { display:flex; gap:.4rem; flex-wrap:wrap; }
    </style>
</head>
<body>
    <header>
        <div>
            <h1>Backoffice · Listas de regalos</h1>
            <div class="meta">Usuario: {$usuario|escape:'html'} · más recientes primero</div>
        </div>
        <div class="actions">
            <a class="btn btn-ghost" href="{$_layoutParams.root}backoffice/catalogo">Catálogo</a>
            <a class="btn btn-ghost" href="{$_layoutParams.root}backoffice/categorias">Categorías</a>
            <form class="inline" method="post" action="{$_layoutParams.root}backoffice/logout">
                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                <button class="ghost" type="submit">Salir</button>
            </form>
        </div>
    </header>

    <main>
        {if $flash_ok}<div class="flash ok">{$flash_ok|escape:'html'}</div>{/if}
        {if $flash_error}<div class="flash err">{$flash_error|escape:'html'}</div>{/if}

        <div class="panel">
            <h2>Agregar nueva boda</h2>
            <form method="post" action="{$_layoutParams.root}backoffice/crearBoda">
                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                <div class="row">
                    <div>
                        <label for="pareja_id">ID pareja</label>
                        <input id="pareja_id" type="number" name="pareja_id" min="1" value="{$siguiente_id|escape:'html'}" required>
                    </div>
                    <div style="flex:1; min-width:180px;">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" type="text" name="nombre" maxlength="120" placeholder="Ana y Luis" required style="width:100%;">
                    </div>
                    <div style="flex:1; min-width:160px;">
                        <label for="slug">Slug (carpeta/web)</label>
                        <input id="slug" type="text" name="slug" maxlength="80" placeholder="anayluis" required style="width:100%;">
                    </div>
                    <div><button type="submit">Crear boda</button></div>
                </div>
            </form>
        </div>

        <div class="grid">
            {foreach from=$parejas item=p}
                <div class="card">
                    <h2>{$p.nombre|escape:'html'}</h2>
                    <p>ID: {$p.id|escape:'html'} · slug: {$p.slug|escape:'html'}</p>
                    <p><span class="badge">{$p.activos|escape:'html'} activos / {$p.total|escape:'html'} total</span></p>
                    <div class="actions">
                        <a class="btn" href="{$_layoutParams.root}backoffice/pareja/{$p.id|escape:'html'}">Administrar regalos</a>
                        {if $p.slug}
                        <a class="btn btn-ghost" href="{$_layoutParams.root}{$p.slug|escape:'html'}" target="_blank" rel="noopener noreferrer">Ver web</a>
                        {/if}
                    </div>
                </div>
            {/foreach}
        </div>
    </main>
</body>
</html>
