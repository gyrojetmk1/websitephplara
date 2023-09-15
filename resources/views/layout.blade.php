<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="/css/basestyle.css">
    <link rel="stylesheet" href="/css/popup.css">
    @yield("optionalcss")

    <title>Home</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="website is still in development" property="og:description">
    <link rel="stylesheet" media="screen and (max-width: 699px)" href="/css/mobilestyle.css">

    <script src="/js/main.js" defer=""></script>
</head>


<body>
    @yield("extrahtml")

    <div class="header">
        

        <button id="menubutton" class=""><img id="mbimg" onclick="menu()" src="/images/hamburger.png"></button>

        <div class="tinhead" style="padding-left: 14px;">
            <h2>Julio's website</h2>
        </div>

        <a href="/" style="margin-top: 0px;">Home</a><a href="/tests">Tests</a>

        @auth
            
            <a href="/logout">Logout</a>
            <p id="dusr">{{auth()->user()->username}}</p>
            @if (auth()->user()->admin)
                <a href="/admin/upload" onclick="menu()">Upload</a>
                <a href="/admin/delete" onclick="menu()">Delete</a>
            @endif
        @else
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        @endauth

    </div>

    <div class="linkholder closed" id="linkholder">

        <div class="links">
            <a href="/" onclick="menu()" style="margin-top: 0px;">Home</a>
            <a href="/tests" onclick="menu()">Tests</a>
            @auth
                @if (auth()->user()->admin)
                    <a href="/admin/upload" onclick="menu()">Upload</a>
                    <a href="/admin/delete" onclick="menu()">Delete</a>
                @endif
                <a href="/logout" onclick="menu()">Logout</a>
                <p id="dmusr">{{auth()->user()->username}}</p>
            @else
                <a href="/login" onclick="menu()">Login</a>
                <a href="/register" onclick="menu()">Register</a>
            @endauth
        </div>

    </div>


    <div class="background">
        <div class="content">
            @yield("content")
        </div>

        <div class="footer">
            @yield("footer")
        </div>
    </div>


    <div id="modal" class="modal" style="display: none;">
        <div class="modalcontainer">

            <div class="modalh">
                <span class="closem">×</span>
                @yield("modaltitle")
            </div>

            <div class="modalcon">
                @yield("modalcontent")
            </div>

        </div>
    </div>

    @yield("modal")

</body>