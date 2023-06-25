<nav class="bg-cyan-800 " x-data="{ open: false }" style="height: 5rem;">
    <div class="px-2 mx-0 max-w-7xl sm:px-6">
        <div class="relative flex items-center justify-between h-16">

            <div class="flex items-center justify-between flex-1 pt-3 sm:items-stretch sm:justify-start">
                {{-- <div class="position-absolute top-100 start-100 translate-middle" style="border: red 1px solid"> --}}
                {{-- Logotipo --}}
                {{-- <a href="/" class="flex items-center flex-shrink-0 "> --}}
                <a href="/" class="d-flex align-items-center">
                    <img class="block w-auto mt-5 lg:hidden" src="storage/logos/LOGOsin fondo horizontal.png"
                        alt="Comunidad de gracia">
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

            <div class="flex items-center justify-center pt-3 pr-10 flex-row-reverse1 sm:items-stretch sm:justify-start">

                <div class="col-auto col-sm col-xl col-md-1 justify-content-center align-items-center" {{-- style="border: 1px red solid" --}}>
                    <div class="text-center "style="background: #fcb900; border-radius: 50%; width: 25px; height: 25px;">
                        <i class="p-1 text-white fas fa-map-marker-alt"></i>
                    </div>
                    <div class="text-xs text-center">
                        <strong>
                            Direcci&oacute;n <br/>
                        </strong>
                        <strong></strong>
                        Calle boyaca, Los Teques
                        1201, Miranda
                    </div>
                </div>

                <div class="col-auto col-sm col-xl col-md-1 justify-content-center align-items-center" {{-- style="border: 1px red solid" --}}>
                    <div class="text-center "style="background: #fcb900; border-radius: 50%; width: 25px; height: 25px;">
                        <i class="p-1 text-white fas fa-phone-alt fa-phone"></i>                        
                    </div>
                    <div class="text-xs text-center">
                        <strong>
                            Tel&eacute;fono<br/>
                        </strong>
                        <p>
                            <strong>
                                +0412-5568963
                                +0416-7251012
                            </strong>
                        </p>
                        
                    </div>
                </div>

                <div class="col-auto col-sm col-xl col-md-1 justify-content-center align-items-center" {{-- style="border: 1px red solid" --}}>
                    <div class="text-center "style="background: #fcb900; border-radius: 50%; width: 25px; height: 25px;">
                        <i class="p-1 text-white fas fa-envelope"></i>
                    </div>
                    <div class="text-xs text-center">
                        <strong>
                            Correo <br/>
                        </strong>
                        <p>
                            <strong>
                                cgdvzla2000@gmail.com
                            </strong>
                        </p>
                        
                    </div>
                </div>
                <div class="col-auto pl-2 col-sm col-xl col-md-1 justify-content-center align-items-center " {{-- style="border: 1px red solid" --}}>
                    <ul>
                        <li>
                            <a href="https://www.instagram.com/cdg_vzla/?fbclid=IwAR2mIJ-VNpxrNSkb2smMkzWZE80g8iFZMbRsqtGSmVVy_7FHON_439e-HVM">
                                <i class="text-white fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/comunidaddegraciavzla/">
                                <i class="text-white fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/bajosugracia">
                                <i class="text-white fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open=false ">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            </div>
        </div>
</nav>
