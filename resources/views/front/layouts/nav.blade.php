<div class="navbar-area" id="stickymenu">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('uploads/'.$global_setting->logo) }}" alt="">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <!-- Logo -->
                    <img src="{{ asset('uploads/'.$global_setting->logo) }}" alt="Santa Clara" style="height:60px;">

                    <!-- Texto del logo -->
                    <div class="ml-3 d-flex flex-column justify-content-center text-center">
                        <span style="font-family: 'Cinzel Decorative', serif; font-weight: 600; font-size: 24px; line-height: 1; color:#e8d8b3;">
                            SANTA CLARA
                        </span>
                        <span style="font-size: 14px; letter-spacing: 1px; color:#e8d8b3; text-transform: uppercase;">
                            Bienes Raíces
                        </span>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="{{ url('property-search') }}" class="nav-link">Propiedades</a></li>
                        {{-- <li class="nav-item"><a href="{{ route('agents') }}" class="nav-link">Agentes</a></li> --}}
                        <li class="nav-item"><a href="{{ route('locations') }}" class="nav-link">Ubicaciones</a></li>
                        {{-- <li class="nav-item"><a href="{{ route('pricing') }}" class="nav-link">Precios</a></li>
                        <li class="nav-item"><a href="{{ route('faq') }}" class="nav-link">FAQ</a></li> --}}
                        <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Noticias</a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contacto</a></li>

                        @if(Auth::guard('web')->check())
                            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Cliente Dashboard</a></li>
                        @elseif(Auth::guard('agent')->check())
                            <li class="nav-item"><a href="{{ route('agent_dashboard') }}" class="nav-link">Agente Dashboard</a></li>
                        @else
                            <li class="nav-item"><a href="{{ route('select_user') }}" class="nav-link">Login</a></li>
                        @endif
                    </ul>
                </div>
            </nav>



        </div>
    </div>
</div>