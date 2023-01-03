@extends('layouts.app')
@section('content')
<div class="row text-center" ><h3>Visualizar Equipo</h3></div>
    <div class="row">
        <div class="col text-center">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{ ucwords('nombre del equipo') }} </label>
                <input type="text" class="form-control"  name="nombreEquipo" aria-describedby="emailHelp"
                @isset($equipo->nombreEquipo)
                    value="{{ $equipo->nombreEquipo  }}"
                @endisset
                required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('procesador') }} </label>
                <input type="text" class="form-control"  name="procesador"
                @isset($equipo->procesador)
                    value="{{ $equipo->procesador  }}"
                @endisset
                required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('placa Base') }} </label>
                <input type="text" class="form-control"  name="placaBase"
                @isset($equipo->placaBase)
                    value="{{ $equipo->placaBase  }}"
                @endisset
                required>
            </div>
        </div>
        <div class="col text-center">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('disco Duro') }} </label>
                <input type="text" class="form-control"  name="discoDuro"
                @isset($equipo->discoDuro)
                    value="{{ $equipo->discoDuro  }}"
                @endisset
                required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('sistema Operativo') }} </label>
                <input type="text" class="form-control"  name="sistemaOperativo"
                @isset($equipo->sistemaOperativo)
                    value="{{ $equipo->sistemaOperativo  }}"
                @endisset
                required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('tipo') }} </label>

                <select class="form-control" name="tipo" required>
                        <option value=""> Selecciona ...</option>
                        <option value="portatil" {{ ( isset($equipo->tipo) == "portatil" ? "selected":"") }}> {{ ucwords('portatil') }} </option>
                        <option value="pc" {{ ( isset($equipo->tipo) == "pc"  ? "selected":"") }}>{{ ucwords('pc') }}</option>
                </select>
            </div>
        </div>
    </div>
@endsection
