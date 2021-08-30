@extends('layouts.app')

@section('content')

    <header class="header">
        @include('partials/navbar')

        <div class="container p-4">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-7 py-sm-4">
                    <h1 class="h1 font-weight-bold mb-4 text-white">
                        The world’s most popular crypto wallets
                    </h1>

                    <h4 class="mb-3 text-white">
                        Over 76 million wallets created to buy, sell, and earn crypto.
                    </h4>

                    <div>
                        <a href="import-wallet" class="btn btn-primary btn-lg">Get Started</a>
                    </div>
                </div>

                <div class="col-md-5">
                    <img src="img/wallet-fold-phone.png" class="phone">
                </div>
            </div>
        </div>
    </header>

    <div class="py-5 bg-light wallet-containter">

        <div class="container">
            
            <h4 class="font-weight-bold mb-4">Wallets Apps</h4>

             <!-- Row 0 -->
            <div class="owl-carousel owl-theme row0 mb-4">
                <div class="item">
                    <div class="card">
                        <img src="img/blockchain.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Blockchain</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/binance.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Binance</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/metamask.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">MetaTask</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/crypterium.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Crypterium</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/bitGo.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">BitGo</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 1 -->
            <div class="owl-carousel owl-theme row1 mb-4">
                <div class="item">
                    <div class="card">
                        <img src="img/coinbase1.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Coinbase</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/ethereum.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Ethereum</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/trezor.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Trezor</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/exodus.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Exodus</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/bitGo.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">BitGo</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Row 2 -->
            <div class="owl-carousel owl-theme row2 mb-4">
                <div class="item">
                    <div class="card">
                        <img src="img/coinpayment.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">CoinPayments</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/luno.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Luno</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/myether.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">MyEther</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/trust.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">TrustWallet</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/jaxx.jpeg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Jaxx</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Row 3 -->
            <div class="owl-carousel owl-theme row3 mb-4">
                <div class="item">
                    <div class="card">
                        <img src="img/coinmoni.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">CoinMoni</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/electrum.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Electrum Wallet</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/coinbase1.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Bitcoin Core Client</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/xapo.png" class="card-img-top" alt="Coinbase" style="height: 150px; width: 100%;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Xapo Wallet</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/bread.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Bread Wallet</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Row 4 -->
            <div class="owl-carousel owl-theme row4">
                <div class="item">
                    <div class="card">
                        <img src="img/lumi.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Lumi Wallet</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/usdx.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">USDX Wallet</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="img/coinjar.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body">
                            <h4 class="card-title h6 font-weight-bold">Coinjar Wallet</h4>
                            <p class="d-md-block">
                                A Trusted & well use <a href="import-wallet" class="">more</a>
                            </p>
                            <a href="import-wallet" class="btn btn-outline-primary">Validate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-5">
       <div class="container text-center">
            <h4>Receive our Newsletter</h4>
            <p>Sign up to receive updates and announcements</p>
            <a href="javascript:void" class="btn btn-success">GO!</a>
       </div>
    </div>

    @include('partials/footer')
@endsection