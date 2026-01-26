$(document).ready(function () {
  // Definir la fecha de destino
  var targetDate = new Date("jul 12, 2025 00:00:00").getTime();

  // Guardar el último valor para comparar
  var lastDays = -1;
  var lastHours = -1;
  var lastMinutes = -1;

  // Función para animar los números
  function animateCounter(id, targetNumber, duration) {
    var currentNumber = 0;
    var step = targetNumber / (duration / 50); // Incrementar cada 50ms

    var interval = setInterval(function () {
      currentNumber += step;
      if (currentNumber >= targetNumber) {
        clearInterval(interval);
        currentNumber = targetNumber; // Asegurarse de que no pase del objetivo
      }
      $(id).text(Math.floor(currentNumber)); // Actualizar el número en el HTML
    }, 50);
  }

  // Actualizar el contador cada segundo
  var countdownInterval = setInterval(function () {
    var now = new Date().getTime();
    var timeLeft = targetDate - now;

    // Si el tiempo se ha agotado, detener el contador
    if (timeLeft <= 0) {
      clearInterval(countdownInterval);
      $("#counter1").text(0);
      $("#counter2").text(0);
      $("#counter3").text(0);
      return; // Detener más actualizaciones
    }

    // Calcular días, horas, minutos y segundos restantes
    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));

    // Llamar a la función de animación solo si el valor cambió
    if (days !== lastDays) {
      animateCounter("#counter1", days, 2000); // Animar días en 2 segundos
      lastDays = days; // Actualizar el último valor de días
    }

    if (hours !== lastHours) {
      animateCounter("#counter2", hours, 2000); // Animar horas en 2 segundos
      lastHours = hours; // Actualizar el último valor de horas
    }

    if (minutes !== lastMinutes) {
      animateCounter("#counter3", minutes, 2000); // Animar minutos en 2 segundos
      lastMinutes = minutes; // Actualizar el último valor de minutos
    }

  }, 1000);


  $('.nav-item').on('click', function() {
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

    $("#hamburger-iconRicardo & Milagros").find('i').animate({ rotation: 0 }, {
      duration: 300,
      step: function(now) {
        $(this).css({ transform: 'rotate(' + now + 'deg)' });
      }
    });

  });
  
});

$(document).ready(function() {
  // Toggle del menú al hacer clic en el ícono de hamburguesa
  $('#hamburger-icon').click(function() {
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
  $('.nav-item').on('click', function(event) {
    if ($(window).width() <= 768) {
      // Evitar que el menú se cierre si el usuario solo hace scroll
      event.preventDefault();

      // Obtener el destino del enlace
      const target = $(this).attr('href');

      // Desplazar a la sección correspondiente
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 500, function() {
        // Después de hacer scroll, no cerrar el menú
        // Solo cerrar si el menú está activo
        $('#menu').removeClass('active');
        $('#hamburger-icon').removeClass('active');
      });
    }
  });

  // Asegurarse de que el menú se cierre solo cuando se hace clic en el ícono de hamburguesa
  $('.menu').on('click', function(event) {
    if ($(window).width() <= 768) {
      event.stopPropagation(); // Evitar que se cierre al hacer clic en los elementos del menú
    }
  });
});
$(document).ready(function() {
  // Reproducir o pausar el audio cuando se haga clic en el botón
  $("#player").click(function() {
    toggleAudio(); // Llamar a la función toggleAudio() al hacer clic
  });

  const toggleAudio = () => {
    var audio = $("#myAudio")[0];

    if (audio.paused) {
      audio.play().then(() => {
        $(".play-icon").hide();
        $(".pause-icon").show();
      }).catch(function(error) {
        console.log("No se pudo reproducir el audio:", error);
      });
    } else {
      audio.pause();
      $(".pause-icon").hide();
      $(".play-icon").show();
    }
  };

  $(".button-calendar").click(function (e) { 
    crearEventoEnGoogleCalendar()
    
  });
});


function crearEventoEnGoogleCalendar() {
  const title = encodeURIComponent("Boda Shirley y Crysthian");
  const description = encodeURIComponent("¡No faltes! 💍🎉");

  const startDate = "20250712T163000Z"; // 11:30 a. m. hora Perú
  const endDate = "20250712T200000Z";   // 3:00 p. m. hora Perú

  const url = `https://www.google.com/calendar/render?action=TEMPLATE&text=${title}&dates=${startDate}/${endDate}&details=${description}`;

  window.open(url, '_blank');
}
