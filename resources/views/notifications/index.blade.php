<x-app-layout>
    <div class="container py-8">
        <h1>Notificaciones</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>No leidas</h2>
                <ul class="list-group">
                    @foreach ($unreadNotifications as $unreadNotifications)
                        <li class="list-group-item"><a href="{{ $unreadNotifications->data['link']}}">
                            {{ $unreadNotifications->data['text']}}</a>
                        <form method="POST" action="{{route('notifications.read', $unreadNotifications->id)}}" class="pull-rught">
                            {{method_field('PATCH')}}
                            @csrf
                            <button class="btn btn-danger btn-xs">X</button>
                        </form>

                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6">
                <h2> leidas</h2>
                <ul class="list-group">
                    @foreach ($readNotifications as $readNotifications)
                    <li class="list-group-item"><a href="{{ $readNotifications->data['link']}}">
                        {{ $readNotifications->data['text']}}</a>
                        <form method="POST" action="{{route('notifications.destroy', $readNotifications->id)}}" class="pull-rught">
                            {{method_field('DELETE')}}
                            @csrf
                            <button class="btn btn-danger btn-xs">X</button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
