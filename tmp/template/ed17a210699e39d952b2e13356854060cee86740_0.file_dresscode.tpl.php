<?php
/* Smarty version 5.5.1, created on 2026-07-24 10:02:40
  from 'file:views/julissayruben/components/dresscode.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a637e90455af7_82733315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed17a210699e39d952b2e13356854060cee86740' => 
    array (
      0 => 'views/julissayruben/components/dresscode.tpl',
      1 => 1784905258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a637e90455af7_82733315 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\julissayruben\\components';
?><div class="dresscode-container" id="dresscode">

    <!-- <div class="dresscode-title" data-aos="fade-up">
        <h1 class="gift-title-small">Código de Vestimenta</h1>
        <h2 class="gift-title-big">Código de Vestimenta</h2>
    </div> -->

    <div class="dresscode-content">
        <div class="color-section " data-aos="fade-up">

            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/julissayruben/imgs/dresscode.png" alt="dresscode" class="dresscode-img">

            <div class="text-body">
                <!-- <span style="display: inline;">Formal Elegante</span><br><br> -->

                <span class="texto-content">
                    Formal Elegante.
                </span>

                <br><br><br>

                <span class="texto-content">
                    Paleta de inspiración.<br>
                </span>

                <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/julissayruben/imgs/paleta_colores.png" alt="paleta_colores" class="paleta_colores-img" width="200px">

                <br>
                <span class="texto-content">
                    Reserva el blanco y azul para los novios
                </span>
            </div>

        </div>

                <div class="right-section" data-aos="fade-up" style="display: none;">
        </div>

    </div>

    <br>


</div><?php }
}
