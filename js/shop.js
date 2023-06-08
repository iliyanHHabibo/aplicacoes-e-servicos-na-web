const links = document.querySelectorAll('[data-filtro]');

links.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();

    const filtro = e.target.getAttribute('data-filtro').split(' ');

    const divs = document.querySelectorAll('.filtro');

    divs.forEach(div => {
      const divFiltros = div.getAttribute('data-filtro').split(' ');
      if (filtro.some(filtro => divFiltros.includes(filtro))) {
        div.style.display = 'block';
      } else {
        div.style.display = 'none';
      }
    });
  });
});

/*Pesquisar produtos*/

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
  }
  

/*Pedido*/

$(document).ready(function(){

	$('.app').css({"visibility":"hidden"});
	$(".app").hide();
	
	if (localStorage.getItem('shoplistlocal')) {
    	$('.list').html(localStorage.getItem('shoplistlocal'));
		
		if($('.count').text != 0){
			$('.count').css({"display":"block"});
			$('.count').text(localStorage.getItem('shoplistlocal').length);
		}
	}

	if (localStorage.getItem('pedido')) {
		$('.pedidoList').html(localStorage.getItem('pedido'));
	}

	if (localStorage.getItem('quest')) {
		$('.quest').html(localStorage.getItem('quest'));
	}


	if (localStorage.getItem('npedidos')) {
    	$('.count').text(localStorage.getItem('npedidos'));
		$('.count').css({"display":"block"});
	}

	if (localStorage.getItem('preco')) {
		$('.precoP').text(localStorage.getItem('preco') +'€');
		$('.precototal').text(localStorage.getItem('preco') +'€');
		/*if(localStorage.getItem('preco') == 0 && document.querySelector("#btnPagamento")){
			document.querySelector("#btnPagamento").disabled = true;
		}*/
	}
	
    $(".btnpediu").on("click",function(e){

		//$('.openpopup').prop('enabled', true);

		if (!localStorage.getItem('preco')) {
			localStorage.setItem('preco',0);
		}

		
		let listaAlt = [];
		/*for(let i = 0; i < (localStorage.getItem('shoplistlocal').length) ; i++){
			console.log(i)
			listaAlt.push('oi');
		}*/
		console.log($('.list').length)
		console.log(listaAlt)
		var oi = Math.floor(Math.random() * 1000)
        var io = oi.toString();
		$('.pedidoList').append('<label><input type="checkbox" value= ' + parseInt($(this).attr('value')) + ' checked="true"/>'+ $(this).attr('alt') +'</label>')
		$('.count').css({"display":"block"});
		/*$('.list').append('<li    class="btnpediup" alt="'+ $(this).attr('alt')+ '" value= '+ parseInt($(this).attr('value')) + '>'+$(this).attr('alt')+parseInt($(this).attr('value'))+'€'+'\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0'+'x'+'<hr>'+'</li>');*/
    $('.list').append('<tr>'+'<td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>'+'<td class="si-text">'+'<div class="product-selected">'+'<p>$60.00 x 1</p>'+'<h6>Kabino Bedside Table</h6>'+'</div>'+'</td>'+'<td class="si-close">'+'<i class="ti-close"></i>'+'</td>'+'</tr>');                                                                                          
		var shoplistlocal = $('.list').html();
		var itemlength = $(".app-body li").length;
		var pagarI = localStorage.getItem('preco');
		var pagar = parseInt(pagarI) + parseInt($(this).attr('value'));
		var pedido = $('.pedidoList').html();

    $('.si-close').click(function() {
      $(this).closest('tr').remove();
    });
    
		/*if(pagar>0){
			document.querySelector("#btnPagamento").disabled = false;
			
		}*/

		localStorage.setItem('pedido',pedido);
		localStorage.setItem('npedidos',itemlength);
		localStorage.setItem('preco',pagar);
		localStorage.setItem('shoplistlocal', shoplistlocal);
		$('.precototal').text(pagar +'€');
		return false;
    });

	  			
    $(".list").on("click", ".btnpediup", function () {

      //atualiza o pedido
      $(this).attr('id', 'oi');
      elemento = document.getElementById("oi");
      index = Array.from($(".list").children()).indexOf(elemento);
      $('.quest').children().eq(index).remove();
      $('.pedidoList').children().eq(index).remove();
      quest = $('.quest').html();
      pedido = $('.pedidoList').html();
      localStorage.setItem('pedido', pedido);
      localStorage.setItem('quest', quest);
  
        $(this).remove();
          var shoplistlocal = $('.list').html();
      localStorage.setItem('shoplistlocal', shoplistlocal);
        
      var itemlength = $(".app-body li").length;
      if(itemlength != 0){
        var pagar = parseInt(localStorage.getItem('preco'));
        var pagarI = parseInt($(this).attr('value'));
        localStorage.setItem('preco', pagar-pagarI);
        $('.precototal').text(pagar-pagarI +'€');
        $('.count').text(itemlength);
        localStorage.setItem('npedidos', itemlength);
      }else{
        //$('.openpopup').prop('disabled', true);
        $('.precototal').text(0 +'€');
           window.localStorage.clear();
        localStorage.setItem('preco', 0);
        $('.count').css({"display":"none"});
      }
  
      if(parseInt(localStorage.getItem('preco'))>0){
        /*document.querySelector("#btnPagamento").disabled = false;*/
        document.querySelector("#opcoespagamento2").disabled = false;
      }
      else{
        /*document.querySelector("#btnPagamento").disabled = true;*/
        document.querySelector("#opcoespagamento2").disabled = true;
      }
  
      return false;
      });
    
  
    $('.closewindow').click(function(){
      $('.app').fadeOut(500);
    });	
  
    $('#tray').click(function(){
      $('.app').css({"visibility":"visible"});
      $('.app').fadeIn(500);
      if (!localStorage.getItem('preco')) {
        localStorage.setItem('preco',0);
      }
      $('.precototal').text(localStorage.getItem('preco') +'€');
      if (!localStorage.getItem('npedidos')) {
        //$('.openpopup').prop('disabled', true);
      }
      else{
        //$('.openpopup').prop('enabled', true);
      }
    });	
      
      
    $('.btnpediu').click(function() {
      var itemlength = $(".app-body li").length;
      $('.count').text(itemlength);	
    });
      
      
    $(".openpopup2").click(function() {
      $('.precototal').text(0 +'€');
         window.localStorage.clear();
      localStorage.setItem('preco', 0);
      $('.quest').children().remove();
      $('.pedidoList').children().remove();
      $('.list').children().remove();
      $('.count').hide();
      /*document.querySelector("#btnPagamento").disabled = true;*/
      document.querySelector("#opcoespagamento2").disabled = true;
        return false;
    });	

 
});
