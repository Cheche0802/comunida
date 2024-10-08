<x-app-layout>
    @dump('vista de predicas')
    <div class="container py-8">
        <article class="w-full h-80 bg-cover bg-center mb-5" style="background-image: url(storage/default/principal.jpg)">
            <h1 class="text-4xl text-white leading-8 font-bold mt-2">
               Nos congregamos los domingos a las 11 am
            </h1>
            <div  style="width: 5rem">
                <a href="#"
                    class="bg-orange-600  text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page">Quienes Somos</a>
            </div>
        </article>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($preachs as $preach)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if ($preach->image) {{Storage::url($preach->image->url) }} @else ext/logo.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        {{-- div para los tags --}}
                        {{-- <div>
                            @foreach ($preach->tags as $tag)
                                <a href="{{route ('preachs.tag', $tag)}}" class="inline-block px-3 h-6 bg-{{ $tag->color }}-700 text-white rounded-full">
                                    {{$tag->name}}
                                </a>
                            @endforeach
                        </div> --}}
                        <h1 class="text-4xl text-black leading-8 font-bold mt-2">
                            <a href="{{route ('preachs.show', $preach)}}">
                                {{$preach->name}}
                            </a>
                        </h1>
                        {{-- <span class="text-2xl text-white leading-8 font-bold mt-2">
                        </span> --}}
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{$preachs->links()}}
        </div>
    </div>
</x-app-layout>
