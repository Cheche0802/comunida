<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingresa el titulo de la predica">
    </div>

    @if ($preachs->count())

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Predicador</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($preachs as $preach)
                        <tr>
                            <td> {{ $preach->id }} </td>
                            <td> {{ $preach->title }} </td>
                            <td> {{ $preach->name }} </td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.preachs.edit', $preach) }}">
                                    Editar
                                </a>
                            </td>
                            <td with="10px">
                                <a class="btn btn-info btn-sm" href="{{ route('admin.preachs.show', $preach) }}">
                                    Ver
                                </a>
                            </td>
                            <td with="10px">
                                <form action="{{ route('admin.preachs.destroy', $preach) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $preachs->links() }}
        </div>
        
    @else
    
        <div class="card-body">
            <strong>No existe ningun registro</strong>
        </div>
        
    @endif
</div>
