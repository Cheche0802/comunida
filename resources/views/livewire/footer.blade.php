<nav class="bg-cyan-800 " x-data="{ open: false }" style="height: 5rem;">
    <div class="mx-0 max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">

            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start pt-3">
            {{-- <div class="position-absolute top-100 start-100 translate-middle" style="border: red 1px solid"> --}}
                {{-- Logotipo --}}
                {{-- <a href="/" class="flex flex-shrink-0 items-center "> --}}
                <a href="/" class="d-flex align-items-center">
                    <img class="block  mt-5 w-auto lg:hidden"
                        src="storage/logos/LOGOsin fondo horizontal.png" alt="Comunidad de gracia">
                    <img class="hidden w-auto lg:block" style="height: 65px;"
                        src="storage/logos/LOGOsinFondoHorizontal.png" alt="Comunidad de gracia">
                </a>
                {{-- Menu LG --}}
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open=false ">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->


        </div>
    </div>
</nav>
