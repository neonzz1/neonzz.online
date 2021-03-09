@extends('Layout.Contact')

@section('content')
    <div class="w3-container w3-padding-32" id="">
        <div class="w3-center verticaltext w3-content w3-padding" style="max-width: 1500px;">
        <h1 class="w3-content w3-large"><span class="w3-opacity-min">Contact us using the form below </span></h1>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
            @php
                session()->forget('success');
            @endphp
        </div>
        <!--<div class="alert alert-success">
            <h2 class="w3-content w3-large">
            <span class="error">Serverside error please contact site admin</span>
            </h2>
        </div>-->

        <p class="non">{{ Session::all }}</p>
        @endif
        <form action="{{ route('contact.submit') }}" method="post">
            @csrf

            <div class="w3-content form-group">
                <label for="name">Name:</label>
                <textarea class="w3-content form-control1 @error('name') is-invalid @enderror" name="name" rows="1" id="name" placeholder="First and last name"></textarea>
                @error('name')
                    <span class="error">* <strong>{{ $message }}</strong> 
                    </span>
                @enderror
            </div>
            <div class="w3-content form-group">
                <label for="email">E-mail:</label>
                <textarea class="w3-content form-control1 @error('email') is-invalid @enderror" rows="1" name="email" id="email" placeholder="E-mail"></textarea>
                @error('email')
                    <span class="error">*<strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="w3-content form-group">
                <label for="Platform">What operating system are you using?</span>
                <select class="form-control @error('platform') is-invalid @enderror" name="platform" id="Platform">
                    <optgroup label="Windows">
                        <option>Win10 x64</option>
                        <option>Win10 x32</option>
                        <option>Win10 ARM</option>
                        <option>Win8/8.1 x64</option>
                        <option>Win8/8.1 x32</option>
                        <option>Win8/8.1 ARM</option>
                        <option>Win7 x64</option>
                        <option>Win7 x32</option>
                    </optgroup>
 
                    <optgroup label="Linux">
                        <option>GNU Linux distros x64</option>
                        <option>GNU Linux distros x32</option>
                        <option>GNU Linux distros ARM</option>
                        <option>GNOME Linux distros x64</option>
                        <option>GNOME Linux distros x32</option>
                        <option>GNOME Linux distros ARM</option>
                        <option>KDE Linux distros x64</option>
                        <option>KDE Linux distros x32</option>
                        <option>KDE Linux distros ARM</option>
                    </optgroup>
 
                    <optgroup label="Mac OSX">
                        <option>MAC OSX x64</option>
                        <option>MAC OSX x32</option>
                        <option>MAC OSX ARM</option>
                    </optgroup>
                </select>
                @error('platform')
                    <span class="error">*<strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="w3-content form-group">
            <label>Would you like to join my development team?</label>
            <select class="form-control @error('devans') is-invalid @enderror" id="devans" name="devans">
                <optgroup label="Development">
                    <option>Yes</option>
                    <option>No</option>
                </optgroup>
            </select>
            @error('devans')
                    <span class="error">*<strong>{{ $message }}</strong>
                    </span>
            @enderror
            </div>
            <div class="w3-content form-group">
                <label for="Comment">Comment:</label>
                <textarea class="w3-content form-control1 @error('Comment') is-invalid @enderror" name="Comment" rows="8" id="Comment" placeholder="Your comment here:"></textarea>
                @error('Comment')
                    <span class="error">*<strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="w3-content form-group">
                <span class="w3-content"><button type="submit" class="btn btn-success">Submit</button></span>
            </div>
        </form>
    </div>
    </div>
    </div>
    <footer>
    <p style="text-align:center">© Neonzz 2020 Powered by w3</p>
   </footer>
   @endsection
</body>
</html>
