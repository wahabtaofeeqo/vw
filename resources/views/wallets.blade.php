@extends('layouts.app')

@section('content')
	<nav class="navbar navbar-expand navbar-light bg-white">
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