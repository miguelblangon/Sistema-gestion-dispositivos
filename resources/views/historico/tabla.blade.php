<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Dueño Del Equipo </th>
              <th scope="col">Nombre Del Equipo</th>
              <th scope="col">Procedimiento</th>
              <th scope="col">Fecha</th>
              <th scope="col">Acciones</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($historico as $parametro)
                <tr>
                    <td scope="row">{{ $parametro->id }}</td>
                    <th>{{ $parametro->equipo->usuario->nombre }}</th>
                    <td>{{ $parametro->equipo->nombreEquipo }}</td>
                    <td>{{ $parametro->procedimiento }}</td>
                    <td>{{ $parametro->created_at->format('d-m-Y') }}</td>

                    <td class="d-flex flex-row">
                        <div class="mr-2">
                            <form action="{{ route('historico.destroy',$parametro->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded" type="submit"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </div>
                        <div class="mr-2">
                            <button class="btn btn-warning" name="editarHistorico" value="{{ $parametro->id }}"   ><i class="bi bi-person-gear"></i> </button>
                        </div>
                    </td>

                </tr>
            @endforeach
          </tbody>
    </table>
</div>
