    @isset($envioEspecial)
        @method($envioEspecial)
    @endisset
       <div class="row g-2">
        <div class="col-6">
            <label for="exampleInputEmail1" class="form-label">{{ ucwords('nombre del equipo') }} </label>
            <input type="text" class="form-control"  name="nombreEquipo" aria-describedby="emailHelp"
            @isset($envioEspecial)
                value="{{ $equipo->nombreEquipo  }}"
            @endisset
            required>
            <div id="emailHelp" class="form-text">Nombre de la cosa que se va a reparar</div>
              {{-- mensajes de validacion --}}
              <div class="valid-feedback">Correcto!</div>
              <div class="invalid-feedback">Introduce información valida</div>
              {{-- fin mensajes de validacion --}}
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> {{ ucwords('procesador') }} </label>
            <input type="text" class="form-control"  name="procesador"
            @isset($envioEspecial)
                value="{{ $equipo->procesador  }}"
            @endisset
            required>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> {{ ucwords('ram') }} </label>
            <input type="number" class="form-control"  name="ram"
            @isset($envioEspecial)
                value="{{ $equipo->ram  }}"
            @endisset
            required>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> {{ ucwords('tipo ram') }} </label>
            <input type="text" class="form-control"  name="type_ram"
            @isset($envioEspecial)
                value="{{ $equipo->type_ram  }}"
            @endisset
            required>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> {{ ucwords('placa base') }} </label>
            <input type="text" class="form-control"  name="placaBase"
            @isset($envioEspecial)
                value="{{ $equipo->placaBase  }}"
            @endisset
            required>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> {{ ucwords('disco duro') }} </label>
            <input type="text" class="form-control"  name="discoDuro"
            @isset($envioEspecial)
                value="{{ $equipo->discoDuro  }}"
            @endisset
            required>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> {{ ucwords('sistema operativo') }} </label>
            <input type="text" class="form-control"  name="sistemaOperativo"
            @isset($envioEspecial)
                value="{{ $equipo->sistemaOperativo  }}"
            @endisset
            required>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> {{ ucwords('tipo') }} </label>

            <select class="form-control" name="tipo" required>
                    <option value=""> Selecciona ...</option>
                    <option value="portatil"
                    @isset($equipo->tipo)
                        {{ ($equipo->tipo == "portatil" ? "selected":"" ) }}
                    @endisset > {{ ucwords('portatil') }} </option>

                    <option value="pc" @isset($equipo->tipo)
                        {{ ($equipo->tipo == "pc" ? "selected":"" ) }}
                    @endisset >{{ ucwords('pc') }}</option>
            </select>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
        </div>
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label"> {{ ucwords('cliente') }} </label>
            <select  class="form-control" name="usuarios_id" required>
                <option value=""> Selecciona ...</option>
                @foreach ($usuarios as $key => $val)
                    <option value="{{ $val->id }}"
                        @isset($equipo->usuarios_id)
                            {{ ($equipo->usuarios_id == $val->id ? "selected":"") }}
                        @endisset  >{{ $val->nombre }}</option>
                @endforeach
            </select>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
        </div>
        @isset($envioEspecial)
        <div class="col-12">
            <div id="codigQr" class="visible-print">
                <img class="mx-auto d-block" src="{{ asset("$rutaQr")}}" alt="código Qr">
            </div>
            <div class="mt-2 text-center">
              <a href="{{ route('descargar-qr',$equipo->id) }}" target="_blank" class="btn btn-primary" >Imprimir</a>
            </div>
            {{--
                <input type="button" onclick="javascript:imprim1();" class="btn btn-primary"  value="Imprimir">
            {!! QrCode::size(200)->generate(route('ver-equipo', $equipo->id)); !!}
            <script>
                function imprim1(){
                    let printContents = document.getElementById('codigQr').innerHTML;
                    w = window.open();
                    w.document.write(printContents);
                    w.document.close(); // necessary for IE >= 10
                    w.focus(); // necessary for IE >= 10
                    w.print();
                    w.close();
                    return true;
                }
            </script>
            --}}
        </div>
        @endisset

       </div>









