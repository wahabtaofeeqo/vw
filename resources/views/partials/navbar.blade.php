<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <b>ValidWallets</b>
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
                    <a class="nav-link" href="#">Overview</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/import-wallet">Keys</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Doc</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Apps</a>
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