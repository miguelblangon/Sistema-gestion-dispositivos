$(function(){
    $( "[name=historico]" ).on( "click", function() {
        let id= $(this).val();
        $.get('historico/crear-equipo/'+id ,function(data){
            $('#mostrar').modal('show');
            modal('historico','POST','Incidencia',data,'Crear Incidencia');
        });
    });
    $( "[name=crearDesdeHistorico]" ).on( "click", function() {
        $.get('historico/create',function(data){
            $('#mostrar').modal('show');
            modal('historico','POST','Incidencia',data,'Crear Incidencia');
        });
    });
    $( "[name=editarHistorico]" ).on( "click", function() {
        let id= $(this).val();
        $.get('historico/'+id+'/edit' ,function(data){
            $('#mostrar').modal('show');
            modal('historico/'+id,'POST','Actualizar Incidencia',data,'Actualizar Incidencia');
        });
    });
})

