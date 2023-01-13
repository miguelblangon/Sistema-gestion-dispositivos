<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="d-flex justify-content-evenly">
                        <div class="col-auto text-center">
                            @if (session('usuarios_mensaje'))
                                <div class="{{ session('usuarios_clase') }}">
                                    {{ session('usuarios_mensaje') }}
                                </div>
                            @endif
                            <div class="d-flex justify-content-evenly">
                                 <span class="align-middle text-capitalize fs-3 fw-bolder"> tabla de clientes </span>
                                <button  type="button" class="btn btn-outline-primary" id="usuarios">
                                    Clientes
                                </button>
                            </div>

                            @include('usuarios.tabla')
                        </div>
                        <div class="col-auto text-center">
                            @if (session('equipos_mensaje') )
                                <div class="{{ session('equipos_clase') }}">
                                    {{ session('equipos_mensaje')}}
                                </div>
                            @endif
                            <div class="d-flex justify-content-center ">
                                <span class="align-middle text-capitalize fs-3 fw-bolder">tabla de equipos</span>
                                <button  type="button" class="btn btn-outline-primary ml-2"  id="equipos">
                                    Equipos
                                </button>
                            </div>

                            @include('equipos.tabla')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modal.modal')
</x-app-layout>
