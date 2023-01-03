<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Acciones</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <th scope="row">{{ $usuario->id }}</th>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellidos }}</td>
                    <td class="d-flex">
                        <div class="col">
                            <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded" type="submit"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </div>
                        <div class="col">
                            <button class="btn btn-warning"name="editarUsuario" value="{{ $usuario->id }}"   ><i class="bi bi-person-fill-gear"></i></button>
                        </div>
                    </td>

                </tr>
            @endforeach
          </tbody>
    </table>
</div>
