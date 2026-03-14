<?php
/* Smarty version 5.5.1, created on 2026-03-14 08:48:31
  from 'file:views/sofiaygabriel/components/loader.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69b5672f282ab9_66667053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87957a10ecb8e358a31e6e0ec7f96a840dfb2c6e' => 
    array (
      0 => 'views/sofiaygabriel/components/loader.tpl',
      1 => 1773495970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69b5672f282ab9_66667053 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\sofiaygabriel\\components';
?><div id="loader" class="palpita">

  <div>
    <img class="loader-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/sofiaygabriel/imgs/logo.webp" alt="logo">
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
