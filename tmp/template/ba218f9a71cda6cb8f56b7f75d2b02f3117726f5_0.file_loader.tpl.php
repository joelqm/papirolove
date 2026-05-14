<?php
/* Smarty version 5.5.1, created on 2026-05-14 11:16:45
  from 'file:views/paolaymiguel/components/loader.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a05f56d0f3613_72490335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba218f9a71cda6cb8f56b7f75d2b02f3117726f5' => 
    array (
      0 => 'views/paolaymiguel/components/loader.tpl',
      1 => 1778775210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a05f56d0f3613_72490335 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\paolaymiguel\\components';
?><div id="loader" class="palpita">

  <!-- <div>
    <img class="loader-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/paolaymiguel/imgs/logo.webp" alt="logo">
  </div> -->

  <div class="font-photograph_signature" style="font-size:4.8rem; text-align:center;color:#474641;">Paola & Miguel</div>

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
