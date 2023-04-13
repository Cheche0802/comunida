<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre de un Usuario">
    </div>

    @if ($users->count())
    <div class="card-body">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td with="10px">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user) }}">Editar</a></td>
                        <td with="10px">
                            <form action="{{ route('admin.posts.destroy', $user) }}" method="POST">
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{$users->links()}}
    </div>

    @else
    <div class="card-body">
        <strong>No existe ningun registro</strong>
    </div>

    @endif

</div>
