<section class="invitation-card" id="info">

  <img class="details-flower details-flower-tr"
       src="{$_layoutParams.root}views/julissayruben/imgs/imagen_historia_flores_superior_izq.webp"
       alt=""
       aria-hidden="true">

  <img class="details-flower details-flower-bl"
       src="{$_layoutParams.root}views/julissayruben/imgs/imagen_historia_flores_inferior_der.webp"
       alt=""
       aria-hidden="true">

  <div class="details-content">

    <h2 class="details-quote" data-aos="fade-up">La felicidad se construye con pequeños momentos</h2>

    <p class="details-subtitle" data-aos="fade-up">Con la Bendición de Dios y nuestros padres</p>

    <div class="details-parents" data-aos="fade-up">
      <div class="details-parents-col">
        <p>Edgard Casani Álvarez &amp;</p>
        <p>Irene Vargas Velásquez</p>
      </div>
      <div class="details-parents-col">
        <p>Segundo Torres Ramos &amp;</p>
        <p>Alicia Lima Churata de Torres</p>
      </div>
    </div>

    <p class="details-subtitle" data-aos="fade-up">Nuestros padrinos</p>

    <div class="details-godparents" data-aos="fade-up">
      <p>María Jesús Lima de Dueñas &amp;</p>
      <p>Eulogio Dueñas Arratea</p>
    </div>

    <p class="details-invite" data-aos="fade-up">
      Queremos compartir contigo la felicidad de celebrar nuestro matrimonio
    </p>

    <div class="details-locations" data-aos="fade-up">

      <div class="details-location-card">
        <div class="details-location-head">
          <span class="details-location-icon" aria-hidden="true">
            <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_iglesia.webp" alt="">
          </span>
          <h3 class="details-location-title">Ceremonia</h3>
        </div>
        <p class="details-location-place">Parroquia "Santa Marta"</p>
        <p class="details-location-text">Plaza España 105 - Cercado</p>
        <p class="details-location-time">11:30 am</p>
        <a target="_blank" rel="noopener noreferrer" href="https://share.google/MR7bNGCxjNKoD0Fkv" class="location-button">
          Ubicación
        </a>
      </div>

      <div class="details-location-card">
        <div class="details-location-head">
          <span class="details-location-icon" aria-hidden="true">
            <img src="{$_layoutParams.root}views/julissayruben/imgs/icono_copas.webp" alt="">
          </span>
          <h3 class="details-location-title">Recepción</h3>
        </div>
        <p class="details-location-place">Jardines de Sabandía</p>
        <p class="details-location-text">Prol. Colon 221 - Paucarpata</p>
        <p class="details-location-time">2:30 pm</p>
        <a target="_blank" rel="noopener noreferrer" href="https://share.google/RGL1olLSfSt5z70hj" class="location-button">
          Ubicación
        </a>
      </div>

    </div>

  </div>

</section>

{literal}
<style>
  #info.invitation-card {
    background-color: #FFFAF4;
    background-image: none;
    color: #6D8397;
    padding: 80px 24px 100px;
    position: relative;
    overflow: hidden;
    display: block;
    border-radius: 0;
  }

  #info .details-flower {
    position: absolute;
    z-index: 0;
    pointer-events: none;
    width: min(280px, 34vw);
  }

  #info .details-flower-tr {
    top: -10px;
    right: -20px;
    transform: scaleX(-1);
  }

  #info .details-flower-bl {
    bottom: -20px;
    left: -30px;
    transform: scaleX(-1);
  }

  #info .details-content {
    position: relative;
    z-index: 1;
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
  }

  #info .details-quote {
    font-family: 'Bacalisties', cursive;
    font-size: var(--jr-title);
    font-weight: normal;
    color: #6D8397;
    line-height: 1.2;
    margin: 0 auto 2.2rem;
    max-width: 680px;
  }

  #info .details-subtitle,
  #info .details-parents-col,
  #info .details-godparents,
  #info .details-invite,
  #info .details-location-place,
  #info .details-location-text,
  #info .details-location-time {
    font-family: 'NewAthenaUnicode', serif;
    font-size: var(--jr-body);
    font-weight: normal;
    color: #6D8397;
    line-height: 1.55;
  }

  #info .details-subtitle {
    margin: 0 0 1.1rem;
  }

  #info .details-parents {
    display: flex;
    justify-content: center;
    gap: 4rem;
    flex-wrap: wrap;
    margin-bottom: 2.2rem;
  }

  #info .details-parents-col p,
  #info .details-godparents p {
    margin: 0;
  }

  #info .details-godparents {
    margin-bottom: 2.2rem;
  }

  #info .details-invite {
    max-width: 540px;
    margin: 0 auto 2.8rem;
  }

  #info .details-locations {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 5rem;
    flex-wrap: wrap;
  }

  #info .details-location-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 280px;
  }

  #info .details-location-head {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin-bottom: 0.7rem;
  }

  #info .details-location-icon {
    width: 90px;
    height: 90px;
    color: #6D8397;
    display: inline-flex;
    flex-shrink: 0;
  }

  #info .details-location-icon img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    mix-blend-mode: screen;
  }

  #info .details-location-title {
    font-family: 'Bacalisties', cursive;
    font-size: var(--jr-title);
    font-weight: normal;
    color: #6D8397;
    margin: 0;
    line-height: 1.1;
  }

  #info .details-location-place,
  #info .details-location-text {
    margin: 0 0 0.2rem;
  }

  #info .details-location-time {
    margin: 0 0 1.2rem;
  }

  #info .location-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #6D8397;
    color: #fff !important;
    padding: 10px 28px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 1.15rem;
    font-family: 'NewAthenaUnicode', serif;
    font-weight: normal;
    transition: background-color 0.3s, transform 0.2s;
  }

  #info .location-button:hover {
    background-color: #5a7184;
    color: #fff !important;
    text-decoration: none;
    transform: translateY(-1px);
  }

  @media (max-width: 768px) {
    #info.invitation-card {
      padding: 60px 18px 80px;
    }

    #info .details-flower {
      width: min(180px, 48vw);
    }

    #info .details-quote {
      margin-top: 3.2rem;
    }

    #info .details-parents {
      gap: 1.5rem;
      flex-direction: column;
    }

    #info .details-locations {
      gap: 2.8rem;
    }

    #info .details-location-title {
      font-size: 2.1rem;
    }

    #info .details-location-icon {
      width: 90px;
    }
  }
</style>
{/literal}
