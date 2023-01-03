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
                    <td class="d-flex">
                        <div class="col">
                            <form action="{{ route('equipos.destroy',$parametro->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded" type="submit"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </div>
                        <div class="col">
                            <button class="btn btn-warning" name="editarEquipo" value="{{ $parametro->id }}"   ><i class="bi bi-person-fill-gear"></i></button>
                        </div>
                    </td>

                </tr>
            @endforeach
          </tbody>
    </table>
</div>
