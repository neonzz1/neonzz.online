@extends('Layout.projects')

@section('Content')

<!-- Project Section -->
<div class="w3-container w3-padding-32" id="Building Escape">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-custom1" style="font-family:chiller" id="ProjectText">Building Escape</h3>
</div>
<h2 class="w3-content w3-large w3-text-grey"><span class="w3-opacity-min">Building Escape</span></h2>
   <p class="w3-content"><span class="w3-opacity-min">Download Building Escape here:<br /><br /><form class="w3-content" action="https://mega.nz/file/RNtHDKzB#DBWbOjJGHZXkNFbes9S7FxeB80TvI3IXeoBvTGJWSXY" method="GET" target="_blank"><button type="submit" class="btn btn-success">Building Escape Aplha v0.0.1</button></form></span></p>
   <h3 class="w3-content w3-large w3-text-black"><span class="w3-opacity-min">Register to recive notifications on the latest updates if you have ideas or would like to join my development team please visit the contact us page.</span></h3><br /><br />
   <div class="w3-center verticaltext w3-content w3-padding" style="max-width: 1500px;">
    <h1 class="w3-content w3-large"><span class="w3-opacity-min">Check out Building Escape 0.0.1 below</span></h1>
    <br />
    <video class="w3-image" playsinline autoplay muted width="750" src="../../vid/Building Escapevideo.mp4" type="video/mp4">
        Sorry, your browser does not support this video player.
    </video>
    <div class="w3-center verticaltext w3-content w3-padding" style="max-width: 1500px;">
    <h1 class="w3-content w3-large w3-text-black"><span></span></h1>
    <br />
    <footer>
    <div class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="footer">
    <img class="w3-image mb-0" src="../img/Websitebackground.png" alt="logo" width="1500" height="1000" id="footerimage">
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