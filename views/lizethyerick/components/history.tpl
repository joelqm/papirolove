<style>
  #new-history.history-section {
    background: #fff;
    padding: 0;
    margin: 0;
  }

  #new-history .history-simple {
    background: #fff;
    width: 100%;
    max-width: 780px;
    margin: 0 auto;
    padding: 4rem 1.5rem 3.5rem;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  #new-history .history-flowers-top {
    width: 100%;
    max-width: min(680px, 92vw);
    height: auto;
    display: block;
    margin: 0 auto 2rem;
  }

  #new-history .history-title-big {
    font-family: 'parfumerie-script', cursive;
    color: #908C70;
    margin: 0 0 1.75rem;
    font-weight: normal;
    line-height: 1.1;
  }

  #new-history .history-content {
    width: 100%;
    max-width: 560px;
  }

  #new-history .history-content p {
    font-family: 'SourceSansVariable', 'Source Sans 3', sans-serif;
    font-size: 1.05rem;
    line-height: 1.65;
    color: #908C70;
    text-align: center;
    margin: 0 0 1.25rem;
    font-weight: 400;
  }

  #new-history .history-content p:last-child {
    margin-bottom: 0;
  }

  @media (max-width: 768px) {
    #new-history .history-simple {
      padding: 3rem 1.1rem 3rem;
    }

    #new-history .history-flowers-top {
      max-width: min(620px, 94vw);
      margin-bottom: 1.75rem;
    }

    #new-history .history-title-big {
      margin-bottom: 1.5rem;
      -webkit-text-stroke: 0.7px #908C70;
      paint-order: stroke fill;
    }

    #new-history .history-content p {
      font-family: 'Athelas-Regular', Georgia, serif;
      font-size: 1.08rem;
      line-height: 1.65;
      -webkit-text-stroke: 0.35px #908C70;
      paint-order: stroke fill;
    }
  }
</style>

<section class="history-section" id="new-history" data-aos="fade-up">

  <div class="history-simple">

    <img class="history-flowers-top"
         src="{$_layoutParams.root}views/lizethyerick/imgs/nuestra_historia_flores.webp"
         alt=""
         width="2200"
         height="824"
         loading="lazy"
         decoding="async"
         data-aos="fade-down"
         data-aos-delay="40">

    <h2 class="history-title-big" data-aos="fade-up" data-aos-delay="80">Nuestra Historia</h2>

    <div class="history-content">
      <p data-aos="fade-up" data-aos-delay="100">Nos conocimos a trav&eacute;s de nuestra amiga en com&uacute;n. Sin buscarlo, nos encontramos y, desde entonces, no volvimos a separarnos.</p>
      <p data-aos="fade-up" data-aos-delay="120">Compartimos grandes historias, muchos viajes y aventuras, y por ello decidimos unir nuestros caminos para crecer de la mano d&iacute;a a d&iacute;a.</p>
      <p data-aos="fade-up" data-aos-delay="140">Descubrimos que el amor no es solo un sentimiento, sino la decisi&oacute;n diaria de hacernos felices. Hoy elegimos caminar juntos para siempre.</p>
    </div>

  </div>

</section>
