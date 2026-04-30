<?php
/* Smarty version 5.5.1, created on 2026-04-30 13:12:08
  from 'file:views/fernandayrommel/components/loader.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69f39b78dfedc7_81246471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be43fdab24eebc680a94fd2b93c608e243d7624f' => 
    array (
      0 => 'views/fernandayrommel/components/loader.tpl',
      1 => 1777572672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f39b78dfedc7_81246471 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\fernandayrommel\\components';
?><div id="loader" class="palpita">

  <div>
    <img class="loader-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayrommel/imgs/logo.webp" alt="logo">
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
