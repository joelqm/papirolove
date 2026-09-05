let cart = new Map();

function isGiftsModalOpen() {
  return $("#gifts-modal").hasClass("is-open");
}


const generateRandom = () => {
  const ruta = $("#root").val();
  var numPosibilidades = 99999999;
  var random = Math.random() * numPosibilidades;
  random = Math.round(random);
  ao = parseInt(1) + random;

  $.post(
    ruta + "camilaydiego/g_ao",
    "ao=" + ao,
    function (respuesta) {
      if (respuesta == true) {
        generateRandom();
      } else if (respuesta == false) {

        $("#messageId").val(ao);

      }
    },
    "json"
  );
}

$(document).ready(function () {

  function ensureGiftsModalPortal() {
    var $modal = $("#gifts-modal");
    if ($modal.length && !$modal.parent().is("body")) {
      $("body").append($modal);
    }
  }

  ensureGiftsModalPortal();

  getCart();
  generateRandom();
  rederCart();

  // 🔹 Función mejorada para eliminar emojis y símbolos especiales (♀, ♂, etc.)
  function limpiarEmojis(texto) {
    return texto
      .replace(
        /([\u2700-\u27BF]|[\uE000-\uF8FF]|\u24C2|[\u2600-\u26FF]|[\uD83C-\uDBFF][\uDC00-\uDFFF]|\u200D|\uFE0F)/g,
        ''
      )
      .trim();
  }

  function initGiftFormValidation() {
    if (!$("#giftForm").length || !$.fn.validate) {
      return;
    }
    if ($("#giftForm").data("validator")) {
      return;
    }

  $("#giftForm").validate({
    rules: {
      message: {
        required: true,
        minlength: 3
      },
      signature: {
        required: true,
        minlength: 3
      }
    },
    messages: {
      message: {
        required: "Por favor, escribe una dedicatoria.",
        minlength: "La dedicatoria debe tener al menos 3 caracteres."
      },
      signature: {
        required: "Por favor, deja una firma.",
        minlength: "La firma debe tener al menos 3 caracteres."
      }
    },
    errorElement: 'div',
    errorClass: 'error-form',
    submitHandler: function (form, event) {
      // Evitar el envío tradicional
      event.preventDefault();
      if ($(form).data('enviando')) {
        return false;
      }
      $(form).data('enviando', true);

      // 🧹 Limpiar emojis de los campos antes de enviar
      const messageField = $("#message");
      const signatureField = $("#signature");

      messageField.val(limpiarEmojis(messageField.val()));
      signatureField.val(limpiarEmojis(signatureField.val()));

      // Convertimos el Map a un objeto y luego obtenemos solo los valores
      const cartObj = Object.fromEntries(getCart());
      const cartValues = Object.values(cartObj);
      const cartJson = JSON.stringify(cartValues);

      // Recolectamos los datos del formulario como array de objetos
      const formData = $(form).serializeArray();
      const data = {};

      formData.map((item) => {
        data[item.name] = item.value;
      });
      data.cart = cartJson;

      $.ajax({
        url: `${$("#root").val()}camilaydiego/guardarMensajeMonto`,
        method: 'POST',
        data: data,
        success: function (response) {
          window.location.href = `${$("#root").val()}camilaydiego/obsequio/${formData[0].value}`;
          //form.reset();
          //$(".form").hide();
        },
        error: function (err) {
          $(form).data('enviando', false);
          $(".form").hide();
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hubo un problema al enviar tu dedicatoria.'
          });
        }
      });

      return false;
    }
  });
  }

  initGiftFormValidation();
  $(window).on("load", initGiftFormValidation);




  $(document).on("click", ".form-close", async function () {
    $(".form").fadeOut(300);
  })

  $(document).on("click", ".checkout-button", async function (e) {
    getCart();

    if (cart.size === 0) {
      if (isGiftsModalOpen()) {
        $("body").addClass("gifts-modal-cart-open");
      } else {
        closeCart();
      }

      Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'warning',
        title: 'Debes añadir un obsequio!',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        background: '#bab95f',
        color: '#fff',
        iconColor: '#fff',
      });

      $('html, body').animate({
        scrollTop: $("#gifts").offset().top
      }, 800);
      return;
    }

    // Cerrar popup de colectivo antes de la dedicatoria (evita modales apilados)
    closeGiftsModal();
    closeCart();
    $(".form").fadeIn(300);
  });





  $(document).on("click", ".add", function (e) {
    const id = $(this).data("id");
    addItem(id);
    rederCart();
  });

  $(document).on("click", ".remove", function (e) {
    const id = $(this).data("id");
    removeItem(id);
    rederCart();
  });

  $(document).on("click", ".cart-item-remove", function (e) {
    const id = $(this).data("id");
    removeToCart(id);
    rederCart();
  });


  $(document).on("click", ".button-gift", function () {
    const $btn = $(this);
    const id = Number($btn.data("id"));
    const cupos = Number($btn.data("cupos"));
    const progreso = Number($btn.data("progeso"));
    const restantes = cupos - progreso;

    const price = Number(
      String($btn.closest(".product-info").find(".product-price").text()).replace(/[^\d.]/g, "").trim()
    );
    const name = $btn.closest(".product-info").find(".product-title").text().trim();
    const img = $btn.closest(".product-card").find(".product-image img").attr("src");

    if (!id || !name || !isFinite(price) || price < 0) {
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "error",
        title: "No se pudo agregar este obsequio",
        showConfirmButton: false,
        timer: 1800,
        timerProgressBar: true,
      });
      return;
    }

    const item = {
      id: id,
      price: price,
      name: name,
      img: img,
      quantity: 1,
    };

    addToCart(item);

    Swal.fire({
      toast: true,
      position: "top-end",
      icon: "success",
      title: "¡Añadido a tu carrito!",
      showConfirmButton: false,
      timer: 1500,
      timerProgressBar: true,
      background: "#28a745",
      color: "#fff",
      iconColor: "#fff",
    });

    rederCart();

    if (isGiftsModalOpen()) {
      $("body").addClass("gifts-modal-cart-open");
    }
  });



  $(document).on("click", ".gifts-modal .category-button", function () {
    const categoryId = Number($(this).data("id")) || 0;
    $(".gifts-modal .category-button").removeClass("primary");
    $(this).addClass("primary");
    filterGifts(categoryId);
  });

  function openGiftsModal() {
    ensureGiftsModalPortal();
    const $modal = $("#gifts-modal");
    closeCart();
    $("body").removeClass("gifts-modal-cart-open");
    $modal.removeAttr("hidden").addClass("is-open").attr("aria-hidden", "false");
    $("body").addClass("gifts-modal-open");
    getGifts(0, true);
    rederCart();
  }

  function closeGiftsModal() {
    $("#gifts-modal").attr("hidden", "hidden").removeClass("is-open").attr("aria-hidden", "true");
    $("body").removeClass("gifts-modal-open gifts-modal-cart-open");
  }

  function setBankDetailsVisible(show) {
    var $bank = $("#gifts-bank");
    var $section = $("#gifts");
    if (!$bank.length) {
      return;
    }

    if (show) {
      $bank.removeAttr("hidden").addClass("is-visible").attr("aria-hidden", "false");
      $section.addClass("bank-open");
    } else {
      $bank.attr("hidden", "hidden").removeClass("is-visible").attr("aria-hidden", "true");
      $section.removeClass("bank-open");
    }
  }

  $(document).on("click", ".js-gifts-cart-toggle", function () {
    $("body").toggleClass("gifts-modal-cart-open");
  });

  $(document).on("click", ".js-gifts-colectivo", function (e) {
    e.preventDefault();
    openGiftsModal();
  });

  $(document).on("click", ".js-gifts-transfer", function (e) {
    e.preventDefault();

    var $bank = $("#gifts-bank");
    var $btn = $(this);
    if (!$bank.length) {
      return;
    }

    var willShow = !$bank.hasClass("is-visible");
    setBankDetailsVisible(willShow);
    $btn.attr("aria-expanded", willShow ? "true" : "false");

    if (willShow) {
      window.requestAnimationFrame(function () {
        var top = $bank.offset().top - 100;
        window.scrollTo({ top: top, behavior: "smooth" });
      });
    }
  });

  $(document).on("click", ".js-gifts-modal-close", function () {
    closeGiftsModal();
  });

  $(document).on("keydown", function (event) {
    if (event.key !== "Escape" || !isGiftsModalOpen()) {
      return;
    }
    // No cerrar el modal si SweetAlert está pidiendo el monto
    if (typeof Swal !== "undefined" && Swal.isVisible && Swal.isVisible()) {
      return;
    }
    if ($("body").hasClass("gifts-modal-cart-open")) {
      $("body").removeClass("gifts-modal-cart-open");
      return;
    }
    closeGiftsModal();
  });

  $("#close-cart").click(function () {
    closeCart();
  });

  $(".show-cart").click(function () {
    rederCart();
    showCart();
  });

  $(document).on("click", ".button-free-gift", function (e) {
    e.preventDefault();
    e.stopPropagation();

    const $btn = $(this);
    if ($btn.data("asking")) {
      return;
    }
    $btn.data("asking", true);
    $btn.trigger("blur");
    if (document.activeElement && document.activeElement.blur) {
      document.activeElement.blur();
    }

    const id = Number($btn.data("id"));
    const name = $btn.closest(".product-info").find(".product-title").text().trim();
    const img = $btn.closest(".product-card").find(".product-image img").attr("src");

    if (!id || !name) {
      $btn.data("asking", false);
      return;
    }

    Swal.fire({
      title: "Ingresa el monto",
      input: "number",
      inputAttributes: {
        min: "1",
        step: "0.01",
        inputmode: "decimal",
      },
      inputValue: "",
      showCancelButton: true,
      confirmButtonText: "Aceptar",
      cancelButtonText: "Cancelar",
      allowOutsideClick: false,
      allowEscapeKey: true,
      heightAuto: false,
      customClass: {
        popup: "font-Forum",
        title: "font-bellisia",
        input: "font-Forum",
        confirmButton: "custom-button",
        cancelButton: "custom-cancel",
      },
      background: "#f7f7f7",
      color: "#333",
      confirmButtonColor: "#c58888",
      cancelButtonColor: "#797979",
      preConfirm: function (amount) {
        const value = Number(amount);
        if (!isFinite(value) || value <= 0) {
          Swal.showValidationMessage("Por favor ingresa un monto válido");
          return false;
        }
        return value;
      },
    })
      .then(function (result) {
        if (!result.isConfirmed) {
          return;
        }

        const amount = Number(result.value);
        const item = {
          id: id,
          name: name,
          img: img,
          quantity: 1,
          price: amount,
        };

        removeToCart(id);
        addToCart(item);
        rederCart();

        Swal.fire({
          toast: true,
          position: "top-end",
          icon: "success",
          title: "¡Añadido: S/ " + amount.toFixed(2) + "!",
          showConfirmButton: false,
          timer: 1600,
          timerProgressBar: true,
          background: "#28a745",
          color: "#fff",
          iconColor: "#fff",
        });

        if (isGiftsModalOpen()) {
          $("body").addClass("gifts-modal-cart-open");
        }
      })
      .finally(function () {
        $btn.data("asking", false);
      });
  });

  // Precarga en idle para no competir con el primer paint
  var schedulePrefetch = function () {
    prefetchGifts();
  };
  if (window.requestIdleCallback) {
    requestIdleCallback(schedulePrefetch, { timeout: 2500 });
  } else {
    setTimeout(schedulePrefetch, 1200);
  }

});

