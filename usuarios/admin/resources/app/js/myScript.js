$(document).ready(function(){
 
});

/*eventos*/
$('.nuevo').click(function(){
	verFormularioNuevo();
});

$('.cerrarFormularioNuevo').click(function(){
	ocultarFormularioNuevo();
});

/*$("#enviar").click(function(event){
	event.preventDefault();
	enviarFormNuevo();
	ocultarFormularioNuevo();
	tablaIngreso();
});*/




function verFormularioNuevo()
{
	 $("#formularioIngreso").show('slow');
	 $(".nuevo").addClass('ocultar');
	 $(".cerrarFormularioNuevo").removeClass('ocultar');
}

function ocultarFormularioNuevo()
{
	 $("#formularioIngreso").hide('slow');
	 $(".cerrarFormularioNuevo").addClass('ocultar');
	 $(".nuevo").removeClass('ocultar');
}

function enviarFormNuevo()
{	
		var form = $('#formIngresar').serialize();
		var url = 'php/guardar.php';
		$.ajax(
		{
	    	type: "POST",
	        url: url,
	       	data: form, 
	        success: function(data)
	        {

	        	console.log(data);
	  		}
		});
	
}


