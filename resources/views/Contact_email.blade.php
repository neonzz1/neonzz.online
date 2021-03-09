@extends('layout.app')

@section('content')
<h2>Hello Admin,</h2>
You received an email from : {{ $name }}
Here are the details:
<b>Name:</b> {{ $name }}
<b>Email:</b> {{ $email }}
<b>Platform:</b> {{ $platform }}
<b>Subject:</b> Used Contact Page
<b>Message:</b> {{ $Comment }}
Thank You
@endsection