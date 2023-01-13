<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Equipo
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="d-flex justify-content-evenly">
    <div class="row g-2">
            <div class="col-6">
                <label for="exampleInputEmail1" class="form-label">{{ ucwords('nombre del equipo') }} </label>
                <input type="text" class="form-control"  name="nombreEquipo" aria-describedby="emailHelp"
                @isset($equipo->nombreEquipo)
                    value="{{ $equipo->nombreEquipo  }}"
                @endisset
                required>
            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('procesador') }} </label>
                <input type="text" class="form-control"  name="procesador"
                @isset($equipo->procesador)
                    value="{{ $equipo->procesador  }}"
                @endisset
                required>
            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('placa Base') }} </label>
                <input type="text" class="form-control"  name="placaBase"
                @isset($equipo->placaBase)
                    value="{{ $equipo->placaBase  }}"
                @endisset
                required>
            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('disco Duro') }} </label>
                <input type="text" class="form-control"  name="discoDuro"
                @isset($equipo->discoDuro)
                    value="{{ $equipo->discoDuro  }}"
                @endisset
                required>
            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('sistema Operativo') }} </label>
                <input type="text" class="form-control"  name="sistemaOperativo"
                @isset($equipo->sistemaOperativo)
                    value="{{ $equipo->sistemaOperativo  }}"
                @endisset
                required>
            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('tipo') }} </label>

                <select class="form-control" name="tipo" required>
                        <option value=""> Selecciona ...</option>
                        <option value="portatil" {{ ( isset($equipo->tipo) == "portatil" ? "selected":"") }}> {{ ucwords('portatil') }} </option>
                        <option value="pc" {{ ( isset($equipo->tipo) == "pc"  ? "selected":"") }}>{{ ucwords('pc') }}</option>
                </select>
            </div>
        </div>
        </div>
        <div class="row mt-3">
            @include('historico.historico')
        </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
