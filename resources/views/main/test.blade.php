@extends('layout')


@section('content') 
    <p>im going to use this for testing ui and other stuff</p>
    <button id="btn" onclick="showmodal()">Popup 1</button>
@endsection


@section("footer")
    <p>footer</p>
@endsection


@section("modaltitle")

    <h2 id="mht">Time</h2>

    @section("modalcontent")
        <p id="time">If you're not seeing the time something went wrong</p>
    @endsection

@endsection 

