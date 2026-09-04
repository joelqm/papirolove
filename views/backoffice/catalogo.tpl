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
        main { max-width:1180px; margin:0 auto; padding:1.25rem; }
        .panel { background:var(--card); border:1px solid var(--line); border-radius:14px; padding:1rem; margin-bottom:1.25rem; }
        .panel h2 { margin:0 0 .35rem; font-size:1.05rem; }
        .hint { margin:0 0 .85rem; color:var(--muted); font-size:.85rem; }
        .row { display:flex; gap:.6rem; flex-wrap:wrap; align-items:end; }
        label { display:block; font-size:.78rem; color:var(--muted); margin-bottom:.25rem; }
        select, input { padding:.55rem .65rem; border-radius:8px; border:1px solid var(--line); background:#0b1220; color:var(--text); min-width:120px; }
        select.wide, input.wide { width:100%; min-width:min(320px,100%); }
        input[type=file] { max-width:100%; font-size:.85rem; color:var(--muted); }
        button, a.btn { border:0; border-radius:999px; padding:.55rem 1rem; background:var(--accent); color:#1f2937; font-weight:700; cursor:pointer; text-decoration:none; display:inline-flex; font-size:.88rem; }
        a.ghost, button.ghost { background:transparent; color:var(--text); border:1px solid var(--line); }
        table { width:100%; border-collapse:collapse; font-size:.88rem; }
        th, td { padding:.65rem .4rem; border-bottom:1px solid var(--line); text-align:left; vertical-align:top; }
        th { color:var(--muted); font-size:.75rem; text-transform:uppercase; }
        .thumb { width:48px; height:48px; object-fit:cover; border-radius:8px; background:#1f2937; }
        .flash { padding:.75rem 1rem; border-radius:10px; margin-bottom:1rem; }
        .flash.ok { background:rgba(52,211,153,.12); border:1px solid rgba(52,211,153,.35); color:var(--ok); }
        .flash.err { background:rgba(248,113,113,.12); border:1px solid rgba(248,113,113,.35); color:var(--danger); }
        .actions { display:flex; gap:.4rem; flex-wrap:wrap; }
        .mono { color:var(--muted); font-size:.8rem; }
        .off { opacity:.55; }
        .edit-grid { display:grid; grid-template-columns: 56px 1fr; gap:.75rem; align-items:start; }
        .edit-fields { display:flex; flex-wrap:wrap; gap:.5rem; align-items:end; }
        .edit-fields > div { min-width:140px; }
        .edit-fields .grow { flex:1 1 180px; }
        .edit-fields .narrow { flex:0 0 110px; }
        .edit-fields .mid { flex:0 0 150px; }
    </style>
</head>
<body>
    <header>
        <div>
            <h1>Catálogo de obsequios</h1>
            <div class="meta" style="color:#9ca3af;font-size:.85rem;">tbl_obsequio · recientes primero · editable</div>
        </div>
        <div class="actions">
            <a class="btn ghost" href="{$_layoutParams.root}backoffice">← Bodas</a>
            <a class="btn ghost" href="{$_layoutParams.root}backoffice/categorias">Categorías</a>
            <form method="post" action="{$_layoutParams.root}backoffice/logout" style="display:inline;margin:0;">
                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                <button class="ghost" type="submit">Salir</button>
            </form>
        </div>
    </header>

    <main>
        {if $flash_ok}<div class="flash ok">{$flash_ok|escape:'html'}</div>{/if}
        {if $flash_error}<div class="flash err">{$flash_error|escape:'html'}</div>{/if}

        <div class="panel">
            <h2>Crear / duplicar obsequio</h2>
            <p class="hint">Si eliges “Nuevo desde cero”, debes completar <strong>nombre</strong>, <strong>categoría</strong> e <strong>imagen</strong>. “Basado en” puede heredar categoría/imagen del original.</p>
            <form method="post" action="{$_layoutParams.root}backoffice/crearObsequio" enctype="multipart/form-data">
                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                <input type="hidden" name="redirect" value="backoffice/catalogo">
                <div class="row">
                    <div style="flex:1;min-width:220px;">
                        <label>Basado en</label>
                        <select class="wide" name="base_obsequio_id" id="bo_base">
                            <option value="0">— Nuevo desde cero —</option>
                            {foreach from=$catalogo item=c}
                                <option value="{$c.obsequio_id|escape:'html'}">#{$c.obsequio_id|escape:'html'} {$c.nombre|escape:'html'} — S/ {$c.monto|escape:'html'}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="flex:1;min-width:180px;">
                        <label>Nombre</label>
                        <input class="wide" type="text" name="nombre" maxlength="80" placeholder="Pasajes / Smart TV…">
                    </div>
                    <div>
                        <label>Categoría</label>
                        <select name="categoria_id" id="bo_categoria">
                            <option value="">— Selecciona categoría —</option>
                            {foreach from=$categorias item=cat}
                                <option value="{$cat.id|escape:'html'}">{$cat.nombre|escape:'html'}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="flex:1;min-width:200px;">
                        <label>Subir imagen nueva</label>
                        <input type="file" name="imagen_upload" accept="image/jpeg,image/png,image/webp">
                    </div>
                    <div style="flex:1;min-width:180px;">
                        <label>O imagen ya en carpeta</label>
                        <select class="wide" name="imagen_archivo">
                            <option value="">— Elige o sube arriba —</option>
                            {foreach from=$imagenes item=img}
                                <option value="{$img|escape:'html'}">{$img|escape:'html'}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div>
                        <label>Monto S/</label>
                        <input type="number" name="monto" min="0" step="0.01" value="100" required>
                    </div>
                    <div><button type="submit">Guardar en catálogo</button></div>
                </div>
            </form>
        </div>

        <div class="panel">
            <h2>Editar registros ({$catalogo|@count})</h2>
            <p class="hint">Cambia nombre, categoría, monto o imagen y pulsa Guardar. Si no subes ni eliges otra imagen, se mantiene la actual.</p>
            <div style="overflow-x:auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Obsequio</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$catalogo item=c}
                            <tr class="{if $c.activo != 1}off{/if}" id="obsequio-{$c.obsequio_id|escape:'html'}">
                                <td>
                                    <form method="post" action="{$_layoutParams.root}backoffice/actualizarObsequio" enctype="multipart/form-data">
                                        <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                                        <input type="hidden" name="obsequio_id" value="{$c.obsequio_id|escape:'html'}">
                                        <div class="edit-grid">
                                            <div>
                                                {if $c.imagen}<img class="thumb" src="{$c.imagen|escape:'html'}" alt="" loading="lazy">{/if}
                                                <div class="mono">#{$c.obsequio_id|escape:'html'}</div>
                                            </div>
                                            <div class="edit-fields">
                                                <div class="grow">
                                                    <label>Nombre</label>
                                                    <input class="wide" type="text" name="nombre" maxlength="80" value="{$c.nombre|escape:'html'}" required>
                                                </div>
                                                <div class="mid">
                                                    <label>Categoría</label>
                                                    <select name="categoria_id" required>
                                                        {foreach from=$categorias_todas item=cat}
                                                            <option value="{$cat.id|escape:'html'}" {if $cat.id == $c.categoria_id}selected{/if}>{$cat.nombre|escape:'html'}{if $cat.activo != 1} (inactiva){/if}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                                <div class="narrow">
                                                    <label>Monto S/</label>
                                                    <input type="number" name="monto" min="0" step="0.01" value="{$c.monto|escape:'html'}" required style="width:110px;">
                                                </div>
                                                <div class="narrow">
                                                    <label>Estado</label>
                                                    <select name="activo">
                                                        <option value="1" {if $c.activo == 1}selected{/if}>Activo</option>
                                                        <option value="0" {if $c.activo != 1}selected{/if}>Inactivo</option>
                                                    </select>
                                                </div>
                                                <div class="grow">
                                                    <label>Subir imagen</label>
                                                    <input type="file" name="imagen_upload" accept="image/jpeg,image/png,image/webp">
                                                </div>
                                                <div class="grow">
                                                    <label>O elegir de carpeta</label>
                                                    <select class="wide" name="imagen_archivo">
                                                        <option value="">— mantener actual ({$c.imagen_archivo|escape:'html'}) —</option>
                                                        {foreach from=$imagenes item=img}
                                                            <option value="{$img|escape:'html'}" {if $img == $c.imagen_archivo}selected{/if}>{$img|escape:'html'}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                                <div>
                                                    <button type="submit">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        {foreachelse}
                            <tr><td>No hay obsequios en el catálogo.</td></tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
