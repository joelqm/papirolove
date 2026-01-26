let cart = new Map();


const generateRandom = () => {
    const ruta = $("#root").val();
    var numPosibilidades = 99999999;
    var random = Math.random() * numPosibilidades;
    random = Math.round(random);
    ao = parseInt(1) + random;

    $.post(
      ruta + "camilaypablo/g_ao",
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
    submitHandler: function (form) {
        // Evitar el envío tradicional
        event.preventDefault(); 

        // Convertimos el Map a un objeto y luego obtenemos solo los valores
const cartObj = Object.fromEntries(getCart());
const cartValues = Object.values(cartObj); // Extraemos solo los valores
const cartJson = JSON.stringify(cartValues); // Convertimos los valores del carrito a JSON

// Recolectamos los datos del formulario como array de objetos
const formData = $(form).serializeArray();
console.log(formData);

const data = {}


formData.map((item)=>{
  data[item.name] = item.value 
})
data.cart = cartJson

     

        $.ajax({
            url: `${$("#root").val()}richiymili/guardarMensajeMonto`, // Reemplaza con tu URL
            method: 'POST',
            data: data,
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: '¡Dedicatoria enviada!',
                    text: 'Gracias por tu mensaje.',
                    timer: 2000,
                    showConfirmButton: false
                });

                setTimeout(()=>{
                  window.location.href = `${$("#root").val()}richiymili/obsequio/${formData[0].value}`
                },1000)

                // Opcional: resetear el formulario
                form.reset();
                $(".form").hide();
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
    const id = Number($(this).data("id"));

    const price = Number(
      $(this).closest(".product-info").find(".product-price").text().trim()
    );

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
      price: price,
      name: name,
      img: img,
      quantity: 1,
    };

    addToCart(item);
    Swal.fire({
      toast: true,  // Habilitar modo toast
      position: 'top-end',  // Posición en la pantalla (puede ser 'top-start', 'top-end', 'bottom-start', 'bottom-end')
      icon: 'success',  // Tipo de mensaje: 'success', 'error', 'warning', 'info'
      title: '¡Añadido a tu carrito!',  // Título del mensaje
      showConfirmButton: false,  // No mostrar el botón de confirmación
      timer: 1500,  // Duración del mensaje (en milisegundos)
      timerProgressBar: true,  // Mostrar barra de progreso
      background: '#28a745',  // Fondo del toast
      color: '#fff',  // Color del texto
      iconColor: '#fff',  // Color del ícono
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
            title: 'font-dulcinea', // Añadido para personalizar el título
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
    const coupleId = 15;

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

    if(categoryId!=5){
      renderGifts(response);
      return
    }

    renderFree(response)

    
  } catch (error) {
    console.error(error);
  }
};

const renderGifts = (items) => {
  const productGrid = $(".products");
  productGrid.html("");
  let grid = "";


  items.forEach((item) => {

    if(item.id != 100){
      const progress = item.progreso / item.cupos;

      grid += `
       <div class="product-card" data-aos="fade-up">
                   <div class="product-image">
                       <img src="${item.imagenObsequio}" alt="${item.imagenObsequio}">
                   </div>
                   <div class="product-info">
                       <h3 class="product-title">${item.nombreObsequio}</h3>
                       <p >S/. <span class="product-price" >${item.montoObsequio}</span> </p>
                        <div class="product-progress">
                       <div class="progress-bar" style="width: ${progress}%;"></div>
                   </div>
  
                    <button data-id="${item.id}" class="button-gift">OBSEQUIAR <i class="fa-solid fa-gift"></i></button>
  
                   </div>
               </div>`;
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
    let emptyCart= new Map();
    saveCart(emptyCart)
    return new Map();
    
  }

  const array = JSON.parse(data);
  cart = new Map(array);
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
