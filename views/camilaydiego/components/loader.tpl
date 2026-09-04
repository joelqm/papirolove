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
  <button type="button" class="loader-button">IR A LA PÁGINA</button>

</div>

{literal}
<script>
(function () {
  var KEY = 'camilaLoaderSeen';
  var done = false;

  function finish() {
    if (done) return;
    done = true;
    try { sessionStorage.setItem(KEY, '1'); } catch (e) {}

    var loader = document.getElementById('loader');
    var content = document.getElementById('contenido');
    if (!loader) return;

    loader.style.transition = 'opacity .25s ease';
    loader.style.opacity = '0';
    setTimeout(function () {
      loader.style.display = 'none';
      if (content) {
        content.style.display = 'block';
        content.style.opacity = '0';
        content.style.transition = 'opacity .25s ease';
        requestAnimationFrame(function () {
          content.style.opacity = '1';
        });
      }
    }, 250);
  }

  var btn = document.querySelector('.loader-button');
  if (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      finish();
    });
  }

  // Visitas siguientes en la misma sesión: entrar al instante
  try {
    if (sessionStorage.getItem(KEY)) {
      finish();
      return;
    }
  } catch (e) {}

  var logo = document.querySelector('.loader-logo');
  var maxWait = setTimeout(finish, 800);

  function onLogoReady() {
    clearTimeout(maxWait);
    // Breve presencia de marca en la primera visita
    setTimeout(finish, 350);
  }

  if (!logo || logo.complete) {
    onLogoReady();
  } else {
    logo.addEventListener('load', onLogoReady, { once: true });
    logo.addEventListener('error', onLogoReady, { once: true });
  }
})();
</script>
{/literal}
