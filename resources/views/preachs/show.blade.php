<x-app-layout>

    <div class="container py-8">
        <div class="grid grid-col-1 lg:grid-cols-3 gap-6">
            <h1 class="text-4xl font-bold text-gray-600">
                {{ $preach->title }} Pajup
            </h1>
        </div>

        <div class="text-lg text-gray-500 mb-2 grid grid-col-1 lg:grid-cols-3 gap-6">
            {!!$preach->name!!}
        </div>

        <div class="grid grid-col-1 lg:grid-cols-3 gap-6">
            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <div class="row align-items-center justify-content-center">
                    <figure>
                        ¨{!! $preach->iframe !!}
                        {{-- @if ($preach->image)
                            <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($preach->image->url) }}"
                                alt="">
                        @else
                            <img class="w-full h-80 object-cover object-center" src="storage/default/custom.jpg"
                                alt="">
                        @endif --}}
                    </figure>
                </div>
                <div class="clearfix"></div>
                <div class="text-base text-gray-500 mt-4">
                    {!!$preach->extract !!}
                </div>
            </div>
            {{-- Contenido relacionado --}}
            <aside hidden>
                <span class="text-sm text-slate-900">
                    agregar sugerencias de predicas
                </span>
                {{-- 
                <h1 class="text-2xl font-bold text-gray-600  mb-4">Más en {{ $post->category->name }}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show', $similar) }}"">
                                @if ($similar->image)
                                    <img class="w-36 h-20 object-cover object-center"
                                        src="{{ Storage::url($similar->image->url) }}" alt="">
                                @else
                                    <img class="w-36 h-20 object-cover object-center" src="storage/default/custom.jpg"
                                        alt="">
                                @endif
                                <span class="ml-2 text-gray-600">{{ $similar->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul> --}}
            </aside>
        </div>
    </div>
</x-app-layout>
