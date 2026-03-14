let cart = new Map();


const generateRandom = () => {
  const ruta = $("#root").val();
  var numPosibilidades = 99999999;
  var random = Math.random() * numPosibilidades;
  random = Math.round(random);
  ao = parseInt(1) + random;

  $.post(
    ruta + "sofiaygabriel/g_ao",
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


  getCart();
  generateRandom();

  // 🔹 Función mejorada para eliminar emojis y símbolos especiales (♀, ♂, etc.)
  function limpiarEmojis(texto) {
    return texto
      .replace(
        /([\u2700-\u27BF]|[\uE000-\uF8FF]|\u24C2|[\u2600-\u26FF]|[\uD83C-\uDBFF][\uDC00-\uDFFF]|\u200D|\uFE0F)/g,
        ''
      )
      .trim();
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
        url: `${$("#root").val()}sofiaygabriel/guardarMensajeMonto`,
        method: 'POST',
        data: data,
        success: function (response) {
          window.location.href = `${$("#root").val()}sofiaygabriel/obsequio/${formData[0].value}`;
          //form.reset();
          //$(".form").hide();
        },
        error: function (err) {
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




  $(document).on("click", ".form-close", async function () {
    $(".form").fadeOut(300);
  })

  $(document).on("click", ".checkout-button", async function (e) {
    getCart();

    if (cart.size === 0) {
      closeCart();

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

    $(".form").fadeIn(300);
    closeCart();



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
    const progreso = Number($btn.data("progeso")); // ojo, en tu HTML está como "data-progeso"

    // 🔹 Calcular los cupos restantes
    const restantes = cupos - progreso;


    const price = Number(
      $btn.closest(".product-info").find(".product-price").text().trim()
    );
    const name = $btn.closest(".product-info").find(".product-title").text().trim();
    const img = $btn.closest(".product-card").find(".product-image img").attr("src");

    const item = {
      id: id,
      price: price,
      name: name,
      img: img,
      quantity: 1,
    };

    // 🔹 Obtener carrito como Map
    // getCart();
    // const existingItem = cart.get(id);
    // const currentQty = existingItem ? existingItem.quantity : 0;

    // // 🔸 Validar límite basado en cupos restantes
    // if (currentQty >= restantes) {
    //   Swal.fire({
    //     toast: true,
    //     position: "top-end",
    //     icon: "warning",
    //     title: `Solo quedan ${restantes} cupos disponibles.`,
    //     showConfirmButton: false,
    //     timer: 2000,
    //     timerProgressBar: true,
    //     background: "#ffc107",
    //     color: "#000",
    //     iconColor: "#000",
    //   });
    //   return; // 🚫 No agregar más
    // }

    // ✅ Si aún hay cupos disponibles
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
  });



  $(".category-button").click(function () {
    const categoryId = $(this).data("id");
    getGifts(categoryId);
    $(".category-button").removeClass("primary");
    $(this).addClass("primary");
  });

  getGifts();

  $("#close-cart").click(function () {
    closeCart();
  });

  $(".show-cart").click(function () {
    rederCart();
    showCart();
  });

  $(document).on("click", ".button-free-gift", function () {


    const id = $(this).data("id");
    removeToCart(id)
    const name = $(this)
      .closest(".product-info")
      .find(".product-title")
      .text()
      .trim();

    const img = $(this)
      .closest(".product-card")
      .find(".product-image img")
      .attr("src");

    const item = {
      id: id,
      name: name,
      img: img,
      quantity: 1,
    };

    Swal.fire({
      title: 'Ingresa el monto',
      input: 'number', // Tipo de entrada para número
      inputAttributes: {
        min: 0, // Mínimo permitido
        step: 0.01, // Paso de 0.01
      },
      showCancelButton: true,
      confirmButtonText: 'Aceptar',
      cancelButtonText: 'Cancelar',
      showLoaderOnConfirm: true,
      customClass: {
        popup: 'font-Forum', // Añadido para personalizar el popup
        title: 'font-bellisia', // Añadido para personalizar el título
        input: 'font-Forum', // Añadido para personalizar el campo de entrada
        confirmButton: 'custom-button', // Añadido para personalizar el botón de confirmar
        cancelButton: 'custom-cancel', // Añadido para personalizar el botón de cancelar
      },
      background: '#f7f7f7', // Fondo del popup
      color: '#333', // Color del texto
      confirmButtonColor: '#c58888', // Color del botón de confirmación
      cancelButtonColor: '#797979', // Color del botón de cancelar
      preConfirm: (amount) => {
        if (!amount || amount <= 0) {
          Swal.showValidationMessage('Por favor ingresa un monto válido');
        } else {
          return amount; // Retorna el monto ingresado
        }
      }
    }).then((result) => {
      if (result.isConfirmed) {
        const amount = result.value;
        Swal.fire({
          title: `Monto ingresado: S/${amount}`,
          icon: 'success',
          customClass: {
            popup: 'font-forum',
            title: 'font-forum',
            confirmButton: 'custom-button',
          },
          confirmButtonColor: '#c58888',
          background: '#fff', // Fondo del popup
        });
        console.log('Monto ingresado:', amount); // Aquí puedes usar el monto como lo necesites

        item.price = amount;
        addToCart(item)


      } else {
        console.log('Operación cancelada');
      }
    });
  });

});

const getGifts = async (categoryId = 0) => {
  try {
    const coupleId = 20; // ID actualizado para 

    const payload = {
      parejaId: coupleId,
      categoriaId: categoryId,
    };
    const response = await $.ajax({
      type: "POST",
      url: `${$("#root").val()}obsequio/obtenerObsequiosPareja`,
      data: payload,
      dataType: "json",
    });

    if (categoryId != 5) {
      renderGifts(response);
      //return
    } else {
      renderFree(response)
    }


  } catch (error) {
    console.error(error);
  }
};

const renderGifts = (items) => {
  const productGrid = $(".products");
  productGrid.html("");
  let grid = "";


  items.forEach((item) => {

    if (item.id != 100) {

      const progress = (item.progreso / item.cupos) * 100;

      //console.log(item.categoria_id)

      if (item.categoria_id == 5) {
        // categoria 5 = free gift -> button-free-gift
        grid += `
        <div class="product-card" data-aos="fade-up">
          <div class="product-image">
            <img src="${item.imagenObsequio}" alt="${item.imagenObsequio}">
          </div>
          <div class="product-info">
            <h3 class="product-title">${item.nombreObsequio}</h3>
            <p style="color: transparent;">S/. <span class="product-price" style="color: transparent;">${item.montoObsequio}</span></p>
            <div class="product-progress">
              <div class="progress-bar" style="width: ${progress}%;"></div>
            </div>
            <button data-id="${item.id}" class="button-free-gift">OBSEQUIAR <i class="fa-solid fa-gift"></i></button>
          </div>
        </div>`;
      } else {
        // otras categorias = compra normal -> button-gift
        grid += `
        <div class="product-card" data-aos="fade-up">
          <div class="product-image">
            <img src="${item.imagenObsequio}" alt="${item.imagenObsequio}">
          </div>
          <div class="product-info">
            <h3 class="product-title">${item.nombreObsequio}</h3>
            <p>S/. <span class="product-price">${item.montoObsequio}</span></p>
            <div class="product-progress">
              <div class="progress-bar" style="width: ${progress}%;"></div>
            </div>
            <button data-id="${item.id}" data-cupos="${item.cupos}" data-progeso="${item.progreso}" class="button-gift">OBSEQUIAR <i class="fa-solid fa-gift"></i></button>
          </div>
        </div>`;
      }


    }


  });
  productGrid.append(grid);
};

const renderFree = (items) => {
  const productGrid = $(".products");
  productGrid.html("");
  let grid = "";

  items.forEach((item) => {
    const progress = item.progreso / item.cupos;

    grid += `
     <div class="product-card" data-aos="fade-up">
                 <div class="product-image">
                     <img src="${item.imagenObsequio}" alt="${item.imagenObsequio}">
                 </div>
                 <div class="product-info">
                     <h3 class="product-title">${item.nombreObsequio}</h3>
                     <p style="color: transparent;">S/. <span class="product-price"  style="color: transparent;">${item.montoObsequio}</span> </p>    
                      <div class="product-progress">
                     <div class="progress-bar" style="width: ${progress}%;"></div>
                 </div>

                  <button data-id="${item.id}" class="button-free-gift">OBSEQUIAR <i class="fa-solid fa-gift"></i></button>

                 </div>
             </div>`;
  });
  productGrid.append(grid);
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
  showCart();
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

const rederCart = () => {
  getCart();

  if (!cart) {
    return;
  }

  const list = $(".cart-items");
  list.html("");




  let row = "";
  let total = 0;

  cart.forEach((item, id) => {
    total += item.quantity * item.price;
    row += `<div class="cart-item">
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
  });

  $(".total-price").text(`S/. ${total}`);

  list.append(row);
};