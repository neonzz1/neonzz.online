@extends('Layout.projects')

@section('Content')

<div class="w3-center w3-content w3-padding" style="max-width:1564px">
        <h2 class="w3-content w3-xlarge w3-text-grey"><span class="w3-opacity-min">About Neonzz.online and what we stand for</span></h2>
   </div>
   <div class="w3-content w3-padding" style="max-width:1546px">
        <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-botton">
                <div class="w3-display-container">
                    <h2 class="w3-content w3-large"><span class="w3-opacity-min">Meet the team</span></h2>
                    <ul>
                        <li class="w3-content w3-padding"><span>Daniel aka Neonzz owner and lead developer</span></li>
                    </ul>
                </div>
            </div>
        </div>
            <h4 class="w3-content w3-large"><span class="w3-opacity-min">What We stand for</span></h4>
            <br />
            <p class="w3-content w3-medium"><span class="w3-opacity-min">Our passion is making games learning different coding languages, personally I got into coding when I was young as a way to express my creativity, now I'd like to open that up to other people with the skills to join art, code sound what ever your passion is we like to let people flurish just a little, on the projects on this website I have used both Python and UE4(c++) to cretae the games you see, currently only my python work is avalible as I have lost the files to building escape and battle tank is not ready and is far to buggy, to enjoy currently we are a one man team.</span></p>
    </div>
    <footer>
        <p style="text-align:center; border: 1px solid black">© Neonzz 2020 Powered by w3</p>
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