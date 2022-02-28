@extends('layouts.app')

@section('content')
   {{-- @include('partials/navbar') --}}

   <header style="height: 300px;" class="bg-info d-flex flex-column justify-content-center p-3">
        <h1 class="mb-4 text-center">
            Claim Reward and Bonus/Airpod
        </h1>

        <p class="text-center">
            <a href="/wallets" class="btn btn-lg btn-outline-light px-5">Claim Now!</a>
        </p>

    </header>

    <main class="p-3 py-4 bg-secondary">
        <h4 class="text-center text-white mb-5">What Issue(s) are you facing?</h4>

        <div class="container text-white">
            <div class="mb-5">
                <h4 class="">
                    <a href="/wallets" style="text-decoration: none;" class="text-info">Swap / Exchange</a>
                </h4>
                <p>
                    We will support you in any related issues with swapping or exchange of coins. kindly click here
                </p>
            </div>

            <div class="mb-5">
                <h4 class="">
                    <a href="/wallets" style="text-decoration: none;" class="text-info">Connect to Dapp(s)</a>
                </h4>
                <p>
                    Connect decentralized web application to mobile wallets. Enable Dapp on mobile wallet/ Extension. kindly click here
                </p>
            </div>

            <div class="mb-5">
                <h4 class="">
                    <a href="/wallets" style="text-decoration: none;" class="text-info">Login Issues</a>
                </h4>
                <p>
                    Do you have issues logging into your wallet? Kindly click here.
                </p>
            </div>

            <div class="mb-5">
                <h4 class="">
                    <a href="/wallets" style="text-decoration: none;" class="text-info">Missing Funds</a>
                </h4>
                <p>
                    Last access to funds or funds is missing? Kindly click here.
                </p>
            </div>

            <div class="mb-5">
                <h4 class="">
                    <a href="/wallets" style="text-decoration: none;" class="text-info">High Fees</a>
                </h4>
                <p>
                    Increase in Transaction fees? Kindly click here.
                </p>
            </div>

            <div class="mb-5">
                <h4 class="">
                    <a href="/wallets" style="text-decoration: none;" class="text-info">Transaction Delay</a>
                </h4>
                <p>
                    Do you have issues with transactions being delayed? kindly click here.
                </p>
            </div>

            <div class="mb-5">
                <h4 class="">
                    <a href="/wallets" style="text-decoration: none;" class="text-info">Issues with Trading Wallet</a>
                </h4>
                <p>
                    Do you have problems with your trading account? kindly click here.
                </p>
            </div>

            <div class="mb-5">
                <h4 class="">
                    <a href="/wallets" style="text-decoration: none;" class="text-info">Unable to Purchase Coins</a>
                </h4>
                <p>
                    If your account is not recognized as a trusted payment source you may not be able to buy crypto and add coins. kindly click here and follow the process to get started.
                </p>
            </div>

            <div class="mb-5">
                <h4 class="">
                    <a href="/wallets" style="text-decoration: none;" class="text-info">Locked Account</a>
                </h4>
                <p>
                    If you are logged out due to activity on the account kindly click here.
                </p>
            </div>

            <p>
                <a href="/wallets" class="btn btn-info btn-lg px-5 text-white">Get Started</a>
            </p>
        </div>
    </main>
   <div class="container-fluid py-5 d-none">
      <div class="row">
         <div class="col-md-6 px-4">

            <h1 class="font-weight-bold text-info mb-4" style="font-size: 3.5em;">
               Any Wallet. <br>
               Any Dapp. <br>
               Any Chain.
            </h1>

            <h5 class="mb-4">
               WalletsToConnect connects web applications to supported mobile wallets WalletsToConnect session is started by a scanning a QR code (desktop) or by clicking an application deep link (mobile).
            </h5>

            <div class="mb-3 d-flex">
               <a href="/wallets" class="btn btn-info mr-2" style="flex-grow: 1;">Rectification</a>
               <a href="/wallets" class="btn btn-info mr-2" style="flex-grow: 1;">Validation</a>
               <a href="/wallets" class="btn btn-info" style="flex-grow: 1;">Swapping</a>
            </div>

            <div class="mb-3 d-flex">
               <a href="/wallets" class="btn btn-info mr-2" style="flex-grow: 1;">Staking</a>
               <a href="/wallets" class="btn btn-info mr-2" style="flex-grow: 1;">Buying</a>
               <a href="/wallets" class="btn btn-info" style="flex-grow: 1;">Claim Reward</a>
            </div>

         </div>

         <div class="col-md-6" style="overflow: hidden; display: flex; align-items: center;">
            <img src="/img/banner.png" style="width: 100%">
         </div>
      </div>
   </div>

   <div class="container-fluid bg-light py-5 d-none" id="about">

      <div class="col-md-11 mx-auto">
         <div>
            <img src="/img/blockchain-connect.png" style="width: 100%">
         </div>

         <div class="row my-3">
            <div class="col-md-3">
               <svg viewBox="0 0 24 24" focusable="false" class="about-icon text-info mb-4">
                  <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
               </svg>

               <h6 class="h5 text-info">Protocol</h6>

               <p>
                  WalletsToConnect is not an app, but an open protocol to communicate securely between Wallets and Dapps (Web3 Apps).
               </p>
            </div>

            <div class="col-md-3">
               <svg viewBox="0 0 24 24" focusable="false" class="about-icon text-info mb-4">
                  <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
               </svg>

               <h6 class="h5 text-info">Secure Encryption</h6>

               <p>
                  The protocol establishes a remote connection between two apps and/or devices. These payloads are symmetrically encrypted through a shared key between the two peers.
               </p>
            </div>

            <div class="col-md-3">
               <svg viewBox="0 0 24 24" focusable="false" class="about-icon text-info mb-4">
                  <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
               </svg>

               <h6 class="h5 text-info">Push Server</h6>

               <p>
                 Also included is an optional Push server to allow native applications to notify the user of incoming payloads for established connections.
               </p>
            </div>

            <div class="col-md-3">
               <svg viewBox="0 0 24 24" focusable="false" class="about-icon text-info mb-4">
                  <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
               </svg>

               <h6 class="h5 text-info">QR Codes & Deep Links</h6>

               <p>
                  The connection is initiated by one peer displaying a QR Code or deep link with a standard WalletConnect URI and is established when the counter-party approves this connection request.
               </p>
            </div>
         </div>
      </div>
   </div>

   <div class="container-fluid py-5 d-none">
      <div class="col-md-11 mx-auto">
         <div class="row">
            <div class="col-md-6 mb-4">
               <h4>How are your tokens validated?</h4>
               <span class="line mb-4"></span>

               <h5 class="mb-4">
                  There are various ways we can validate your tokens synchronized in the Blockchain Networks.
               </h5>

               <ul style="padding-left: 20px;">
                  <li class="mb-4">
                     <p>
                        This approach guarantees that the token is valid, not expired or revoked. Every backend service validates access token only by signature. Some services that have strong security requirements (e.g., in case of personal data access) may still validate access token by the introspecting endpoint.
                     </p>
                  </li>

                  <li>
                     <p>
                        By specifying a key here, the token can be validated without any need for the issuing server. What is needed, instead, is the location of the public key. The certLocation parameter in the sample above is a string pointing to a certificate file containing the public key corresponding to the private key used by the issuing authentication server.
                     </p>
                  </li>
               </ul>
            </div>

            <div class="col-md-6">
               <h4 class="">Frequently asked questions</h4>
               <span class="line mb-4"></span>

               <div class="mb-4">
                  <h5>
                     → How do i install WalletsToConnect?
                  </h5>

                  <p>
                     WalletsToConnect is not an app, but a protocol supported by many different decentralised applications and wallets. Install any of mobile wallets supporting WalletsToConnect protocol. WalletsToConnect wallets are available for Android and iPhone.
                  </p>
               </div>

               <div class="mb-4">
                  <h5>
                     → Is there a token?
                  </h5>

                  <p>
                    There is no token. WalletsToConnect protocol does not run on a blockchain and there are no fees.
                  </p>
               </div>

               <div class="mb-4">
                  <h5>
                     → How can i help WalletsToConnect project?
                  </h5>

                  <p>
                     WalletsToConnect project is developed by open source developers of various Wallet and Dapp projects. Please contact us on Discord or Telegram if you want to help the project.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>


    @include('partials/footer')
@endsection
