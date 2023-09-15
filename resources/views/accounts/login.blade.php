@extends('layout')

@section('optionalcss')
    <link rel="stylesheet" href="/css/loginstyle.css">
@endsection

@section('extrahtml')
    @if (session()->has('info'))

        @section("modalcontent")
            <p>{{session()->get('info')}}</p>
        @endsection

        <body onload="showmodal()">
    @endif

    @if ($errors->any())
        @section("modalcontent")

            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

        @endsection
        
        <body onload="showmodal()">
    @endif

@endsection

@section('content') {{-- Todo: make the code pretty and compact this down --}}
<form action="/login" method="POST">
    @csrf
    <div class="container">
      <h2>Log in</h2>
      <hr>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" maxlength="24" minlength="3" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" minlength="8" maxlength="255" name="password" id="password" required>
      <hr>

      <button type="submit" class="registerandloginbtn"><b>Login</b></button>
    </div>
  </form>
@endsection

@section("modaltitle")
    <h2 id="mht">Info</h2>
@endsection 
