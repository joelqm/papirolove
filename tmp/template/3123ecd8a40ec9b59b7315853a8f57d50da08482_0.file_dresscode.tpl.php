<?php
/* Smarty version 5.5.1, created on 2026-05-07 10:58:04
  from 'file:views/mariaalejandraydiego/components/dresscode.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69fcb68cef9c96_33636174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3123ecd8a40ec9b59b7315853a8f57d50da08482' => 
    array (
      0 => 'views/mariaalejandraydiego/components/dresscode.tpl',
      1 => 1778169428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fcb68cef9c96_33636174 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\mariaalejandraydiego\\components';
?><div class="dresscode-container" id="dresscode">

    <div class="dresscode-content">
        <div class="color-section " data-aos="fade-up">
            <h1 class="history-title-small-2" style="color: #BB8465;">
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
                Inspiración
            </a>
            <iframe src="https://assets.pinterest.com/ext/embed.html?id=422281212243479" height="532" width="345"
                frameborder="0" scrolling="no"></iframe>
        </div>

    </div>

    <br>


</div><?php }
}
