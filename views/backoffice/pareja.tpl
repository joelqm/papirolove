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
        header .meta { color:var(--muted); font-size:.85rem; }
        main { max-width:1100px; margin:0 auto; padding:1.25rem; }
        .flash { padding:.75rem 1rem; border-radius:10px; margin-bottom:1rem; }
        .flash.ok { background:rgba(52,211,153,.12); border:1px solid rgba(52,211,153,.35); color:var(--ok); }
        .flash.err { background:rgba(248,113,113,.12); border:1px solid rgba(248,113,113,.35); color:var(--danger); }
        .panel { background:var(--card); border:1px solid var(--line); border-radius:14px; padding:1rem; margin-bottom:1.25rem; }
        .panel h2 { margin:0 0 .35rem; font-size:1.05rem; }
        .hint { margin:0 0 .85rem; color:var(--muted); font-size:.85rem; }
        .row { display:flex; gap:.6rem; flex-wrap:wrap; align-items:end; }
        label { display:block; font-size:.78rem; color:var(--muted); margin-bottom:.25rem; }
        select, input { padding:.55rem .65rem; border-radius:8px; border:1px solid var(--line); background:#0b1220; color:var(--text); min-width:120px; }
        select.wide, input.wide { min-width:min(420px, 100%); width:100%; max-width:100%; }
        input[type=file] { max-width:100%; font-size:.85rem; color:var(--muted); }
        button, a.btn { border:0; border-radius:999px; padding:.55rem 1rem; background:var(--accent); color:#1f2937; font-weight:700; cursor:pointer; text-decoration:none; display:inline-flex; align-items:center; font-size:.88rem; }
        button.ghost, a.ghost { background:transparent; color:var(--text); border:1px solid var(--line); }
        button.danger { background:#7f1d1d; color:#fecaca; }
        table { width:100%; border-collapse:collapse; font-size:.9rem; }
        th, td { padding:.65rem .45rem; border-bottom:1px solid var(--line); text-align:left; vertical-align:middle; }
        th { color:var(--muted); font-weight:600; font-size:.78rem; text-transform:uppercase; letter-spacing:.04em; }
        .off { opacity:.55; }
        .thumb { width:42px; height:42px; object-fit:cover; border-radius:8px; background:#1f2937; }
        .inline { display:inline; }
        .actions { display:flex; gap:.4rem; flex-wrap:wrap; }
        .mono { font-family: ui-monospace, Consolas, monospace; font-size:.82rem; color:var(--muted); }
        /* Select2 dark */
        .select2-container { min-width:min(420px, 100%); width:100% !important; max-width:100%; }
        .select2-container--default .select2-selection--single {
            height:auto; min-height:38px; padding:.35rem .45rem; border-radius:8px;
            border:1px solid var(--line); background:#0b1220; color:var(--text);
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color:var(--text); line-height:1.4; padding-left:2px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow { height:100%; top:0; }
        .select2-dropdown { background:#111827; border:1px solid var(--line); color:var(--text); }
        .select2-container--default .select2-search--dropdown .select2-search__field {
            background:#0b1220; border:1px solid var(--line); color:var(--text); border-radius:6px;
        }
        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
            background:var(--accent); color:#1f2937;
        }
        .select2-results__option { font-size:.88rem; }
        .select2-container--default .select2-selection--single .select2-selection__placeholder { color:var(--muted); }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div>
            <h1>{$pareja.nombre|escape:'html'}</h1>
            <div class="meta">ID {$pareja.id|escape:'html'} · {$usuario|escape:'html'}</div>
        </div>
        <div class="actions">
            {if $pareja.slug}
            <a class="btn" href="{$_layoutParams.root}{$pareja.slug|escape:'html'}" target="_blank" rel="noopener noreferrer">Ver web</a>
            {/if}
            <a class="btn ghost" href="{$_layoutParams.root}backoffice">← Bodas</a>
            <a class="btn ghost" href="{$_layoutParams.root}backoffice/catalogo">Catálogo</a>
            <a class="btn ghost" href="{$_layoutParams.root}backoffice/categorias">Categorías</a>
            <form class="inline" method="post" action="{$_layoutParams.root}backoffice/logout">
                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                <button class="btn ghost" type="submit">Salir</button>
            </form>
        </div>
    </header>

    <main>
        {if $flash_ok}<div class="flash ok">{$flash_ok|escape:'html'}</div>{/if}
        {if $flash_error}<div class="flash err">{$flash_error|escape:'html'}</div>{/if}

        <div class="panel">
            <h2>Nuevo registro para esta boda (precio propio)</h2>
            <p class="hint">Crea un <strong>registro nuevo</strong> (no modifica el catálogo ni regalos de otras bodas). “Basado en” solo copia nombre/imagen/categoría como plantilla.</p>
            <form method="post" action="{$_layoutParams.root}backoffice/crearObsequio" enctype="multipart/form-data">
                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                <input type="hidden" name="asignar_pareja_id" value="{$pareja.id|escape:'html'}">
                <input type="hidden" name="redirect" value="backoffice/pareja/{$pareja.id|escape:'html'}">
                <div class="row">
                    <div style="flex:1; min-width:220px;">
                        <label for="base_obsequio_id">Basado en (opcional)</label>
                        <select class="wide js-select2" id="base_obsequio_id" name="base_obsequio_id" data-placeholder="Buscar en catálogo…">
                            <option value="0">— Nuevo desde cero —</option>
                            {foreach from=$catalogo item=c}
                                <option value="{$c.obsequio_id|escape:'html'}">
                                    #{$c.obsequio_id|escape:'html'} [{$c.categoria|escape:'html'}] {$c.nombre|escape:'html'} — S/ {$c.monto|escape:'html'}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="flex:1; min-width:180px;">
                        <label for="nombre">Nombre</label>
                        <input class="wide" id="nombre" type="text" name="nombre" maxlength="80" placeholder="Si vacío, usa el del base">
                    </div>
                    <div>
                        <label for="categoria_id">Categoría</label>
                        <select id="categoria_id" name="categoria_id">
                            <option value="">— Selecciona o usa la del base —</option>
                            {foreach from=$categorias item=cat}
                                <option value="{$cat.id|escape:'html'}">{$cat.nombre|escape:'html'}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div style="flex:1; min-width:200px;">
                        <label for="imagen_upload">Subir imagen nueva</label>
                        <input id="imagen_upload" type="file" name="imagen_upload" accept="image/jpeg,image/png,image/webp">
                    </div>
                    <div style="flex:1; min-width:180px;">
                        <label for="imagen_archivo">O imagen ya en carpeta</label>
                        <select class="wide" id="imagen_archivo" name="imagen_archivo">
                            <option value="">= del base / o subida</option>
                            {foreach from=$imagenes item=img}
                                <option value="{$img|escape:'html'}">{$img|escape:'html'}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div>
                        <label for="monto">Monto S/</label>
                        <input id="monto" type="number" name="monto" min="0" step="0.01" value="100" required>
                    </div>
                    <div>
                        <label for="cantidad_new">Cupos</label>
                        <input id="cantidad_new" type="number" name="cantidad" min="1" max="9999" value="1" required>
                    </div>
                    <div><button type="submit">Crear y asignar</button></div>
                </div>
            </form>
        </div>

        <div class="panel">
            <h2>Asignar regalo ya existente del catálogo</h2>
            <p class="hint">Crea una <strong>copia nueva</strong> del obsequio y la asigna solo a esta boda. No edita el original ni las listas de otras bodas.</p>
            <form method="post" action="{$_layoutParams.root}backoffice/asignar">
                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                <input type="hidden" name="pareja_id" value="{$pareja.id|escape:'html'}">
                <div class="row">
                    <div style="flex:1; min-width:220px;">
                        <label for="obsequio_id">Obsequio</label>
                        <select class="wide js-select2" id="obsequio_id" name="obsequio_id" required data-placeholder="Buscar obsequio…">
                            <option value="">Selecciona…</option>
                            {foreach from=$catalogo item=c}
                                <option value="{$c.obsequio_id|escape:'html'}">
                                    #{$c.obsequio_id|escape:'html'} [{$c.categoria|escape:'html'}] {$c.nombre|escape:'html'} — S/ {$c.monto|escape:'html'}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                    <div>
                        <label for="cantidad">Cupos</label>
                        <input id="cantidad" type="number" name="cantidad" min="1" max="9999" value="1" required>
                    </div>
                    <div><button type="submit">Copiar y asignar</button></div>
                </div>
            </form>
        </div>

        <div class="panel">
            <h2>Lista asignada ({$asignaciones|@count}) — recientes primero</h2>
            <div style="overflow-x:auto;">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Regalo</th>
                            <th>Categoría</th>
                            <th>Monto</th>
                            <th>Cupos</th>
                            <th>Progreso</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$asignaciones item=a}
                            <tr class="{if $a.activo != 1}off{/if}">
                                <td>{if $a.imagen}<img class="thumb" src="{$a.imagen|escape:'html'}" alt="" loading="lazy" width="42" height="42">{/if}</td>
                                <td>
                                    {$a.nombre|escape:'html'}
                                    <div class="mono">asig #{$a.id|escape:'html'} · obsequio {$a.obsequio_id|escape:'html'}</div>
                                </td>
                                <td>{$a.categoria|escape:'html'}</td>
                                <td>S/ {$a.monto|escape:'html'}</td>
                                <td>
                                    <form method="post" action="{$_layoutParams.root}backoffice/actualizar" class="row" style="gap:.35rem;">
                                        <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                                        <input type="hidden" name="pareja_id" value="{$pareja.id|escape:'html'}">
                                        <input type="hidden" name="obsequio_pareja_id" value="{$a.id|escape:'html'}">
                                        <input type="hidden" name="activo" value="{$a.activo|escape:'html'}">
                                        <input type="number" name="cantidad" min="1" max="9999" value="{$a.cupos|escape:'html'}" style="width:80px;">
                                        <button type="submit" class="ghost">Guardar</button>
                                    </form>
                                </td>
                                <td>{$a.progreso|escape:'html'}</td>
                                <td>{if $a.activo == 1}Activo{else}Inactivo{/if}</td>
                                <td>
                                    <div class="actions">
                                        {if $a.activo == 1}
                                            <form method="post" action="{$_layoutParams.root}backoffice/desactivar" class="inline" onsubmit="return confirm('¿Desactivar este regalo?');">
                                                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                                                <input type="hidden" name="pareja_id" value="{$pareja.id|escape:'html'}">
                                                <input type="hidden" name="obsequio_pareja_id" value="{$a.id|escape:'html'}">
                                                <button type="submit" class="danger">Desactivar</button>
                                            </form>
                                        {else}
                                            <form method="post" action="{$_layoutParams.root}backoffice/actualizar" class="inline">
                                                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                                                <input type="hidden" name="pareja_id" value="{$pareja.id|escape:'html'}">
                                                <input type="hidden" name="obsequio_pareja_id" value="{$a.id|escape:'html'}">
                                                <input type="hidden" name="cantidad" value="{$a.cupos|escape:'html'}">
                                                <input type="hidden" name="activo" value="1">
                                                <button type="submit" class="ghost">Reactivar</button>
                                            </form>
                                        {/if}
                                    </div>
                                </td>
                            </tr>
                        {foreachelse}
                            <tr><td colspan="8">Aún no hay regalos asignados a esta boda.</td></tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function () {
            $('.js-select2').each(function () {
                var $el = $(this);
                $el.select2({
                    width: '100%',
                    allowClear: false,
                    placeholder: $el.data('placeholder') || 'Buscar…',
                    language: {
                        noResults: function () { return 'Sin resultados'; },
                        searching: function () { return 'Buscando…'; }
                    }
                });
            });
        });
    </script>
</body>
</html>
