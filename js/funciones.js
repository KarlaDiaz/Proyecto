$(document).ready(function(){
	//Slider
	$("#slider").responsiveSlides({
        maxwidth: 700,
        speed: 700
    });

    // Menu slider
    if (matchMedia('only screen and (max-width: 480px)').matches) {
		// crear un elemento que muestr/oculte el menu
		$("#link_menu").on("click",(function(e){
			e.preventDefault();
			$("nav ul").slideToggle();
		}));
	}
});

function producto()
{
	precio = document.getElementById('precio').value;
	pz = document.getElementById('pz').value;
	
	if(pz != 0)
	{
		var res = precio * pz;
		//alert("Resultado es: "+res);
		document.getElementById('subtotal').value = res;
	}
}

