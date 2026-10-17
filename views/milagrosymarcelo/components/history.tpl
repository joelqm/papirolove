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
    font-size: var(--section-title-size);
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
    font-size: clamp(1.15rem, 1.6vw, 1.28rem);
    line-height: 1.75;
    color: #8192A0;
    text-align: center;
    margin: 0;
    font-weight: 400;
  }

  #new-history .history-content p + p {
    margin-top: 1.15rem;
  }

  @media (max-width: 800px) {
    #new-history .history-simple {
      padding: 2.75rem 1rem 3.25rem;
    }

    #new-history .history-title-big {
      margin-bottom: 1.75rem;
      font-size: var(--section-title-size-mobile);
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
      font-size: 1.12rem;
      line-height: 1.7;
      -webkit-text-stroke: 0.3px #8192A0;
      paint-order: stroke fill;
    }
  }

  @media (max-width: 480px) {
    #new-history .history-title-big {
      font-size: var(--section-title-size-small);
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
             width="452"
             height="617"
             loading="lazy"
             decoding="async">
      </figure>

      <div class="history-content" data-aos="fade-up" data-aos-delay="120">
        <p>
          Nos encontramos por trabajo, pero nos<br>
          quedamos por amor.
        </p>
        <p>
          Entre conversaciones sin apuro, risas en los descansos<br>
          y un peque&ntilde;o escondite de dulces<br>
          que se convirti&oacute; en la excusa perfecta para<br>
          buscarnos y hablarnos, aquella amistad fue<br>
          creciendo poco a poco, hasta convertirse en algo<br>
          mucho m&aacute;s bonito.
        </p>
        <p>
          Hoy, despu&eacute;s de tantos a&ntilde;os caminando<br>
          juntos, seguimos eligi&eacute;ndonos cada d&iacute;a<br>
          y estamos listos para dar el paso m&aacute;s<br>
          importante de nuestra historia:<br>
          este diciembre, &iexcl;NOS CASAMOS!
        </p>
        <p>
          De colegas a c&oacute;mplices, de c&oacute;mplices<br>
          a compa&ntilde;eros de vida y, ahora,<br>
          para siempre, esposos.
        </p>
      </div>
    </div>

  </div>

</section>
