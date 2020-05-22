<?php include('header.php'); ?>
<div class="wrapper">
    <form action="index.php" method="post">
        <div id="container">
            <?php if (isset($login_status) && false == $login_status) : ?>
                <div class="error">
                    <p> Your username and password are incorrect. Try again.</p>
                </div>
        </div>
    <?php endif; ?>
    <link href="signin.css" rel="stylesheet">
    <link id="avast_os_ext_custom_font" href="chrome-extension://eofcbnmajmjmplflapaojjnihcjkigck/common/ui/fonts/fonts.css" rel="stylesheet" type="text/css">
    </head>
    <body class="text-center" style="">
            <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Enter username" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Enter password" required="">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" onClick="login()" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">Daniel Ramos © 2017-2020</p>
    </form>
    </body>
        <?php include('footer.php'); ?>