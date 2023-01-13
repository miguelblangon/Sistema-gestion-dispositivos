$(function(){
    //Parte de los Usuarios/Clientes
    $( "#usuarios" ).on( "click", function() {
        $.get('/usuarios/create',function(data){
            $('#mostrar').modal('show');
            modal("usuarios",'POST','Crear Cliente',data,'Guardar Cliente');
        });
    });
    $( "[name=editarUsuario]" ).on( "click", function() {
        let id= $(this).val();
        $.get('usuarios/'+id+'/edit' ,function(data){
            $('#mostrar').modal('show');
            modal('usuarios/'+id,'POST','Actualizar Cliente',data,'Actualizar Cliente');
        });
    });

})
