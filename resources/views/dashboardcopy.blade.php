@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
        <p>{{ __('Dashboard') }} </p>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col text-center">
            <button  type="button" class="btn btn-outline-primary" id="usuarios">
                Usuarios
            </button>
            <button  type="button" class="btn btn-outline-primary"  id="equipos">
                Equipos
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            @if (session('usuarios_mensaje'))
                <div class="{{ session('usuarios_clase') }}">
                    {{ session('usuarios_mensaje') }}
                </div>
            @endif
            <h4> Tabla de usuarios </h4>
            @include('usuarios.tabla')
        </div>
        <div class="col text-center">
            @if (session('equipos_mensaje'))
                <div class="{{ session('equipos_clase') }}">
                    {{ session('equipos_mensaje') }}
                </div>
            @endif
            <h4> Tabla de equipo </h4>
            @include('equipos.tabla')
        </div>
    </div>
   @include('modal.modal')
@endsection
@section('javaScript')
<script type="text/javascript">
    $(function(){
        $( "#usuarios" ).on( "click", function() {
            $.get('/usuarios/create',function(data){
		        $('#mostrar').modal('show');
                modal("{{route('usuarios.store')}}",'POST','Crear Usuario',data,'Guardar Usuario');
            });
        });
        $( "#equipos" ).on( "click", function() {
            $.get('/equipos/create',function(data){
		        $('#mostrar').modal('show');
                modal("{{route('equipos.store')}}",'POST','Crear Equipo',data,'Guardar Equipo');
            });
        });

        $( "[name=editarUsuario]" ).on( "click", function() {
            let id= $(this).val();
            $.get('usuarios/'+id+'/edit' ,function(data){
		        $('#mostrar').modal('show');
                modal('usuarios/'+id,'POST','Actualizar Usuario',data,'Actualizar Usuario');
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
</script>
@endsection
