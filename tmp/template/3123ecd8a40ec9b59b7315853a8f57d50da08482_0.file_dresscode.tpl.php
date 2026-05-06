<?php
/* Smarty version 5.5.1, created on 2026-05-06 12:53:42
  from 'file:views/mariaalejandraydiego/components/dresscode.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69fb8026597aa2_74488591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3123ecd8a40ec9b59b7315853a8f57d50da08482' => 
    array (
      0 => 'views/mariaalejandraydiego/components/dresscode.tpl',
      1 => 1778090002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb8026597aa2_74488591 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\mariaalejandraydiego\\components';
?><style>
    /* --- SÚPER CONTENEDOR --- */
.dresscode-attendance-wrapper {
    position: relative; /* Clave: Mantiene las decoraciones dentro de esta área conjunta */
    overflow: hidden; /* Oculta lo que sobresalga */
    background-color: #fffaf7; /* Opcional: el color de fondo base para ambas secciones */
}

/* Aseguramos que el contenido principal siempre esté por encima de las decoraciones */
.dresscode-container, 
.attendace-container {
    position: relative;
    z-index: 2;
}

/* --- DECORACIONES DE LAS ESQUINAS --- */
/* (Ajusta los tamaños (width/height) y rutas de imágenes según tus archivos) */

.decor-corner-top-left {
    position: absolute;
    top: 0;
    left: 0;
    width: 300px;
    height: 400px;
    background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/flores-arriba-izq.png'); 
    background-size: contain;
    background-position: top left;
    background-repeat: no-repeat;
    z-index: 1;
    pointer-events: none;
}

.decor-corner-bottom-right {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 350px;
    height: 350px;
    background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/flores-abajo-der.png'); /* Aquí usé la imagen que ya tenías */
    background-size: contain;
    background-position: bottom right;
    background-repeat: no-repeat;
    z-index: 1;
    pointer-events: none;
}

/* --- RESPONSIVO --- */
/* Ocultamos o achicamos las decoraciones en celulares para que no tapen el texto */
@media (max-width: 768px) {
    .decor-corner-top-left { width: 150px; height: 200px; }
    .decor-corner-top-right { width: 200px; height: 250px; }
    .decor-corner-bottom-left { width: 200px; height: 200px; }
    .decor-corner-bottom-right { width: 150px; height: 150px; }
}

</style>

<div class="dresscode-container" id="dresscode">


    <div class="decor-corner-top-left"></div>
    <!-- <div class="decor-corner-top-right"></div>
    <div class="decor-corner-bottom-left"></div> -->
    <div class="decor-corner-bottom-right"></div>


    <div class="dresscode-content">
        <div class="color-section " data-aos="fade-up">
            <h1 class="history-title-small-2" style="color: #BB8465;font-weight: bold;font-size: 2.5rem;">
                Dress Code
            </h1>

            <div class="text-body">

                <span class="texto-content">
                    Formal Elegante.
                </span>
                <br><br>

                <div class="container" style="max-width: 700px; margin: 0 auto;">
                    <!-- Usamos GRID para forzar exactamente 2 columnas -->
                    <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                        
                        <!-- Columna 1: Damas -->
                        <div class="col" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/dresscode-1.png" alt="Damas" class="dresscode-img" style="width: 180px; margin-bottom: 15px;">
                            <span style="color: #ba8d72; font-size: 1.1rem; line-height: 1.3;">Reserva las tonalidades claras y amarillas para la novia</span>
                        </div>
                
                        <!-- Columna 2: Varones -->
                        <div class="col" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/dresscode-2.png" alt="Varones" class="dresscode-img" style="width: 160px; margin-bottom: 15px;">
                            <span style="color: #ba8d72; font-size: 1.1rem; line-height: 1.3;">Reservar el crema, el verde y corbata michi para el novio</span>
                        </div>
                
                    </div>
                </div>

                <br><br><br>

                <span class="texto-content">
                    Paleta de inspiración.<br>
                </span>

                <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/paleta_colores.png" alt="paleta_colores" class="paleta_colores-img" width="200px">

                <br>

            </div>

        </div>

        <div class="right-section" data-aos="fade-up">
            <a href="https://assets.pinterest.com/ext/embed.html?id=422281212243479" class="button-3"
                style="margin-bottom: 12px;text-decoration: none;cursor: pointer;">
                INSPIRACIÓN
            </a>
            <iframe src="https://assets.pinterest.com/ext/embed.html?id=422281212243479" height="532" width="345"
                frameborder="0" scrolling="no"></iframe>
        </div>

    </div>

    <br>


</div><?php }
}
