<style>
  #new-history.history-section {
    background: #fff;
    padding: 0;
    margin: 0;
  }

  #new-history .history-simple {
    background: #fff;
    width: 100%;
    max-width: 1100px;
    margin: 0 auto;
    padding: 4rem 1.5rem 4.5rem;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  #new-history .history-title-big {
    font-family: 'parfumerie-script', cursive;
    color: #8192A0;
    margin: 0 0 2.75rem;
    font-weight: normal;
    line-height: 1.1;
    text-align: center;
    font-size: clamp(2.8rem, 6vw, 4.2rem);
  }

  #new-history .history-body {
    width: 100%;
    max-width: 920px;
    display: grid;
    grid-template-columns: minmax(0, 0.38fr) minmax(0, 0.62fr);
    gap: 1.5rem 2.5rem;
    align-items: center;
    box-sizing: border-box;
  }

  #new-history .history-photo {
    width: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #new-history .history-photo img {
    width: 100%;
    max-width: 320px;
    height: auto;
    display: block;
    object-fit: contain;
  }

  #new-history .history-content {
    width: 100%;
    padding: 0 0.5rem 0 0;
    box-sizing: border-box;
  }

  #new-history .history-content p {
    font-family: 'Athelas-Regular', Georgia, serif;
    font-size: clamp(1.05rem, 1.5vw, 1.2rem);
    line-height: 1.75;
    color: #8192A0;
    text-align: center;
    margin: 0;
    font-weight: 400;
  }

  @media (max-width: 800px) {
    #new-history .history-simple {
      padding: 2.75rem 1rem 3.25rem;
    }

    #new-history .history-title-big {
      margin-bottom: 1.75rem;
      -webkit-text-stroke: 0.7px #8192A0;
      paint-order: stroke fill;
    }

    #new-history .history-body {
      grid-template-columns: 1fr;
      gap: 1.5rem;
      max-width: 420px;
    }

    #new-history .history-photo img {
      max-width: 240px;
    }

    #new-history .history-content {
      padding: 0;
    }

    #new-history .history-content p {
      font-size: 1.05rem;
      line-height: 1.7;
      -webkit-text-stroke: 0.3px #8192A0;
      paint-order: stroke fill;
    }
  }
</style>

<section class="history-section" id="new-history" data-aos="fade-up">

  <div class="history-simple">

    <h2 class="history-title-big" data-aos="fade-up" data-aos-delay="80">Nuestra Historia</h2>

    <div class="history-body">
      <figure class="history-photo" data-aos="fade-right" data-aos-delay="100">
        <img src="{$_layoutParams.root}views/milagrosymarcelo/imgs/nuestra_historia_perrito.webp"
             alt="Milagros y Marcelo"
             loading="lazy"
             decoding="async">
      </figure>

      <div class="history-content" data-aos="fade-up" data-aos-delay="120">
        <p>
          Nos encontramos por trabajo, pero nos quedamos<br>
          por amor. Hablando sin apuro, ri&eacute;ndonos<br>
          en los descansos, poco a poco esa amistad<br>
          di&oacute; un gran giro, Hoy llevamos muchos<br>
          a&ntilde;os caminando juntos y este<br>
          diciembre damos el paso m&aacute;s<br>
          importante: nos casamos.<br>
          De compa&ntilde;eros a complices,<br>
          y ahora esposos.
        </p>
      </div>
    </div>

  </div>

</section>
