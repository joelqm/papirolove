<div id="loader" class="palpita">

  <div>
    <img class="loader-logo"
         src="{$_layoutParams.root}views/lizethyerick/imgs/logo.webp"
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
  var KEY = 'lizethyerickLoaderSeen';
  var MIN_DISPLAY_MS = 2800;
  var startedAt = Date.now();
  var done = false;
  var skipMinWait = false;
  var pendingReveal = false;

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
        if (typeof window.resetPapiroAosInView === 'function') {
          setTimeout(window.resetPapiroAosInView, 120);
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

    if (!skipMinWait) {
      var remaining = MIN_DISPLAY_MS - (Date.now() - startedAt);
      if (remaining > 0) {
        if (!pendingReveal) {
          pendingReveal = true;
          setTimeout(function () {
            pendingReveal = false;
            finish();
          }, remaining);
        }
        return;
      }
    }

    done = true;
    try { sessionStorage.setItem(KEY, '1'); } catch (e) {}
    revealContent();
  }

  function boot() {
    startedAt = Date.now();

    var btn = document.querySelector('#loader .loader-button');
    if (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        finish();
      });
    }

    var fastTrack = false;
    try {
      fastTrack = !!sessionStorage.getItem(KEY) || !!sessionStorage.getItem('lizethLoaderSeen');
    } catch (e) {}

    if (fastTrack) {
      skipMinWait = true;
      finish();
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot, { once: true });
  } else {
    boot();
  }

  setTimeout(function () {
    var content = document.getElementById('contenido');
    if (content && content.style.display === 'none') {
      finish();
    }
  }, 8000);
})();
</script>
{/literal}
