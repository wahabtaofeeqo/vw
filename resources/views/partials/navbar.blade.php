<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <div class="container-fluid py-2">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/img/logo.svg" style="width: 35px; height: 25px;"> 
            <b style="font-size: 20px;" class="text-info">WalletsToConnect</b>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="/wallets">Swapping</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="/wallets">Validation</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="/wallets">Wallets</a>
                </li>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item d-none">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item d-none">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
