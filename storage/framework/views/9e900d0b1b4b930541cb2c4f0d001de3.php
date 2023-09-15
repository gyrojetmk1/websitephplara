<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="/css/basestyle.css">
    <link rel="stylesheet" href="/css/popup.css">
    <?php echo $__env->yieldContent("optionalcss"); ?>

    <title>Home</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="website is still in development" property="og:description">
    <link rel="stylesheet" media="screen and (max-width: 699px)" href="/css/mobilestyle.css">

    <script src="/js/main.js" defer=""></script>
</head>


<body>
    <?php echo $__env->yieldContent("extrahtml"); ?>

    <div class="header">
        

        <button id="menubutton" class=""><img id="mbimg" onclick="menu()" src="/images/hamburger.png"></button>

        <div class="tinhead" style="padding-left: 14px;">
            <h2>Julio's website</h2>
        </div>

        <a href="/" style="margin-top: 0px;">Home</a><a href="/tests">Tests</a>

        <?php if(auth()->guard()->check()): ?>
            
            <a href="/logout">Logout</a>
            <p id="dusr"><?php echo e(auth()->user()->username); ?></p>
            <?php if(auth()->user()->admin): ?>
                <a href="/admin/upload" onclick="menu()">Upload</a>
                <a href="/admin/delete" onclick="menu()">Delete</a>
            <?php endif; ?>
        <?php else: ?>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        <?php endif; ?>

    </div>

    <div class="linkholder closed" id="linkholder">

        <div class="links">
            <a href="/" onclick="menu()" style="margin-top: 0px;">Home</a>
            <a href="/tests" onclick="menu()">Tests</a>
            <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->admin): ?>
                    <a href="/admin/upload" onclick="menu()">Upload</a>
                    <a href="/admin/delete" onclick="menu()">Delete</a>
                <?php endif; ?>
                <a href="/logout" onclick="menu()">Logout</a>
                <p id="dmusr"><?php echo e(auth()->user()->username); ?></p>
            <?php else: ?>
                <a href="/login" onclick="menu()">Login</a>
                <a href="/register" onclick="menu()">Register</a>
            <?php endif; ?>
        </div>

    </div>


    <div class="background">
        <div class="content">
            <?php echo $__env->yieldContent("content"); ?>
        </div>

        <div class="footer">
            <?php echo $__env->yieldContent("footer"); ?>
        </div>
    </div>


    <div id="modal" class="modal" style="display: none;">
        <div class="modalcontainer">

            <div class="modalh">
                <span class="closem">×</span>
                <?php echo $__env->yieldContent("modaltitle"); ?>
            </div>

            <div class="modalcon">
                <?php echo $__env->yieldContent("modalcontent"); ?>
            </div>

        </div>
    </div>

    <?php echo $__env->yieldContent("modal"); ?>

</body><?php /**PATH /home/pyro/Desktop/betterwebsitething/resources/views/layout.blade.php ENDPATH**/ ?>