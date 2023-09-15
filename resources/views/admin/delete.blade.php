@extends('layout')

@section('optionalcss')
    <link rel="stylesheet" href="/css/deletestyle.css">
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
            <h3>Delete posts</h3>
            <div class="posts" id='posts'>

                @foreach ($posts as $post)

                    <p class="POST">{{$post->content}} <br> {{$post->footer}}</p>
                    <b>ID: {{$post->id}}</b> |

                    <form action="/admin/delete" method="post" id="forumborum">

                        @csrf
                        <input type="hidden" name="id" value="{{$post->id}}"/>
                        <button type="submit" name="delete" id="delete">Delete</button>
                        
                    </form>
                    <hr>
                @endforeach
                
            </div>
@endsection

@section("modaltitle")
    <h2 id="mht">Info</h2>
@endsection 
