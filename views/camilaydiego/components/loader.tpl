<div id="loader" class="palpita">

  <div>
    <img class="loader-logo"
         src="{$_layoutParams.root}views/camilaydiego/imgs/logo.webp"
         alt="logo"
         width="100"
         height="87"
         decoding="async"
         fetchpriority="high">
  </div>
  <button class="loader-button">IR A LA PÁGINA</button>



  <!-- <div class="sponsors" style="margin-top: 2rem;">
    <img class="sponsor-logo" src="{$_layoutParams.root}/src/celebremos-logo.webp" alt="celebremos peru">
    <img class="sponsor-logo" src="{$_layoutParams.root}/src/papiro-logo.webp" alt="papiro peru" style="margin-left: 15px;">
  </div> -->


</div>

{literal}
<script>

  $(document).ready(function () {
    $(".loader-button").click(function (e) {
      $('#loader').fadeOut(300, function () {
        $('#contenido').fadeIn(300);
      });
    });
  });

  setTimeout(() => {
    const $logo = $('.loader-logo');
    const finish = () => {
      $('#loader').fadeOut(300, function () {
        $('#contenido').fadeIn(300);
      });
    };

    if (!$logo.length || $logo[0].complete) {
      finish();
      return;
    }

    $logo.one('load error', finish);
  }, 1500);

</script>
{/literal}