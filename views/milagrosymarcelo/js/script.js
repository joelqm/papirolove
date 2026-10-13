$(document).ready(function () {
  var targetDate = new Date("December 5, 2026 00:00:00").getTime();

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


  $(document).on('click', '.nav-item', function (event) {
    event.preventDefault();
    event.stopPropagation();

    var targetId = $(this).data('id');
    if (!targetId) {
      return false;
    }

    var $target = $('#' + targetId);
    if (!$target.length) {
      return false;
    }

    var navHeight = $(".navigation").outerHeight() || 0;

    $('html, body').stop(true).animate({
      scrollTop: $target.offset().top - navHeight
    }, 800);

    $('.nav-item').removeClass('current');
    $(this).addClass('current');

    if ($(window).width() <= 768) {
      $('#menu').removeClass('active');
      $('#hamburger-icon').removeClass('active');
      $('.nav-item').css({ 'transform': 'translateY(10px)' });
    }

    return false;
  });

});

$(document).ready(function () {
  $('#hamburger-icon').on('click', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('#menu').toggleClass('active');
    $(this).toggleClass('active');

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
});

$(document).ready(function () {
  // Fallback por si el onclick inline no corre; usa el audio de Milagros
  $(document).on("click", ".js-song-player", function (e) {
    if (typeof window.toggleMilagrosSong === "function") {
      return window.toggleMilagrosSong(e);
    }
    e.preventDefault();
    e.stopPropagation();
    return false;
  });

  $(document).on("click", ".button-calendar", function (e) {
    e.preventDefault();
    e.stopPropagation();
    if (typeof crearEventoEnGoogleCalendar === "function") {
      crearEventoEnGoogleCalendar();
    }
    return false;
  });
});

function crearEventoEnGoogleCalendar() {
  // Datos del evento: cámbialos directamente aquí
  /*
  const titulo = "Boda Milagros y Marcelo";
  const descripcion = "¡No faltes! 💍🎉";
  const lugar = "Arequipa, Perú";
  const fechaInicioTexto = "05/12/2026 14:00"; // DD/MM/YYYY HH:mm hora Perú
  const fechaFinTexto = "05/12/2026 18:00";    // DD/MM/YYYY HH:mm hora Perú

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

  const url = `https://calendar.app.google/q1Zg2WGu77i4QHv28`;

  window.open(url, "_blank");

}