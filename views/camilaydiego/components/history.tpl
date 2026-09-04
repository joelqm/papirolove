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

<section class="history-section" id="new-history">

  <div class="history-simple">

    <img class="history-flowers-top"
         src="{$_layoutParams.root}views/camilaydiego/imgs/nuestra_historia_flores.webp"
         alt=""
         width="2200"
         height="824"
         loading="lazy"
         decoding="async"
         data-aos="fade-up">

    <h2 class="history-title-big" data-aos="fade-up">Nuestra Historia</h2>

    <div class="history-content" data-aos="fade-up">
      <p>Nuestra historia comenzó en abril de 2023, con una conversación por internet que pronto se convirtió en algo mucho más especial.</p>
      <p>Después de casi un mes llegó nuestra primera cita en el centro de Arequipa: una rosa blanca, un show de stand-up, una cena y una caminata que marcaron el inicio de una conexión que desde el comienzo se sintió natural.</p>
      <p>Poco tiempo después, conversando antes de conocer a nuestros respectivos hermanos, decidimos que era momento de formalizar nuestra relación y comenzar oficialmente esta aventura juntos.</p>
      <p>Desde entonces hemos compartido viajes, domingos en familia, películas, celebraciones, retos y cientos de momentos cotidianos que se convirtieron en nuestros recuerdos favoritos.</p>
      <p>En octubre de 2025, frente al atardecer de Casapueblo, en Uruguay, Diego hizo la pregunta más importante y Camila dijo que sí.</p>
      <p>Ahora, después de más de tres años creciendo y caminando juntos, estamos listos para volver a decirnos que sí, esta vez frente al altar, convencidos de que no importa hacia dónde nos lleve la vida mientras podamos recorrerla juntos.</p>
    </div>

  </div>

</section>
