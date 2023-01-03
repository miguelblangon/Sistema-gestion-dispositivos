    @isset($envioEspecial)
        @method($envioEspecial)
    @endisset
    <div class="row g-2">
            <div class="col-6">
                <label for="exampleInputEmail1" class="form-label">{{ ucwords('nombre') }}</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp"
                @isset($envioEspecial)
                    value="{{ $usuario->nombre  }}"
                @endisset
                required>
                {{-- mensajes de validacion --}}
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce un nombre valido</div>
                {{-- fin mensajes de validacion --}}
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">{{ ucwords('apellidos') }} </label>
                <input type="text" class="form-control" id="apellidos" name="apellidos"
                @isset($envioEspecial)
                    value="{{ $usuario->apellidos  }}"
                @endisset
                required>
                 {{-- mensajes de validacion --}}
                 <div class="valid-feedback">Correcto!</div>
                 <div class="invalid-feedback">Introduce un apellido valido</div>
                 {{-- fin mensajes de validacion --}}
            </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label"> {{ ucwords('documento') }} </label>
                <input type="text" class="form-control" id="documento" name="documento"
                @isset($envioEspecial)
                    value="{{ $usuario->documento}}"
                @endisset
                 required>
                  {{-- mensajes de validacion --}}
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce un documento valido</div>
                {{-- fin mensajes de validacion --}}
              </div>
              <div class="col-6 pt-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="documento_tipo" value="cif"
                    @isset($usuario->documento_tipo)
                        {{ ($usuario->documento_tipo == "cif" ? "checked":"" ) }}
                    @endisset
                    required
                    >
                    <label class="form-check-label" for="cif">
                        {{ ucwords('cif') }}
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="documento_tipo"  value="nif"
                    @isset($usuario->documento_tipo)
                        {{ ($usuario->documento_tipo == "nif" ? "checked":"" ) }}
                    @endisset
                    required
                    >
                    <label class="form-check-label" for="nif">
                       {{ ucwords('nif') }}
                    </label>
                     {{-- mensajes de validacion --}}
                    <div class="valid-feedback">Correcto!</div>
                    <div class="invalid-feedback">Selecciona una opción</div>
                    {{-- fin mensajes de validacion --}}
                  </div>
              </div>
              <div class="col-12">
                <label for="exampleInputPassword1" class="form-label">{{ ucwords('direccion') }} </label>
                <input type="text" class="form-control" id="direccion" name="direccion"
                maxlength="255"
                @isset($envioEspecial)
                    value="{{ $usuario->direccion}}"
                @endisset
                 required>
                  {{-- mensajes de validacion --}}
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce una dirección valida</div>
                {{-- fin mensajes de validacion --}}
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">{{ ucwords('codigo postal') }}</label>
                <input type="text" class="form-control" id="cp" name="cp" maxlength="5"
                pattern="[0-9]+"
                @isset($envioEspecial)
                    value="{{ $usuario->cp}}"
                @endisset
                 required>
                  {{-- mensajes de validacion --}}
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce un CP valido</div>
                {{-- fin mensajes de validacion --}}
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">{{ ucwords('ciudad') }} </label>
                <input type="text" class="form-control" id="ciudad" name="ciudad"
                @isset($envioEspecial)
                    value="{{ $usuario->ciudad}}"
                @endisset
                 required>
                  {{-- mensajes de validacion --}}
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce una ciudad valida</div>
                {{-- fin mensajes de validacion --}}
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">{{ ucwords('telefono') }} </label>
                <input type="text" class="form-control" id="telefono" name="telefono"
                pattern="[0-9]+" maxlength="9"
                @isset($envioEspecial)
                    value="{{ $usuario->telefono}}"
                @endisset
                 required>
                  {{-- mensajes de validacion --}}
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce un telefono valido</div>
                {{-- fin mensajes de validacion --}}
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">{{ ucwords('mail') }}</label>
                <input type="email" class="form-control" id="mail" name="mail"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                @isset($envioEspecial)
                    value="{{ $usuario->mail}}"
                @endisset
                 required>
                  {{-- mensajes de validacion --}}
                <div class="valid-feedback">Correcto!</div>
                <div class="invalid-feedback">Introduce un mail valido</div>
                {{-- fin mensajes de validacion --}}
              </div>





    </div>










