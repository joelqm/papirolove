<div id="loader" class="palpita">

  <div>
    <img class="loader-logo" src="{$_layoutParams.root}views/sofiaygabriel/imgs/logo.webp" alt="logo">
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

</script>
{/literal}