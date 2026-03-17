<?php
/* Smarty version 5.5.1, created on 2026-03-17 09:56:31
  from 'file:views/gabrielayeric_ceremonia/components/loader.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69b96b9f934723_34178286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75baf99602bff0e1b7ae2b4c29c6895e480ad8c1' => 
    array (
      0 => 'views/gabrielayeric_ceremonia/components/loader.tpl',
      1 => 1772208115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69b96b9f934723_34178286 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric_ceremonia\\components';
?><div id="loader" class="palpita">

  <div id="icon-loader">
    <div class="logo"></div>
    <button class="loader-button">IR A LA PÁGINA</button>
  </div>



  <div class="sponsors">
    <!-- <img class="sponsor-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
/src/celebremos-logo.webp" alt="celebremos peru"> -->
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
