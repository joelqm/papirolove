<div id="loader" class="palpita">

  <div>
    <img class="loader-logo"
         src="{$loader_logo|escape:'html'}"
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
  var KEY = '{/literal}{$loader_key|escape:'javascript'}{literal}';
  var done = false;

  function revealContent() {
    var loader = document.getElementById('loader');
    var content = document.getElementById('contenido');

    if (loader && loader.style.display !== 'none') {
      loader.style.transition = 'opacity .25s ease';
      loader.style.opacity = '0';
      setTimeout(function () { loader.style.display = 'none'; }, 250);
    }

    if (content) {
      content.style.display = 'block';
      content.classList.add('is-visible');
      content.style.opacity = '0';
      content.style.transition = 'opacity .25s ease';
      requestAnimationFrame(function () {
        content.style.opacity = '1';
      });
    }

    document.dispatchEvent(new CustomEvent('papiro:content-visible'));
    if (typeof window.initPapiroAos === 'function') {
      window.initPapiroAos();
    }
    if (typeof window.papiroAosFailsafe === 'function') {
      setTimeout(window.papiroAosFailsafe, 400);
    }
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

    var ALWAYS = {/literal}{if $loader_always|default:0}1{else}0{/if}{literal};
    var WAIT_PAGE = {/literal}{if $loader_wait_page|default:0}1{else}0{/if}{literal};
    var fastTrack = false;
    try { fastTrack = !!sessionStorage.getItem(KEY); } catch (e) {}

    if (fastTrack && !ALWAYS) {
      finish();
      return;
    }

    var logo = document.querySelector('.loader-logo');
    var HOLD_MS = {/literal}{$loader_hold|default:350|escape:'javascript'}{literal};
    var MAX_MS = {/literal}{$loader_max|default:1200|escape:'javascript'}{literal};
    var holdDone = false;
    var pageReady = !WAIT_PAGE || document.readyState === 'complete';

    function maybeFinish() {
      if (holdDone && pageReady) finish();
    }

    if (WAIT_PAGE && !pageReady) {
      window.addEventListener('load', function () {
        pageReady = true;
        maybeFinish();
      }, { once: true });
    }

    var maxWait = setTimeout(function () {
      holdDone = true;
      maybeFinish();
    }, MAX_MS);

    function onLogoReady() {
      clearTimeout(maxWait);
      setTimeout(function () {
        holdDone = true;
        maybeFinish();
      }, HOLD_MS);
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

  setTimeout(function () {
    finish();
  }, {/literal}{$loader_fallback|default:3500|escape:'javascript'}{literal});
})();
</script>
{/literal}
