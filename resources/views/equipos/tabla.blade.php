<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre Del equipo </th>
              <th scope="col">Placa Base</th>
              <th scope="col">Persona</th>
              <th scope="col">Acciones</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($equipos as $parametro)
                <tr>
                    <th scope="row">{{ $parametro->id }}</th>
                    <td>{{ $parametro->nombreEquipo }}</td>
                    <td>{{ $parametro->placaBase }}</td>
                    <td>{{ $parametro->usuario->nombre }}</td>
                    <td class="d-flex flex-row">
                        <div class="mr-2">
                            <form action="{{ route('equipos.destroy',$parametro->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded" type="submit"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </div>
                        <div class="mr-2">
                            <button class="btn btn-warning" name="editarEquipo" value="{{ $parametro->id }}"   ><i class="bi bi-person-gear"></i> </button>
                        </div>
                        <div class="mr-2">
                            <button class="btn btn-primary" name="historico" value="{{ $parametro->id }}"   ><i class="bi bi-archive"></i></button>
                        </div>
                    </td>

                </tr>
            @endforeach
          </tbody>
    </table>
</div>
