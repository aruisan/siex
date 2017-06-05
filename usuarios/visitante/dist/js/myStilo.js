$(document).ready(function(){
	cargarProcesos();
});


//------------------------function botonesdel menu------------
$('#procesos').click(function(event){event.preventDefault(); cargarProcesos(); });
$('#usuarios').click(function(event){event.preventDefault(); cargarusuarios(); });
$('#createProceso').click(function(){ cargarCreateProcesos(); });



    ////////function de cargar section////////

    function cargarProcesos()
    {
        var url = "layouts/procesos/index.php";

        $.post(url, function(data){
        $("#page-wrapper").html(data);
        });
    
    }


    function cargarCreateProcesos()
    {
	    var url = "layouts/procesos/create.php";
	    $.post(url, function(data){
	        $("#page-wrapper").html(data);
	        });
	}

 