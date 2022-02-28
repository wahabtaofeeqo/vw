@extends('layouts.app')

@section('content')
   <div class="h-100 d-flex bg-dark" style="flex-direction: column;">
      <header style="display: flex; align-items: center" class="p-3">

        <a href="/">
            <img src="/img/web.png" style="width: 30px; height: 30px;">
        </a>

        <nav style="flex-grow: 2; align-items: center; text-align: center">
            <a href="/wallets" class="text-muted px-2">
                NFT /
            </a>

            <a href="/wallets" class="text-muted px-2">
                Dapps /
            </a>

            <a href="/wallets" class="text-muted px-2">
                Token
            </a>
        </nav>

        <img src="/img/ios.png" alt="" style="width: 100px; height: 45px;">
      </header>

      <div style="flex-grow: 2; align-content: center" class="d-flex flex-column">
        <div class="col-md-5 m-auto text-white">
            <h1 class="text-center mb-4 font-weight-bold" style="font-size: 4em">Comming Soon</h1>
            <h4 class="mb-4 text-center">
                We're working hard to finish the development of this site.
                Sign up below to receive updates and to be notified when we launch!
            </h4>

            <div class="input-group mb-4">
                <input type="text" class="form-control form-control-lg" placeholder="you@domain.com">
                <div class="input-group-append">
                    <button class="btn btn-danger btn-lg">Send</button>
                </div>
            </div>

            <p class="text-center">
                Notify me when the app is Launched!
            </p>
        </div>
      </div>

      <footer class="p-3">
          <a href="#" class="float-left text-muted">Privacy Policy</a>
          <p class="float-right mb-0">
            <a href="#" class="text-muted">Facebook</a>
            <a href="#" class="text-muted">Instagram</a>
            <a href="#" class="text-muted">Twitter</a>
          </p>
      </footer>
   </div>
@endsection
