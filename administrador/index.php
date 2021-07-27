<?php
session_start();

if ($_POST) {
   if(($_POST['usuario']=="Yorlin")&&($_POST['contraseña']=="root")){

    $_SESSION['usuario']="ok";
    $_SESSION['nombreUsuario']="Yorlin";
    header('location:inicio.php');
    }else{
        $mensaje="Error: contraseña o usuario incorrectos";
    }
   
    # code...
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>KDON|SHOP</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../assets/css/facebook/app.min.css" rel="stylesheet" />

</head>

<body class='pace-top'>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>


    <div id="app" class="app">

        <div class="login login-v2 fw-bold">

            <div class="login-cover">
                <div class="login-cover-img" style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)"
                    data-id="login-cover-image"></div>
                <div class="login-cover-bg"></div>
            </div>


            <div class="login-container">

                <div class="login-header">
                    <div class="brand">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-lock"></i> <b>   KDON</b> |SHOP|
                        </div>
                        <small>Compartiendo las mejores experiencias!</small>
                    </div>
                    <!--<div class="icon">
                        <i class="fa fa-lock"></i>
                    </div>-->
                </div>


                <div class="login-content">
                    <form method="POST">
                        <div class="form-floating mb-20px">
                            <input type="text" class="form-control fs-13px h-45px border-0" name="usuario" placeholder="Ingresa tu usuario">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-floating mb-20px">
                            <input type="password" class="form-control fs-13px h-45px border-0" name="contraseña" placeholder="Password">
                        </div>
                        <div class="mb-20px">
                        <button type="submit" class="btn btn-success d-block w-100 h-45px btn-lg">Ingresar</button>
                        </div>                    
                    </form>
                </div>

            </div>

        </div>


        <div class="login-bg-list clearfix">
            <div class="login-bg-list-item active"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-17.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-16.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-16.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-15.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-15.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-14.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-14.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-13.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-13.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-12.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-12.jpg)"></a></div>
        </div>


    <script src="../assets/js/vendor.min.js" type="6231d41171de8be9416c431a-text/javascript"></script>
    <script src="../assets/js/app.min.js" type="6231d41171de8be9416c431a-text/javascript"></script>
    <script src="../assets/js/theme/facebook.min.js" type="6231d41171de8be9416c431a-text/javascript"></script>


    <script src="../assets/js/demo/login-v2.demo.js" type="6231d41171de8be9416c431a-text/javascript"></script>

    <script type="6231d41171de8be9416c431a-text/javascript">
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-53034621-1', 'auto');
    ga('send', 'pageview');
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="6231d41171de8be9416c431a-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"67380091ab6f971c","version":"2021.7.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":10}'>
    </script>
</body>

</html>