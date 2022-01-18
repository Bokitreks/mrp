
$(window).on('load' , function() {
  if( window.innerWidth < 992) {
		$('#logo').css("display" , "none");
	} else {
		$('#logo').css("display" , "block");
	}
});
$(document).click(function(){
	ukloniAlert();
})
function ukloniAlert(){
	$(".alert-box").css("display", "none");
}

window.addEventListener("load", function (){
	const loader = document.querySelector(".loader");
	$(loader).fadeOut("slow");
});

function scrollBack(){
    window.scrollTo({ 
        top: 0, // could be negative value
        left: 0, 
        behavior: 'smooth' 
      });
}

function promeniSliku(element){
	var slika = $(element).attr("src");
	$("#velika-slika").attr("src", slika);
}

function ubaciLoader(){
	if($("#ime").val() != "" && $("#email").val() != "" && $("#naslov").val() && $("#poruka").val()){
	$("#lod").css("visibility", "visible");
	}
}

function loaderDugme(){
	if($("#ime").val() != "" && $("#email").val() != "" && $("#usluga").val() != "" && $("#datetime").val() != "" && $("#lok").val() != "" && $("#lokd").val() != "" && $("#teret").val() != ""){
	$("#lod").css("visibility", "visible");
	}
}

function skrolujDesno(){
	var div = document.querySelector("#partneri-slider");
	var skrolPozicija = div.scrollLeft;
	skrolPozicija+= skrolPozicija+100;
	div.scrollTo({ 
        top: 0, // could be negative value
        left: skrolPozicija, 
        behavior: 'smooth' 
      });
}
function skrolujLevo(){
	var div = document.querySelector("#partneri-slider");
	var skrolPozicija = div.scrollLeft;
	skrolPozicija-= skrolPozicija+100;
	div.scrollTo({ 
        top: 0, // could be negative value
        left: skrolPozicija, 
        behavior: 'smooth' 
      });
}

$(window).resize(function(){
	const loader = document.querySelector(".loader");
	$(loader).fadeOut("slow");
})

$(window).scroll(function(){
	var $height = $(window).scrollTop();
	if($height > 1 && window.innerWidth > 992){
		$('.scroler').css("display" , "block");
	}else{
		$('.scroler').css("display" , "none");
	}
})

$(window).on('resize' , function() {
	if( window.innerWidth < 992) {
		  $('#logo').css("display" , "none");
	  } else {
		  $('#logo').css("display" , "block");
	  }
  });