<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equipos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row mb-2">
                        <div class="col text-center">
                            <button  type="button" class="btn btn-outline-primary"  id="equipos">
                                Equipos
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            @if (session('equipos_mensaje'))
                                <div class="{{ session('equipos_clase') }}">
                                    {{ session('equipos_mensaje') }}
                                </div>
                            @endif
                            @include('equipos.tabla')
                            {{ $equipos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modal.modal')
</x-app-layout>
