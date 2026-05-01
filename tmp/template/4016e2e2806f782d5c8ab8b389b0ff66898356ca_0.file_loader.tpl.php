<?php
/* Smarty version 5.5.1, created on 2026-05-01 12:30:07
  from 'file:views/fernandayromme/components/loader.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69f4e31fe661c1_45818599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4016e2e2806f782d5c8ab8b389b0ff66898356ca' => 
    array (
      0 => 'views/fernandayromme/components/loader.tpl',
      1 => 1777656605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f4e31fe661c1_45818599 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\fernandayromme\\components';
?><div id="loader" class="palpita">

  <div>
    <img class="loader-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/imgs/logo.webp" alt="logo" width="100px">
  </div>
  <button class="loader-button">IR A LA PÁGINA</button>



  <!-- <div class="sponsors" style="margin-top: 2rem;">
    <img class="sponsor-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
/src/celebremos-logo.webp" alt="celebremos peru">
    <img class="sponsor-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
/src/papiro-logo.webp" alt="papiro peru" style="margin-left: 15px;">
  </div> -->


</div>


<?php echo '<script'; ?>
>

  $(document).ready(function () {
    $(".loader-button").click(function (e) {
      $('#loader').fadeOut(300, function () {
        $('#contenido').fadeIn(300);
      });
    });
  });

  setTimeout(() => {
    let total = $('img').length;
    let loaded = 0;

    $('img').each(function () {
      if (this.complete) {
        imagenCargada();
      } else {
        $(this).on('load error', imagenCargada);
      }
    });

    function imagenCargada() {
      loaded++;
      if (loaded === total) {
        $('#loader').fadeOut(300, function () {
          $('#contenido').fadeIn(300);
        });
      }
    }
  }, 3000);

<?php echo '</script'; ?>
>
<?php }
}
