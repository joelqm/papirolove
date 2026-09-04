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
        header h1 { margin:0; font-size:1.15rem; color:var(--accent); }
        main { max-width:900px; margin:0 auto; padding:1.25rem; }
        .panel { background:var(--card); border:1px solid var(--line); border-radius:14px; padding:1rem; margin-bottom:1.25rem; }
        .panel h2 { margin:0 0 .35rem; font-size:1.05rem; }
        .hint { margin:0 0 .85rem; color:var(--muted); font-size:.85rem; }
        .row { display:flex; gap:.6rem; flex-wrap:wrap; align-items:end; }
        label { display:block; font-size:.78rem; color:var(--muted); margin-bottom:.25rem; }
        select, input[type=text], input[type=number] { padding:.55rem .65rem; border-radius:8px; border:1px solid var(--line); background:#0b1220; color:var(--text); min-width:120px; }
        input.wide { width:100%; min-width:min(280px,100%); }
        button, a.btn { border:0; border-radius:999px; padding:.55rem 1rem; background:var(--accent); color:#1f2937; font-weight:700; cursor:pointer; text-decoration:none; display:inline-flex; font-size:.88rem; }
        a.ghost, button.ghost { background:transparent; color:var(--text); border:1px solid var(--line); }
        button.danger { background:#7f1d1d; color:#fecaca; }
        table { width:100%; border-collapse:collapse; font-size:.88rem; }
        th, td { padding:.55rem .4rem; border-bottom:1px solid var(--line); text-align:left; vertical-align:middle; }
        th { color:var(--muted); font-size:.75rem; text-transform:uppercase; }
        .flash { padding:.75rem 1rem; border-radius:10px; margin-bottom:1rem; }
        .flash.ok { background:rgba(52,211,153,.12); border:1px solid rgba(52,211,153,.35); color:var(--ok); }
        .flash.err { background:rgba(248,113,113,.12); border:1px solid rgba(248,113,113,.35); color:var(--danger); }
        .actions { display:flex; gap:.4rem; flex-wrap:wrap; }
        .mono { color:var(--muted); font-size:.8rem; }
        .off { opacity:.5; }
        .inline { display:inline; margin:0; }
    </style>
</head>
<body>
    <header>
        <div>
            <h1>Categorías</h1>
            <div style="color:#9ca3af;font-size:.85rem;">tbl_categoria · recientes primero</div>
        </div>
        <div class="actions">
            <a class="btn ghost" href="{$_layoutParams.root}backoffice">← Bodas</a>
            <a class="btn ghost" href="{$_layoutParams.root}backoffice/catalogo">Catálogo</a>
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
            <h2>Nueva categoría</h2>
            <form method="post" action="{$_layoutParams.root}backoffice/crearCategoria">
                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                <div class="row">
                    <div style="flex:1;min-width:200px;">
                        <label for="nombre">Nombre</label>
                        <input class="wide" id="nombre" type="text" name="nombre" maxlength="80" required placeholder="Hogar / Viajes…">
                    </div>
                    <div><button type="submit">Crear</button></div>
                </div>
            </form>
        </div>

        <div class="panel">
            <h2>Listado ({$categorias|@count})</h2>
            <p class="hint">Desactivar no borra el registro (los obsequios siguen asociados). Reactiva editando el estado.</p>
            <div style="overflow-x:auto;">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$categorias item=cat}
                            <tr class="{if $cat.activo != 1}off{/if}">
                                <td class="mono">#{$cat.id|escape:'html'}</td>
                                <td>
                                    <form method="post" action="{$_layoutParams.root}backoffice/actualizarCategoria" class="row" style="gap:.35rem;">
                                        <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                                        <input type="hidden" name="categoria_id" value="{$cat.id|escape:'html'}">
                                        <input type="text" name="nombre" value="{$cat.nombre|escape:'html'}" maxlength="80" required style="min-width:180px;">
                                        <select name="activo">
                                            <option value="1" {if $cat.activo == 1}selected{/if}>Activa</option>
                                            <option value="0" {if $cat.activo != 1}selected{/if}>Inactiva</option>
                                        </select>
                                        <button type="submit" class="ghost">Guardar</button>
                                    </form>
                                </td>
                                <td>{if $cat.activo == 1}Activa{else}Inactiva{/if}</td>
                                <td>
                                    {if $cat.activo == 1}
                                        <form method="post" action="{$_layoutParams.root}backoffice/desactivarCategoria" class="inline" onsubmit="return confirm('¿Desactivar esta categoría?');">
                                            <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                                            <input type="hidden" name="categoria_id" value="{$cat.id|escape:'html'}">
                                            <button type="submit" class="danger">Desactivar</button>
                                        </form>
                                    {/if}
                                </td>
                            </tr>
                        {foreachelse}
                            <tr><td colspan="4">No hay categorías.</td></tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
