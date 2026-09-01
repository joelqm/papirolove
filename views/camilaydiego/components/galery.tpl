<section class="galery" id="galery">
    <div class="container-galery">
        <div class="owl-carousel owl-theme galery-carousel">
            <div class="item">
                <img src="{$_layoutParams.root}views/camilaydiego/imgs/preboda-1.webp"
                     alt="Camila y Diego"
                     width="540"
                     height="723"
                     loading="lazy"
                     decoding="async">
            </div>
            <div class="item">
                <img src="{$_layoutParams.root}views/camilaydiego/imgs/preboda-2.webp"
                     alt="Camila y Diego"
                     width="540"
                     height="723"
                     loading="lazy"
                     decoding="async">
            </div>
            <div class="item">
                <img src="{$_layoutParams.root}views/camilaydiego/imgs/preboda-3.webp"
                     alt="Camila y Diego"
                     width="540"
                     height="723"
                     loading="lazy"
                     decoding="async">
            </div>
        </div>
    </div>
</section>

<style>
  #galery.galery {
    background: #908C70;
    padding: 2.75rem 0 3.25rem;
  }

  #galery .container-galery {
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 1rem;
  }

  #galery .owl-carousel .item {
    padding: 0.5rem;
  }

  #galery .owl-carousel .item img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 42px;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.18);
  }

  #galery .owl-dots {
    margin-top: 1.25rem !important;
  }

  #galery .owl-dots .owl-dot span {
    background: rgba(255, 255, 255, 0.45);
  }

  #galery .owl-dots .owl-dot.active span,
  #galery .owl-dots .owl-dot:hover span {
    background: #fff;
  }

  @media (max-width: 768px) {
    #galery.galery {
      padding: 2.25rem 0 2.75rem;
    }

    #galery .container-galery {
      padding: 0 0.75rem;
    }

    #galery .owl-carousel .item {
      padding: 0.35rem;
    }

    #galery .owl-carousel .item img {
      border-radius: 28px;
    }
  }

  @media (max-width: 480px) {
    #galery.galery {
      padding: 2rem 0 2.5rem;
    }

    #galery .owl-carousel .item img {
      border-radius: 22px;
    }
  }
</style>

<script>
    $(document).ready(function () {
        $("#galery .galery-carousel").owlCarousel({
            items: 3,
            loop: true,
            margin: 14,
            dots: true,
            autoHeight: true,
            autoplay: true,
            autoplayTimeout: 3500,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