const COUPLE_ID = 12; // Camila y Diego
let giftsCache = null;
let giftsCachePromise = null;
let activeCategoryId = 0;

const setGiftsLoading = (loading) => {
  const $catalog = $(".gifts-modal__catalog");
  const $loader = $("#gifts-modal-loader");
  $catalog.toggleClass("is-loading", !!loading);
  $loader.prop("hidden", !loading);
};

const escapeHtml = (value) => {
  return String(value == null ? "" : value)
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/"/g, "&quot;")
    .replace(/'/g, "&#39;");
};

const categoryLabel = (nombre) => {
  return String(nombre || "")
    .trim()
    .toUpperCase()
    .replace(/\s+/g, " ");
};

const fetchGiftsOnce = () => {
  if (Array.isArray(giftsCache)) {
    return Promise.resolve(giftsCache);
  }
  if (giftsCachePromise) {
    return giftsCachePromise;
  }

  giftsCachePromise = $.ajax({
    type: "POST",
    url: `${$("#root").val()}obsequio/obtenerObsequiosPareja`,
    data: {
      parejaId: COUPLE_ID,
      categoriaId: 0,
    },
    dataType: "json",
  })
    .then(function (response) {
      giftsCache = Array.isArray(response) ? response : [];
      return giftsCache;
    })
    .always(function () {
      giftsCachePromise = null;
    });

  return giftsCachePromise;
};

const prefetchGifts = () => {
  fetchGiftsOnce().catch(function () {
    /* silencioso en precarga */
  });
};

const buildCategoryButtons = (items) => {
  const $sidebar = $("#gifts-modal-categories");
  if (!$sidebar.length) {
    return;
  }

  const cats = new Map();
  (items || []).forEach(function (item) {
    const id = Number(item.categoria_id);
    if (!id || cats.has(id)) {
      return;
    }
    cats.set(id, categoryLabel(item.nombreCategoria));
  });

  let html = '<button type="button" class="category-button primary" data-id="0">TODAS LAS CATEGOR&Iacute;AS</button>';
  Array.from(cats.entries())
    .sort(function (a, b) {
      return a[0] - b[0];
    })
    .forEach(function (entry) {
      html +=
        '<button type="button" class="category-button" data-id="' +
        entry[0] +
        '">' +
        escapeHtml(entry[1]) +
        "</button>";
    });

  $sidebar.html(html);
};

const filterGifts = (categoryId) => {
  activeCategoryId = Number(categoryId) || 0;
  const items = Array.isArray(giftsCache) ? giftsCache : [];
  const filtered =
    activeCategoryId === 0
      ? items
      : items.filter(function (item) {
          return Number(item.categoria_id) === activeCategoryId;
        });

  if (activeCategoryId === 5) {
    renderFree(filtered);
  } else {
    renderGifts(filtered);
  }
};

const getGifts = async (categoryId = 0, rebuildCategories = false) => {
  activeCategoryId = Number(categoryId) || 0;
  setGiftsLoading(true);
  $("#gifts-modal-empty").prop("hidden", true);

  try {
    const items = await fetchGiftsOnce();
    if (rebuildCategories) {
      buildCategoryButtons(items);
      $(".gifts-modal .category-button").removeClass("primary");
      $('.gifts-modal .category-button[data-id="0"]').addClass("primary");
      activeCategoryId = 0;
    }
    filterGifts(activeCategoryId);
  } catch (error) {
    console.error(error);
    $("#gifts-modal .products").html("");
    $("#gifts-modal-empty").text("No se pudieron cargar los obsequios. Intenta de nuevo.").prop("hidden", false);
  } finally {
    setGiftsLoading(false);
  }
};

const renderGifts = (items) => {
  const productGrid = $("#gifts-modal .products");
  const $empty = $("#gifts-modal-empty");
  productGrid.html("");
  let grid = "";
  let shown = 0;

  (items || []).forEach((item) => {
    if (item.id == 100) {
      return;
    }

    shown += 1;
    const progress = item.cupos > 0 ? (item.progreso / item.cupos) * 100 : 0;
    const name = escapeHtml(item.nombreObsequio);
    const img = escapeHtml(item.imagenObsequio);
    const price = escapeHtml(item.montoObsequio);

    if (Number(item.categoria_id) === 5) {
      grid += `
        <div class="product-card">
          <div class="product-image">
            <img src="${img}" alt="${name}" loading="lazy" decoding="async">
          </div>
          <div class="product-info">
            <h3 class="product-title">${name}</h3>
            <p style="color: transparent;">S/. <span class="product-price" style="color: transparent;">${price}</span></p>
            <div class="product-progress">
              <div class="progress-bar" style="width: ${progress}%;"></div>
            </div>
            <button type="button" data-id="${item.id}" class="button-free-gift">OBSEQUIAR <i class="fa-solid fa-gift"></i></button>
          </div>
        </div>`;
    } else {
      grid += `
        <div class="product-card">
          <div class="product-image">
            <img src="${img}" alt="${name}" loading="lazy" decoding="async">
          </div>
          <div class="product-info">
            <h3 class="product-title">${name}</h3>
            <p>S/. <span class="product-price">${price}</span></p>
            <div class="product-progress">
              <div class="progress-bar" style="width: ${progress}%;"></div>
            </div>
            <button type="button" data-id="${item.id}" data-cupos="${item.cupos}" data-progeso="${item.progreso}" class="button-gift">OBSEQUIAR <i class="fa-solid fa-gift"></i></button>
          </div>
        </div>`;
    }
  });

  productGrid.append(grid);
  $empty.text("No hay obsequios en esta categoría.").prop("hidden", shown > 0);
  if (typeof window.initPapiroAos === "function") {
    window.initPapiroAos();
  }
};

const renderFree = (items) => {
  const productGrid = $("#gifts-modal .products");
  const $empty = $("#gifts-modal-empty");
  productGrid.html("");
  let grid = "";
  let shown = 0;

  (items || []).forEach((item) => {
    shown += 1;
    const progress = item.cupos > 0 ? (item.progreso / item.cupos) * 100 : 0;
    const name = escapeHtml(item.nombreObsequio);
    const img = escapeHtml(item.imagenObsequio);
    const price = escapeHtml(item.montoObsequio);

    grid += `
     <div class="product-card">
                 <div class="product-image">
                     <img src="${img}" alt="${name}" loading="lazy" decoding="async">
                 </div>
                 <div class="product-info">
                     <h3 class="product-title">${name}</h3>
                     <p style="color: transparent;">S/. <span class="product-price"  style="color: transparent;">${price}</span> </p>    
                      <div class="product-progress">
                     <div class="progress-bar" style="width: ${progress}%;"></div>
                 </div>

                  <button type="button" data-id="${item.id}" class="button-free-gift">OBSEQUIAR <i class="fa-solid fa-gift"></i></button>

                 </div>
             </div>`;
  });
  productGrid.append(grid);
  $empty.text("No hay obsequios en esta categoría.").prop("hidden", shown > 0);
  if (typeof window.initPapiroAos === "function") {
    window.initPapiroAos();
  }
};

/** CART **/

const closeCart = () => {
  cart = $(".cart");
  cart.fadeOut(300);

  showButton = $(".show-cart");
  showButton.show(300);
};

const showCart = () => {
  showButton = $(".show-cart");
  showButton.fadeOut(300);

  cart = $(".cart");
  cart.fadeIn(300);
};

const getCart = () => {
  const data = localStorage.getItem("cart");

  if (!data) {
    cart = new Map();
    saveCart();
    return cart;
  }

  try {
    const parsedData = JSON.parse(data);
    // Check if the parsed data is an array of entries
    if (Array.isArray(parsedData)) {
      cart = new Map(parsedData);
    } else {
      // If it's not in the expected format, initialize a new cart
      cart = new Map();
      saveCart();
    }
  } catch (e) {
    console.error("Error parsing cart data:", e);
    cart = new Map();
    saveCart();
  }

  return cart;
};

const saveCart = () => {
  const array = Array.from(cart.entries());
  localStorage.setItem("cart", JSON.stringify(array));
};

const addToCart = (item) => {
  getCart();
  if (!cart.has(item.id)) {
    // Si no existe, lo agregamos con su cantidad
    cart.set(item.id, item);
  } else {
    // Si ya existe, sumamos la cantidad
    const exist = cart.get(item.id);

    exist.quantity += item.quantity;

    // Guardamos el producto actualizado
    cart.set(item.id, exist);
  }

  saveCart();
  rederCart();

  const modalOpen = isGiftsModalOpen();
  if (modalOpen) {
    $("body").addClass("gifts-modal-cart-open");
  } else {
    showCart();
  }
};

const removeToCart = (id) => {
  getCart();
  cart.delete(id);
  saveCart();
};

const addItem = (id) => {
  getCart();
  const item = cart.get(id);
  item.quantity++;
  cart.set(id, item);
  saveCart();
};

const removeItem = (id) => {
  getCart();
  const item = cart.get(id);
  item.quantity--;
  if (item.quantity <= 0) {
    removeToCart(id);
  }
  saveCart();
};

const buildCartItemHtml = (item, id) => {
  return `<div class="cart-item">
           <div class="cart-item-image">
    <img src="${item.img}" alt="${item.name}">
</div>
            <div class="cart-item-details">
                <div class="cart-item-name">${item.name}</div>
                <div class="cart-item-price">S/${item.price}</div>
                <div class="cart-item-quantity">
                    <div class="remove" data-id="${id}">-</div>
                    <div class="quantity-value">${item.quantity}</div>
                    <div class="add" data-id="${id}">+</div>
                    <button class="cart-item-remove" data-id="${id}">Eliminar</button>
                </div>
            </div>
        </div>`;
};

const updateCartBadge = () => {
  getCart();
  let count = 0;
  cart.forEach((item) => {
    count += item.quantity;
  });

  $(".gifts-modal__cart-badge")
    .text(count)
    .attr("data-count", count);

  const $modalCart = $("#gifts-modal-cart");
  if ($modalCart.length) {
    $modalCart.toggleClass("is-empty", count === 0);
  }
};

const rederCart = () => {
  getCart();

  if (!cart) {
    return;
  }

  let row = "";
  let total = 0;

  cart.forEach((item, id) => {
    total += item.quantity * item.price;
    row += buildCartItemHtml(item, id);
  });

  const totalText = `S/. ${total}`;

  $(".cart-items").html(row);
  $(".gifts-modal__cart-items").html(row);
  $(".total-price").text(totalText);
  $(".gifts-modal__total-price").text(totalText);
  updateCartBadge();
};