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

  function revealContent() {
    var loader = document.getElementById('loader');
    var content = document.getElementById('contenido');
    if (!content) {
      return false;
    }

    if (loader && loader.style.display !== 'none') {
      loader.style.transition = 'opacity .25s ease';
      loader.style.opacity = '0';
      setTimeout(function () {
        loader.style.display = 'none';
      }, 250);
    }

    content.style.display = 'block';
    content.classList.add('is-visible');
    content.style.opacity = '0';
    content.style.transition = 'opacity .25s ease';
    requestAnimationFrame(function () {
      content.style.opacity = '1';
      requestAnimationFrame(function () {
        if (typeof window.initPapiroAos === 'function') {
          window.initPapiroAos();
        }
      });
    });
    return true;
  }

  function finish() {
    if (done) {
      revealContent();
      return;
    }
    done = true;
    try { sessionStorage.setItem(KEY, '1'); } catch (e) {}
    revealContent();
  }

  function boot() {
    var btn = document.querySelector('.loader-button');
    if (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        finish();
      });
    }

    var fastTrack = false;
    try { fastTrack = !!sessionStorage.getItem(KEY); } catch (e) {}

    if (fastTrack) {
      finish();
      return;
    }

    var logo = document.querySelector('.loader-logo');
    var maxWait = setTimeout(finish, 1200);

    function onLogoReady() {
      clearTimeout(maxWait);
      setTimeout(finish, 350);
    }

    if (!logo || logo.complete) {
      onLogoReady();
    } else {
      logo.addEventListener('load', onLogoReady, { once: true });
      logo.addEventListener('error', onLogoReady, { once: true });
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot, { once: true });
  } else {
    boot();
  }

  // Failsafe: nunca dejar la página en blanco
  setTimeout(function () {
    var loader = document.getElementById('loader');
    var content = document.getElementById('contenido');
    if (loader) {
      loader.style.display = 'none';
    }
    if (content) {
      content.style.display = 'block';
      content.style.opacity = '1';
      content.classList.add('is-visible');
    }
    if (typeof window.initPapiroAos === 'function') {
      window.initPapiroAos();
    }
    if (typeof window.papiroAosFailsafe === 'function') {
      window.papiroAosFailsafe();
    }
  }, 3500);
})();
</script>
{/literal}
