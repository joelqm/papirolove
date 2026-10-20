<style>
  .countdown-banner {
    background: #A2B4C1;
    padding: 4rem 1.5rem 4.25rem;
    text-align: center;
    color: #fff;
  }

  .countdown-banner__logo {
    width: min(280px, 68vw);
    height: auto;
    display: block;
    margin: 0 auto 2.25rem;
    filter: brightness(0) invert(1);
  }

  .countdown-banner__message,
  .countdown-banner__submessage {
    font-family: 'Athelas-Regular', Georgia, serif;
    color: #fff;
    font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 1.6;
    max-width: 560px;
    margin: 0 auto;
    -webkit-text-stroke: 0.4px #fff;
    paint-order: stroke fill;
  }

  .countdown-banner__message {
    font-size: 1.15rem;
    margin-bottom: 1.75rem;
  }

  .countdown-banner__submessage {
    font-size: 1.15rem;
    letter-spacing: 2.2px;
    margin-bottom: 2.5rem;
  }

  .countdown-banner__display {
    max-width: 520px;
    margin: 0 auto;
  }

  .countdown-banner__values-row {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 0.45rem;
  }

  .countdown-unit {
    display: flex;
    flex-direction: column;
    align-items: center;
    min-width: 3.75rem;
  }

  .countdown-banner__values-row .countdown-number {
    font-family: 'Athelas-Regular', Georgia, serif;
    font-size: 2.75rem;
    color: #fff;
    line-height: 1;
    -webkit-text-stroke: 0.35px #fff;
  }

  .countdown-banner__values-row .colon {
    font-family: 'Athelas-Regular', Georgia, serif;
    font-size: 2.35rem;
    color: #fff;
    line-height: 1;
    padding-top: 0.15rem;
    -webkit-text-stroke: 0.35px #fff;
  }

  .countdown-banner__values-row .countdown-label {
    font-family: 'Athelas-Regular', Georgia, serif;
    font-size: 0.95rem;
    letter-spacing: 2px;
    color: #fff;
    text-transform: uppercase;
    margin-top: 0.7rem;
    -webkit-text-stroke: 0.3px #fff;
  }

  @media (max-width: 768px) {
    .countdown-banner {
      padding: 3.25rem 1.1rem 3.5rem;
    }

    .countdown-banner__logo {
      width: min(220px, 58vw);
      margin-bottom: 1.85rem;
    }

    .countdown-banner__message,
    .countdown-banner__submessage {
      font-size: 1.05rem;
      letter-spacing: 1.5px;
    }

    .countdown-banner__submessage {
      font-size: 1.05rem;
      margin-bottom: 2rem;
    }

    .countdown-banner__values-row .countdown-number {
      font-size: 2.1rem;
    }

    .countdown-banner__values-row .colon {
      font-size: 1.85rem;
    }

    .countdown-banner__values-row .countdown-label {
      font-size: 0.9rem;
      letter-spacing: 1.5px;
    }
  }

  @media (max-width: 480px) {
    .countdown-banner {
      padding: 2.85rem 0.85rem 3.1rem;
    }

    .countdown-banner__message,
    .countdown-banner__submessage {
      font-size: 1.02rem;
      letter-spacing: 1.2px;
    }

    .countdown-banner__values-row .countdown-number {
      font-size: 1.8rem;
    }

    .countdown-banner__values-row .colon {
      font-size: 1.55rem;
    }

    .countdown-banner__values-row .countdown-unit {
      min-width: 3.1rem;
    }
  }
</style>

<section class="countdown-banner" id="countdown-section" data-aos="fade-up">

  <img class="countdown-banner__logo"
       src="{$_layoutParams.root}views/milagrosymarcelo/imgs/nuestra_historia_flores.webp"
       alt="Milagros y Marcelo"
       width="504"
       height="587"
       loading="lazy"
       decoding="async"
       data-aos="zoom-in"
       data-aos-delay="60">

  <p class="countdown-banner__message" data-aos="fade-up" data-aos-delay="100">
    EL INICIO DE NUESTRA NUEVA AVENTURA COMIENZA<br>
    AHORA. SU PRESENCIA HAR&Aacute; QUE ESTE D&Iacute;A<br>
    SEA A&Uacute;N M&Aacute;S INOLVIDABLE
  </p>

  <p class="countdown-banner__submessage" data-aos="fade-up" data-aos-delay="140">
    &iexcl;LOS ESPERAMOS CON MUCHA ILUSI&Oacute;N!
  </p>

  <div class="countdown-banner__display" data-aos="fade-up" data-aos-delay="180">
    <div class="countdown-banner__values-row">
      <div class="countdown-unit">
        <span id="counter1" class="countdown-number">0</span>
        <span class="countdown-label">D&Iacute;AS</span>
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
