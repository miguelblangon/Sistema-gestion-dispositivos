$(function(){
    //Parte de los equipos
    $( "#equipos" ).on( "click", function() {
        $.get('/equipos/create',function(data){
            $('#mostrar').modal('show');
            modal("equipos",'POST','Crear Equipo',data,'Guardar Equipo');
        });
    });
    $( "[name=editarEquipo]" ).on( "click", function() {
        let id= $(this).val();
        $.get('equipos/'+id+'/edit' ,function(data){
            $('#mostrar').modal('show');
            modal('equipos/'+id,'POST','Actualizar Equipo',data,'Actualizar Equipo');
        });
    });
})
