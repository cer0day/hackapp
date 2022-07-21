$(document).ready(function() {
	$.ajax({
        type: "POST",
        url: "getFases.php",
        success: function(response)
            {
                $('#fase').html(response).fadeIn();
            }
     });
    get_herramientas();
    $('.b_cancelar').click(function() {
    console.log("cancelando");
        $("#m_view").addClass("ocultar");
        $("#m_ayuda").addClass("ocultar");

});
    
});

var get_fases = ()=>{
    console.log("fases");
    //document.getElementById("herramientas").value="";
    //document.getElementById("search").value="";
    get_herramientas();
    get_comandos();
        
}
var get_comandos = ()=>{
       
    var idFase = document.getElementById("fase").value;
    var idHerramienta = document.getElementById("herramientas").value;
    var search = document.getElementById("search").value;

    var datos= {'idFase':idFase, 'idHerramienta':idHerramienta, 'search':search};
           
        $.ajax({
            type: "POST",
            url: "getComandos.php",
            data: datos,
            success: function(response)
                {                      
                    $("#c_comandos").html(response).fadeIn();
               }
         });
        
 }
 
var get_herramientas = ()=>{
    
    console.log("herramientas");
    var idFase = document.getElementById("fase").value;

    datos = 'idFase='+idFase;
    console.log("fase="+idFase);      
        $.ajax({
            type: "POST",
            url: "getHerramientas.php",
            data: datos,
            success: function(response)
                {                     
                    $("#herramientas").html(response).fadeIn();
               }
         });
        
 }
 var limpiar = ()=>{
    console.log("limpiar");
    document.getElementById("herramientas").value="";
    document.getElementById("search").value="";

    //get_herramientas();
    //get_comandos();
        
}
var view_comando = (datos)=>{
    $("#m_view").removeClass("ocultar");
    document.getElementById("comando").innerHTML = datos[2];
    document.getElementById("descripcion").innerHTML = datos[3];
    document.getElementById("detalles").innerHTML = datos[4];
    console.log(datos[2]);
            
}
var view_ayuda = (datosH)=>{
    console.log(datosH);
    $("#m_ayuda").removeClass("ocultar");
    document.getElementById("ayuda").innerHTML = "<pre><code>"+datosH+"</code></pre>";
            
}



 
