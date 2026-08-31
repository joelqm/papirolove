$(document).ready(function () {
  var targetDate = new Date("October 24, 2026 00:00:00").getTime();

  function padTwo(value) {
    return String(value).padStart(2, "0");
  }

  function updateCountdown() {
    var now = new Date().getTime();
    var timeLeft = targetDate - now;

    if (timeLeft <= 0) {
      $("#counter1").text("0");
      $("#counter2").text("00");
      $("#counter3").text("00");
      $("#counter4").text("00");
      return false;
    }

    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    $("#counter1").text(days);
    $("#counter2").text(padTwo(hours));
    $("#counter3").text(padTwo(minutes));
    $("#counter4").text(padTwo(seconds));
    return true;
  }

  if ($("#counter1").length) {
    updateCountdown();
    setInterval(function () {
      updateCountdown();
    }, 1000);
  }


  $('.nav-item').on('click', function () {
    var targetId = $(this).data('id');
    var navHeight = $(".menu").outerHeight();

    // Scroll animado
    $('html, body').animate({
      scrollTop: $('#' + targetId).offset().top - navHeight
    }, 800);

    // Guardar como ítem activo
    $('.nav-item').removeClass('current');
    $(this).addClass('current');

    // Cerrar el menú en móvil
    if ($(window).width() <= 768) {
      $('#menu').removeClass('active');
      $('#hamburger-icon').removeClass('active');
      $('.nav-item').css({

        'transform': 'translateY(10px)'
      });
    }

    $("#hamburger-icon").find('i').animate({ rotation: 0 }, {
      duration: 300,
      step: function (now) {
        $(this).css({ transform: 'rotate(' + now + 'deg)' });
      }
    });

  });

});

$(document).ready(function () {
  // Toggle del menú al hacer clic en el ícono de hamburguesa
  $('#hamburger-icon').click(function () {
    $('#menu').toggleClass('active');
    $(this).toggleClass('active');

    // Animación del ícono de hamburguesa
    if ($(this).hasClass('active')) {
      $(this).find('i').css({
        transform: 'rotate(90deg)',
        transition: 'transform 0.3s ease'
      });
    } else {
      $(this).find('i').css({
        transform: 'rotate(0deg)',
        transition: 'transform 0.3s ease'
      });
    }
  });

  // Asegurarse de que el menú no se cierre al hacer clic en los ítems de navegación
  $('.nav-item').on('click', function (event) {
    if ($(window).width() <= 768) {
      // Evitar que el menú se cierre si el usuario solo hace scroll
      event.preventDefault();

      // Obtener el destino del enlace
      const target = $(this).attr('href');

      // Desplazar a la sección correspondiente
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 500, function () {
        // Después de hacer scroll, no cerrar el menú
        // Solo cerrar si el menú está activo
        $('#menu').removeClass('active');
        $('#hamburger-icon').removeClass('active');
      });
    }
  });

  // Asegurarse de que el menú se cierre solo cuando se hace clic en el ícono de hamburguesa
  $('.menu').on('click', function (event) {
    if ($(window).width() <= 768) {
      event.stopPropagation(); // Evitar que se cierre al hacer clic en los elementos del menú
    }
  });
});
$(document).ready(function () {
  $(".js-song-player").click(function () {
    var audio = document.getElementById("myAudio");
    if (!audio) {
      return;
    }

    if (audio.paused) {
      audio.play().catch(function (error) {
        console.log("No se pudo reproducir el audio:", error);
      });
    } else {
      audio.pause();
    }
  });

  $(".button-calendar").click(function () {
    crearEventoEnGoogleCalendar();
  });
});

function crearEventoEnGoogleCalendar() {
  // Datos del evento: cámbialos directamente aquí
  /*
  const titulo = "Boda Camila y Diego";
  const descripcion = "¡No faltes! 💍🎉";
  const lugar = "Arequipa, Perú";
  const fechaInicioTexto = "31/10/2026 14:00"; // DD/MM/YYYY HH:mm hora Perú
  const fechaFinTexto = "31/10/2026 18:00";    // DD/MM/YYYY HH:mm hora Perú

  // Convierte fecha en formato DD/MM/YYYY HH:mm (hora Perú) a formato Google Calendar UTC
  const formatoGoogle = fechaTexto => {
    const [fecha, hora] = fechaTexto.split(" ");
    const [dia, mes, anio] = fecha.split("/").map(Number);
    const [horas, minutos] = hora.split(":").map(Number);

    // Perú es UTC-5 → sumamos 5h para convertir a UTC
    const dateUTC = new Date(Date.UTC(anio, mes - 1, dia, horas + 5, minutos));
    return dateUTC.toISOString().replace(/[-:]/g, "").split(".")[0] + "Z";
  };

  const startDate = formatoGoogle(fechaInicioTexto);
  const endDate = formatoGoogle(fechaFinTexto);

  const url = `https://www.google.com/calendar/render?action=TEMPLATE` +
    `&text=${encodeURIComponent(titulo)}` +
    `&dates=${startDate}/${endDate}` +
    `&details=${encodeURIComponent(descripcion)}` +
    `&location=${encodeURIComponent(lugar)}` +
    `&ctz=America/Lima`;
  */

  const url = `https://calendar.app.google/csQShipCnveLmcYR8`;

  window.open(url, "_blank");

}