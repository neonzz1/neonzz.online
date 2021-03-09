@extends('Layout.projects')

@section('Content')
	 <!-- Page content -->
	 <div class="w3-content w3-padding" style="max-width:1564px">


<!-- Project Section -->
<div class="w3-container w3-padding-32" id="Pong">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-custom1" style="font-family:chiller" id="ProjectText">Pong</h3>
</div>
<h2 class="w3-content w3-large w3-text-grey"><span class="w3-opacity-min">Pong</span></h2>
   <p class="w3-content"><span class="w3-opacity-min">Download Pong here:<br /><br /><form class="w3-content" action="https://mega.nz/file/NUkRFAwb#Km0bPLuEh1EbFzj7cO65tYxcWeUmzxenKX0ciArHY_c" method="GET" target="_blank"><button type="submit" class="btn btn-success">Pong v1.0.1</button></form></span></p>
   <h3 class="w3-content w3-large w3-text-black"><span class="w3-opacity-min">Register to recive notifications on the latest updates if you have ideas or would like to join my development team please visit the contact us page.</span></h3><br /><br />
   <div class="w3-center verticaltext w3-content w3-padding" style="max-width: 1500px;">
    <h1 class="w3-content w3-large"><span class="w3-opacity-min">Check out Pong 1.0.1 below</span></h1>
    <br />
    <video class="w3-image" playsinline autoplay muted width="750" src="../../vid/Pong.mp4" type="video/mp4">
        Sorry, your browser does not support this video player.
    </video>
    <div class="w3-center verticaltext w3-content w3-padding" style="max-width: 1500px;">
    <h1 class="w3-content w3-large w3-text-black"><span>Welcome! Pong is a 2 player ping pong game currently it supports "w" for up and "s" for down on the left paddle and "up" and "down" arrow keys</span></h1>
    <br />
    <footer>
    <div class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="footer">
    <img class="w3-image mb-0" src="../../img/Websitebackground.png" alt="logo" width="1500" height="1000" id="footerimage">
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
</body>
</html>
@endsection