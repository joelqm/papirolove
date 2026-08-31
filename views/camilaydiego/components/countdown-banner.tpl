<style>
  .countdown-banner {
    background: #908C70;
    padding: 3.5rem 1.5rem 3.75rem;
    text-align: center;
    color: #fff;
  }

  .countdown-banner__logo {
    width: min(200px, 52vw);
    height: auto;
    display: block;
    margin: 0 auto 2rem;
  }

  .countdown-banner__message,
  .countdown-banner__submessage {
    font-family: 'Athelas-Regular', Georgia, serif;
    color: #fff;
    font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 1.55;
    max-width: 520px;
    margin: 0 auto;
    -webkit-text-stroke: 0.4px #fff;
    paint-order: stroke fill;
  }

  .countdown-banner__message {
    font-size: 0.95rem;
    margin-bottom: 1.5rem;
  }

  .countdown-banner__submessage {
    font-size: 0.95rem;
    margin-bottom: 2.25rem;
  }

  .countdown-banner__display {
    max-width: 460px;
    margin: 0 auto;
  }

  .countdown-banner__values-row {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 0.35rem;
  }

  .countdown-unit {
    display: flex;
    flex-direction: column;
    align-items: center;
    min-width: 3.5rem;
  }

  .countdown-banner__values-row .countdown-number {
    font-family: 'Athelas-Regular', Georgia, serif;
    font-size: 2.6rem;
    color: #fff;
    line-height: 1;
    -webkit-text-stroke: 0.35px #fff;
  }

  .countdown-banner__values-row .colon {
    font-family: 'Athelas-Regular', Georgia, serif;
    font-size: 2.2rem;
    color: #fff;
    line-height: 1;
    padding-top: 0.15rem;
    -webkit-text-stroke: 0.35px #fff;
  }

  .countdown-banner__values-row .countdown-label {
    font-family: 'Athelas-Regular', Georgia, serif;
    font-size: 0.72rem;
    letter-spacing: 2px;
    color: #fff;
    text-transform: uppercase;
    margin-top: 0.65rem;
    -webkit-text-stroke: 0.3px #fff;
  }

  @media (max-width: 768px) {
    .countdown-banner {
      padding: 3rem 1.1rem 3.25rem;
    }

    .countdown-banner__logo {
      width: min(170px, 48vw);
      margin-bottom: 1.75rem;
    }

    .countdown-banner__message,
    .countdown-banner__submessage {
      font-size: 0.82rem;
      letter-spacing: 1.5px;
    }

    .countdown-banner__values-row .countdown-number {
      font-size: 2rem;
    }

    .countdown-banner__values-row .colon {
      font-size: 1.75rem;
    }

    .countdown-banner__values-row .countdown-label {
      font-size: 0.62rem;
      letter-spacing: 1.5px;
    }
  }

  @media (max-width: 480px) {
    .countdown-banner {
      padding: 2.75rem 0.85rem 3rem;
    }

    .countdown-banner__message,
    .countdown-banner__submessage {
      font-size: 0.76rem;
      letter-spacing: 1.2px;
    }

    .countdown-banner__values-row .countdown-number {
      font-size: 1.75rem;
    }

    .countdown-banner__values-row .colon {
      font-size: 1.5rem;
    }

    .countdown-banner__values-row .countdown-unit {
      min-width: 3rem;
    }
  }
</style>

<section class="countdown-banner" id="countdown-section">

  <img class="countdown-banner__logo"
       src="{$_layoutParams.root}views/camilaydiego/imgs/logo_blanco.webp"
       alt="Camila y Diego"
       data-aos="fade-up">

  <p class="countdown-banner__message" data-aos="fade-up">
    EL INICIO DE NUESTRA NUEVA AVENTURA COMIENZA<br>
    AHORA. SU PRESENCIA HARÁ QUE ESTE DÍA<br>
    SEA AÚN MÁS INOLVIDABLE
  </p>

  <p class="countdown-banner__submessage" data-aos="fade-up">
    ¡LOS ESPERAMOS CON MUCHA ILUSIÓN!
  </p>

  <div class="countdown-banner__display" data-aos="fade-up">
    <div class="countdown-banner__values-row">
      <div class="countdown-unit">
        <span id="counter1" class="countdown-number">0</span>
        <span class="countdown-label">DÍAS</span>
      </div>
      <span class="colon">:</span>
      <div class="countdown-unit">
        <span id="counter2" class="countdown-number">00</span>
        <span class="countdown-label">HORAS</span>
      </div>
      <span class="colon">:</span>
      <div class="countdown-unit">
        <span id="counter3" class="countdown-number">00</span>
        <span class="countdown-label">MINUTOS</span>
      </div>
      <span class="colon">:</span>
      <div class="countdown-unit">
        <span id="counter4" class="countdown-number">00</span>
        <span class="countdown-label">SEGUNDOS</span>
      </div>
    </div>
  </div>

</section>
