@isset($envioEspecial)
    @method($envioEspecial)
@endisset
<div class="row g-3">
    <span class="text-center text-capitalize fs-4 fw-bolder">incidencia</span>
    <div class="col-12">
        <label for="exampleInputPassword1" class="form-label"> {{ ucwords('equipo') }} </label>

        <select class="form-control" id="equipo_id" name="equipos_id" required>
                <option value=""> Selecciona ...</option>
                    @foreach ($equipos as $key => $val)
                        <option value="{{ $val->id }}"  @isset($historico){{ ($historico->equipos_id == $val->id ? "selected":"") }}@endisset>
                            {{ $val->nombreEquipo }}
                        </option>
                    @endforeach
                </select>
        {{-- mensajes de validacion --}}
        <div class="valid-feedback">Correcto!</div>
        <div class="invalid-feedback">Introduce información valida</div>
        {{-- fin mensajes de validacion --}}
    </div>
       <div class="col-6">
           <label for="inputAddress" class="form-label text-capitalize">procedimiento</label>
           <input type="text" class="form-control rounded-md" name="procedimiento" id="procedimiento"
            @isset($historico) value="{{ $historico->procedimiento }}" @endisset required>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
       </div>
       <div class="col-6">
           <label for="inputAddress" class="form-label text-capitalize">pieza</label>
           <input type="text" class="form-control rounded-md" name="pieza" id="pieza"
           @isset($historico) value="{{ $historico->pieza }}" @endisset required>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
       </div>
       <div class="col-12">
           <label for="inputAddress" class="form-label text-capitalize">descripción</label>
           <textarea class="form-control" name="descripcion" id="descripcion" rows="6" required>@isset($historico){{ $historico->descripcion }}@endisset</textarea>
            {{-- mensajes de validacion --}}
            <div class="valid-feedback">Correcto!</div>
            <div class="invalid-feedback">Introduce información valida</div>
            {{-- fin mensajes de validacion --}}
       </div>
</div>
