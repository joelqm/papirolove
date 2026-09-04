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
        .panel h2 { margin:0 0 .85rem; font-size:1.05rem; }
        .row { display:flex; gap:.6rem; flex-wrap:wrap; align-items:end; }
        label { display:block; font-size:.78rem; color:var(--muted); margin-bottom:.25rem; }
        select, input[type=number] { padding:.55rem .65rem; border-radius:8px; border:1px solid var(--line); background:#0b1220; color:var(--text); min-width:140px; }
        select.wide { min-width:min(420px, 100%); max-width:100%; }
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
    </style>
</head>
<body>
    <header>
        <div>
            <h1>{$pareja.nombre|escape:'html'}</h1>
            <div class="meta">ID {$pareja.id|escape:'html'} · {$usuario|escape:'html'}</div>
        </div>
        <div class="actions">
            <a class="btn ghost" href="{$_layoutParams.root}backoffice">← Bodas</a>
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
            <h2>Agregar regalo del catálogo</h2>
            <form method="post" action="{$_layoutParams.root}backoffice/asignar">
                <input type="hidden" name="csrf" value="{$csrf|escape:'html'}">
                <input type="hidden" name="pareja_id" value="{$pareja.id|escape:'html'}">
                <div class="row">
                    <div style="flex:1; min-width:220px;">
                        <label for="obsequio_id">Obsequio</label>
                        <select class="wide" id="obsequio_id" name="obsequio_id" required>
                            <option value="">Selecciona…</option>
                            {foreach from=$catalogo item=c}
                                <option value="{$c.obsequio_id|escape:'html'}">
                                    [{$c.categoria|escape:'html'}] {$c.nombre|escape:'html'} — S/ {$c.monto|escape:'html'}
                                </option>
                            {/foreach}
                        </select>
                    </div>
                    <div>
                        <label for="cantidad">Cupos</label>
                        <input id="cantidad" type="number" name="cantidad" min="1" max="9999" value="1" required>
                    </div>
                    <div>
                        <button type="submit">Agregar</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="panel">
            <h2>Lista asignada ({$asignaciones|@count})</h2>
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
                                <td>
                                    {if $a.imagen}
                                        <img class="thumb" src="{$a.imagen|escape:'html'}" alt="" loading="lazy" width="42" height="42">
                                    {/if}
                                </td>
                                <td>
                                    {$a.nombre|escape:'html'}
                                    <div class="mono">#{$a.id|escape:'html'} · obsequio {$a.obsequio_id|escape:'html'}</div>
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
</body>
</html>
