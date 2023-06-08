/*  ---------------------------------------------------
    Template Name: Fashi
    Description: Fashi eCommerce HTML Template
    Author: Colorlib
    Author URI: https://colorlib.com/
    Version: 1.0
    Created: Colorlib
---------------------------------------------------------  */

'use strict';

(function ($) {

  
    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });


    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
        Hero Slider
    --------------------*/
    $(".hero-items").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        dots: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
    });

    /*------------------
        Product Slider
    --------------------*/
   $(".product-slider").owlCarousel({
        loop: true,
        margin: 25,
        nav: true,
        items: 4,
        dots: true,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 3,
            }
        }
    });

    /*------------------
       logo Carousel
    --------------------*/
    $(".logo-carousel").owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        items: 5,
        dots: false,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
        mouseDrag: false,
        autoplay: true,
        responsive: {
            0: {
                items: 3,
            },
            768: {
                items: 5,
            }
        }
    });

    /*-----------------------
       Product Single Slider
    -------------------------*/
    $(".ps-slider").owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        items: 3,
        dots: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
    });
    
    /*------------------
        CountDown
    --------------------*/
    // For demo preview
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    if(mm == 12) {
        mm = '01';
        yyyy = yyyy + 1;
    } else {
        mm = parseInt(mm) + 1;
        mm = String(mm).padStart(2, '0');
    }
    var timerdate = mm + '/' + dd + '/' + yyyy;
    // For demo preview end

    console.log(timerdate);
    

    // Use this for real timer date
    /* var timerdate = "2020/01/01"; */

	$("#countdown").countdown(timerdate, function(event) {
        $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>" + "<div class='cd-item'><span>%H</span> <p>Hrs</p> </div>" + "<div class='cd-item'><span>%M</span> <p>Mins</p> </div>" + "<div class='cd-item'><span>%S</span> <p>Secs</p> </div>"));
    });

        
    /*----------------------------------------------------
     Language Flag js 
    ----------------------------------------------------*/
    $(document).ready(function(e) {
    //no use
    try {
        var pages = $("#pages").msDropdown({on:{change:function(data, ui) {
            var val = data.value;
            if(val!="")
                window.location = val;
        }}}).data("dd");

        var pagename = document.location.pathname.toString();
        pagename = pagename.split("/");
        pages.setIndexByValue(pagename[pagename.length-1]);
        $("#ver").html(msBeautify.version.msDropdown);
    } catch(e) {
        // console.log(e);
    }
    $("#ver").html(msBeautify.version.msDropdown);

    //convert
    $(".language_drop").msDropdown({roundedBorder:false});
        $("#tech").data("dd");
    });
    /*-------------------
		Range Slider
	--------------------- */
	var rangeSlider = $(".price-range"),
		minamount = $("#minamount"),
		maxamount = $("#maxamount"),
		minPrice = rangeSlider.data('min'),
		maxPrice = rangeSlider.data('max');
	    rangeSlider.slider({
		range: true,
		min: minPrice,
        max: maxPrice,
		values: [minPrice, maxPrice],
		slide: function (event, ui) {
			minamount.val('€' + ui.values[0]);
			maxamount.val('€' + ui.values[1]);
		}
	});
	minamount.val('€' + rangeSlider.slider("values", 0));
    maxamount.val('€' + rangeSlider.slider("values", 1));

    /*-------------------
		Radio Btn
	--------------------- */
    $(".fw-size-choose .sc-item label, .pd-size-choose .sc-item label").on('click', function () {
        $(".fw-size-choose .sc-item label, .pd-size-choose .sc-item label").removeClass('active');
        $(this).addClass('active');
    });
    
    /*-------------------
		Nice Select
    --------------------- */
    $('.sorting, .p-show').niceSelect();

    /*------------------
		Single Product
	--------------------*/
	$('.product-thumbs-track .pt').on('click', function(){
		$('.product-thumbs-track .pt').removeClass('active');
		$(this).addClass('active');
		var imgurl = $(this).data('imgbigurl');
		var bigImg = $('.product-big-img').attr('src');
		if(imgurl != bigImg) {
			$('.product-big-img').attr({src: imgurl});
			$('.zoomImg').attr({src: imgurl});
		}
	});

    $('.product-pic-zoom').zoom();
    
    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
	proQty.prepend('<span class="dec qtybtn">-</span>');
	proQty.append('<span class="inc qtybtn">+</span>');
	proQty.on('click', '.qtybtn', function () {
		var $button = $(this);
		var oldValue = $button.parent().find('input').val();
		if ($button.hasClass('inc')) {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		$button.parent().find('input').val(newVal);
	});


  //Foto de perfil

  // Get the modal
var modal = document.getElementById("avatar-modal");

// Get the button that opens the modal
var btn = document.querySelector(".change-picture");

// Get the <span> element that closes the modal
var span = document.querySelector(".close");

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get all avatars
var avatars = document.querySelectorAll(".avatar");



// Change profile picture
avatars.forEach(function(avatar) {
  avatar.onclick = function() {
    var newSrc = this.src;
    document.querySelector(".profile-picture img").src = newSrc;
    document.querySelector(".profile-picture2 img").src = newSrc; // adicionado para atualizar a imagem com class = profile-picture2
    modal.style.display = "none";
  }
});



var filtro = "filtro1 filtro2 filtro3 filtro4 filtro5 filtro6 filtro7 filtro8 filtro9 filtro10 filtro11 filtro12 filtro13 filtro14".split(" "); // Define os filtros que deseja aplicar

var elementos = document.querySelectorAll('#demo2Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos.length; i++) {
  var elemento = elementos[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro => filtro && filtro.indexOf(filtro) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro2 = "filtro15 filtro16 filtro17 filtro18 filtro19 filtro20 filtro21 filtro22 filtro23 filtro24".split(" "); // Define os filtros que deseja aplicar

var elementos2 = document.querySelectorAll('#demo3Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos2.length; i++) {
  var elemento = elementos2[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro2 => filtro2 && filtro2.indexOf(filtro2) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro3 = "filtro25 filtro26 filtro27 filtro28 filtro29 filtro30 filtro31 filtro32 filtro33 filtro34 filtro35".split(" "); // Define os filtros que deseja aplicar

var elementos3 = document.querySelectorAll('#demo4Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos3.length; i++) {
  var elemento = elementos3[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro3 => filtro3 && filtro3.indexOf(filtro3) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro4 = "filtro36 filtro37 filtro38 filtro39 filtro40 filtro41 filtro42 filtro43 filtro44 filtro45".split(" "); // Define os filtros que deseja aplicar

var elementos4 = document.querySelectorAll('#demo5Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos4.length; i++) {
  var elemento = elementos4[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro4 => filtro4 && filtro4.indexOf(filtro4) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro5 = "filtro46 filtro47 filtro48 filtro49 filtro50 filtro51 filtro52 filtro53 filtro54 filtro55 filtro56".split(" "); // Define os filtros que deseja aplicar

var elementos5 = document.querySelectorAll('#demo6Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos5.length; i++) {
  var elemento = elementos5[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro5 => filtro5 && filtro5.indexOf(filtro5) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro6 = "filtro57 filtro58 filtro59 filtro60 filtro61 filtro62 filtro63 filtro64 filtro65 filtro66".split(" "); // Define os filtros que deseja aplicar

var elementos6 = document.querySelectorAll('#demo7Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos6.length; i++) {
  var elemento = elementos6[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro6 => filtro6 && filtro6.indexOf(filtro6) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro7 = "filtro67 filtro68 filtro69 filtro70 filtro71 filtro72 filtro73 filtro74 filtro75 filtro76 filtro77 filtro78".split(" "); // Define os filtros que deseja aplicar

var elementos7 = document.querySelectorAll('#demo8Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos7.length; i++) {
  var elemento = elementos7[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro7 => filtro7 && filtro7.indexOf(filtro7) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro8 = "filtro79 filtro80 filtro81 filtro82 filtro83 filtro84 filtro85 filtro86 filtro87".split(" "); // Define os filtros que deseja aplicar

var elementos8 = document.querySelectorAll('#demo9Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos8.length; i++) {
  var elemento = elementos8[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro8 => filtro8 && filtro8.indexOf(filtro8) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro9 = "filtro88 filtro89 filtro90 filtro91 filtro92 filtro93 filtro94 filtro95 filtro96 filtro97 filtro98 filtro99 filtro100 filtro101 filtro102 filtro103 filtro104".split(" "); // Define os filtros que deseja aplicar

var elementos9 = document.querySelectorAll('#demo11Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos9.length; i++) {
  var elemento = elementos9[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro9 => filtro9 && filtro9.indexOf(filtro9) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro10 = "filtro105 filtro106 filtro107 filtro108 filtro109 filtro110 filtro111 filtro112 filtro113 filtro114 filtro115 filtro116 filtro117 filtro118 filtro119".split(" "); // Define os filtros que deseja aplicar

var elementos10 = document.querySelectorAll('#demo12Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos10.length; i++) {
  var elemento = elementos10[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro10 => filtro10 && filtro10.indexOf(filtro10) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro11 = "filtro120 filtro121 filtro122 filtro123 filtro124 filtro125 filtro126 filtro127 filtro128 filtro129 filtro130".split(" "); // Define os filtros que deseja aplicar

var elementos11 = document.querySelectorAll('#demo13Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos11.length; i++) {
  var elemento = elementos11[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro11 => filtro11 && filtro11.indexOf(filtro11) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro12 = "filtro131 filtro132 filtro133 filtro134 filtro135 filtro136".split(" "); // Define os filtros que deseja aplicar

var elementos12 = document.querySelectorAll('#demo14Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos12.length; i++) {
  var elemento = elementos12[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro12 => filtro12 && filtro12.indexOf(filtro12) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro13 = "filtro137 filtro138 filtro139 filtro140 filtro141 filtro142 filtro143 filtro144 filtro145 filtro146 filtro147".split(" "); // Define os filtros que deseja aplicar

var elementos13 = document.querySelectorAll('#demo16Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos13.length; i++) {
  var elemento = elementos13[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro13 => filtro13 && filtro13.indexOf(filtro13) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro14 = "filtro148 filtro149 filtro150 filtro151 filtro152 filtro153 filtro154 filtro155 filtro156 filtro157".split(" "); // Define os filtros que deseja aplicar

var elementos14 = document.querySelectorAll('#demo17Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos14.length; i++) {
  var elemento = elementos14[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro14 => filtro14 && filtro14.indexOf(filtro14) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro15 = "filtro158 filtro159 filtro160 filtro161 filtro162 filtro163 filtro164 filtro165 filtro166 filtro167 filtro168 filtro169".split(" "); // Define os filtros que deseja aplicar

var elementos15 = document.querySelectorAll('#demo18Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos15.length; i++) {
  var elemento = elementos15[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro15 => filtro15 && filtro15.indexOf(filtro15) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro16 = "filtro170 filtro171 filtro172 filtro173 filtro174 filtro175 filtro176 filtro177 filtro178".split(" "); // Define os filtros que deseja aplicar

var elementos16 = document.querySelectorAll('#demo19Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos16.length; i++) {
  var elemento = elementos16[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro16 => filtro16 && filtro16.indexOf(filtro16) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro17 = "filtro1 filtro2 filtro3 filtro4 filtro5 filtro6 filtro7 filtro8 filtro9 filtro10 filtro11 filtro12 filtro13 filtro14 filtro15 filtro16 filtro17 filtro18 filtro19 filtro20 filtro21 filtro22 filtro23 filtro24 filtro25 filtro26 filtro27 filtro28 filtro29 filtro30 filtro31 filtro32 filtro33 filtro34 filtro35 filtro36 filtro37 filtro38 filtro39 filtro40 filtro41 filtro42 filtro43 filtro44 filtro45".split(" "); // Define os filtros que deseja aplicar

var elementos17 = document.querySelectorAll('#demoAcc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos17.length; i++) {
  var elemento = elementos17[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro17 => filtro17 && filtro17.indexOf(filtro17) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro18 = "filtro46 filtro47 filtro48 filtro49 filtro50 filtro51 filtro52 filtro53 filtro54 filtro55 filtro56 filtro57 filtro58 filtro59 filtro60 filtro61 filtro62 filtro63 filtro64 filtro65 filtro66 filtro67 filtro68 filtro69 filtro70 filtro71 filtro72 filtro73 filtro74 filtro75 filtro76 filtro77 filtro78 filtro79 filtro80 filtro81 filtro82 filtro83 filtro84 filtro85 filtro86 filtro87".split(" "); // Define os filtros que deseja aplicar

var elementos18 = document.querySelectorAll('#demo1Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos18.length; i++) {
  var elemento = elementos18[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro18 => filtro18 && filtro18.indexOf(filtro18) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro19 = "filtro88 filtro89 filtro90 filtro91 filtro92 filtro93 filtro94 filtro95 filtro96 filtro97 filtro98 filtro99 filtro100 filtro101 filtro102 filtro103 filtro104 filtro105 filtro106 filtro107 filtro108 filtro109 filtro110 filtro111 filtro112 filtro113 filtro114 filtro115 filtro116 filtro117 filtro118 filtro119 filtro120 filtro121 filtro122 filtro123 filtro124 filtro125 filtro126 filtro127 filtro128 filtro129 filtro130 filtro131 filtro132 filtro133 filtro134 filtro135 filtro136".split(" "); // Define os filtros que deseja aplicar

var elementos19 = document.querySelectorAll('#demo10Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos19.length; i++) {
  var elemento = elementos19[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro19 => filtro19 && filtro19.indexOf(filtro19) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}

/*--------------------------*/

var filtro20 = "filtro137 filtro138 filtro139 filtro140 filtro141 filtro142 filtro143 filtro144 filtro145 filtro146 filtro147 filtro148 filtro149 filtro150 filtro151 filtro152 filtro153 filtro154 filtro155 filtro156 filtro157 filtro158 filtro159 filtro160 filtro161 filtro162 filtro163 filtro164 filtro165 filtro166 filtro167 filtro168 filtro169 filtro170 filtro171 filtro172 filtro173 filtro174 filtro175 filtro176 filtro177 filtro178".split(" "); // Define os filtros que deseja aplicar

var elementos20 = document.querySelectorAll('#demo15Acc a[data-filtro]'); // Seleciona todos os elementos com o atributo "data-filtro"

for (var i = 0; i < elementos20.length; i++) {
  var elemento = elementos20[i];
  var filtroElemento = elemento.getAttribute('data-filtro').split(" "); // Obtém o valor do atributo "data-filtro" do elemento e divide em um array de filtros

  if (filtroElemento.every(filtro20 => filtro20 && filtro20.indexOf(filtro20) !== -1)) {
    elemento.style.display = "block"; // Mostra o elemento se o filtro corresponder
  } else {
    elemento.style.display = "none"; // Oculta o elemento caso contrário
  }
}


})(jQuery);

/*Pesquisar produtos

function searchProducts() {

  var input = document.getElementById("search").value.toUpperCase();

  var products = document.getElementsByClassName("product-item");
  
  for (var i = 0; i < products.length; i++) {
    var productName = products[i].getElementsByTagName("h5")[0];

    if (productName.innerHTML.toUpperCase().indexOf(input) > -1) {
      products[i].style.display = "";
    } else {
      products[i].style.display = "none";
    }
  }
}*/



function searchProducts() {
  var input = document.getElementById("search").value.toUpperCase();
  var products = document.querySelectorAll(".product-item");

  // remove os produtos vazios
  for (var i = 0; i < products.length; i++) {
    if (products[i].innerHTML.trim() === "") {
      products[i].parentNode.removeChild(products[i]);
    }
  }

  // filtra os produtos
  for (var i = 0; i < products.length; i++) {
    var productName = products[i].querySelector("h5");

    if (productName.innerHTML.toUpperCase().indexOf(input) > -1) {
      products[i].style.display = "";
    } else {
      products[i].style.display = "none";
    }
  }
}

document.addEventListener("DOMContentLoaded", function() {
  var search = document.getElementById("search");

  search.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      searchProducts();
    }
  });
});


function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc2() {
    var x = document.getElementById("demo1Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc3() {
    var x = document.getElementById("demo2Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc4() {
    var x = document.getElementById("demo3Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc5() {
    var x = document.getElementById("demo4Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc6() {
    var x = document.getElementById("demo5Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc7() {
    var x = document.getElementById("demo6Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc8() {
    var x = document.getElementById("demo7Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc9() {
    var x = document.getElementById("demo8Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc10() {
    var x = document.getElementById("demo9Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc11() {
    var x = document.getElementById("demo10Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc12() {
    var x = document.getElementById("demo11Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc13() {
    var x = document.getElementById("demo12Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc14() {
    var x = document.getElementById("demo13Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc15() {
    var x = document.getElementById("demo14Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc16() {
    var x = document.getElementById("demo15Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc17() {
    var x = document.getElementById("demo16Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc18() {
    var x = document.getElementById("demo17Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc19() {
    var x = document.getElementById("demo18Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc20() {
    var x = document.getElementById("demo19Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc21() {
    var x = document.getElementById("demo20Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc22() {
    var x = document.getElementById("demo21Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc23() {
    var x = document.getElementById("demo22Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc24() {
    var x = document.getElementById("demo23Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc25() {
    var x = document.getElementById("demo24Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc26() {
    var x = document.getElementById("demo25Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc27() {
    var x = document.getElementById("demo26Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc28() {
    var x = document.getElementById("demo27Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  function myAccFunc29() {
    var x = document.getElementById("demo28Acc");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }


  

  




  






  
  
  
  
  
  