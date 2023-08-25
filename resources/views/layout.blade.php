<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="/css/basestyle.css">
    <link rel="stylesheet" href="/css/popup.css">

    <title>Home</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="website is still in development" property="og:description">
    <link rel="stylesheet" media="screen and (max-width: 699px)" href="/css/mobilestyle.css">

    <script src="/js/main.js" defer=""></script>
</head>


<body>

    <div class="header">

        <button id="menubutton" class=""><img id="mbimg" onclick="menu()" src="/images/hamburger.png"></button>

        <div class="tinhead" style="padding-left: 14px;">
            <h2>Julio's website</h2>
        </div>

        <a href="/" style="margin-top: 0px;">Home</a><a href="/tests">Tests</a>

    </div>

    <div class="linkholder closed" id="linkholder">

        <div class="links">
            <a href="/" onclick="menu()" style="margin-top: 0px;">Home</a>
            <a href="/tests" onclick="menu()">Tests</a>
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