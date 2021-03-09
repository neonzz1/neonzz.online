<?php
// Initialize the session

// Check if the user is already logged in, if yes then redirect him to welcome page

?>
@extends('Layout.app')

@section('sidebar')
    @parent

@endsection

@section('Content')
        
		<!-- Project Section -->
		<div class="w3-container w3-padding-32" id="projects">
				<h3 class="w3-border-light-grey w3-padding-custom2" style="font-family:'Courier New', monospace;" id="ProjectText">Projects</h3>
		</div>

		<div class="w3-row-padding" style="padding:0 29px">
			<div class="w3-col l3 m6 w3-margin-bottom">
				<div class="w3-display-container">
					<div class="w3-display-topleft w3-black w3-padding">Wormy</div>
					<a href="{{ route('Wormy') }}">
					<img src="../img/Wormyhome.PNG" alt="Wormy" style="width:100%">
					</a>
					<p>Wormy is a snake clone made in pygame</p>
				</div>
			</div>
			<div class="w3-col l3 m6 w3-margin-bottom">
				<div class="w3-display-container">
					<div class="w3-display-topleft w3-black w3-padding">Pong</div>
					<a href="{{ route('Pong') }}">
					<img src="../img/Pong.PNG" alt="Pong" style="width:100%">
					</a>
					<p>Pong is a ping pong game made in Python</p>
				</div>
			</div>
			<div class="w3-col l3 m6 w3-margin-bottom">
				<div class="w3-display-container">
					<div class="w3-display-topleft w3-black w3-padding">Building Escape</div>
					<a href="{{ route('BuildingEscape') }}">
					<img src="../img/buildingescape.png" alt="Building Escape" style="width:100%">
					</a>
					<p>Building Escape is puzzle based escape game made in UE4 and is almost ready for testing</p>
				</div>
			</div>
			<div class="w3-col l3 m6 w3-margin-bottom">
				<div class="w3-display-container">
					<div class="w3-display-topleft w3-black w3-padding">Battle Tank</div>
					<a href="{{ route('BattleTank') }}">
					<img src="../img/BattleTank.png" alt="Battle Tank" style="width:100%">
					</a>
					<p>Battle Tank is not ready for testing</p>
				</div>
			</div>
		</div>

    <footer>
        <p style="text-align:center">© Neonzz 2020 Powered by w3</p>
    </footer>
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please fill in your credentials to login.</p>
                <form action="{{ route('login') }}" method="post">
				@csrf
                <div class="w3-content form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" class="w3-content form-control '@error('email') is-invalid @enderror" value="">
                    @error('email')
                    <span class="help-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror  
                </div>  
                <div class="w3-content form-group ">
                    <label>Password</label>
                    <input type="password" name="password" class="w3-content form-control '@error('password') is-invalid @enderror">
                    @error('password')
                    <span class="help-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="w3-content form-group">
                    <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
@endsection