@extends('layout')

@section('extrahtml')
    @if (session()->has('info'))
        <body onload="showmodal()">
    @endif
@endsection

@section('content')
    <p>{{$content}}</p>
@endsection

@section("footer")
    <p>{{$footer}}</p>
@endsection

@section("modaltitle")

    <h2 id="mht">Info</h2>

    @section("modalcontent")
        <p>{{session()->get('info')}}</p>
    @endsection
@endsection 
