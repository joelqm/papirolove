<?php
/* Smarty version 5.5.1, created on 2026-02-25 11:35:21
  from 'file:views/gabrielayeric/components/loader.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_699f24c90a3727_79786130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fa7dfdac3ebecbfd4012b1a2da8b3dd823452c3' => 
    array (
      0 => 'views/gabrielayeric/components/loader.tpl',
      1 => 1772037306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_699f24c90a3727_79786130 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric\\components';
?><div id="loader" class="palpita">

  <div id="icon-loader">
    <div class="logo"></div>
    <button class="loader-button">IR A LA PÁGINA</button>
  </div>



  <div class="sponsors">
    <img class="sponsor-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
/src/celebremos-logo.webp" alt="celebremos peru">
    <img class="sponsor-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
/src/papiro-logo.webp" alt="papiro peru">
  </div>

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
