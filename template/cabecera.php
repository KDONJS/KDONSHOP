<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Color Admin | POS - Customer Order System</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="assets/css/vendor.min.css" rel="stylesheet" />
<link href="assets/css/facebook/app.min.css" rel="stylesheet" />

</head>
<body class='pace-top'>

<div id="loader" class="app-loader">
<span class="spinner"></span>
</div>


<div id="app" class="app app-content-full-height app-without-sidebar app-without-header bg-white">

<div id="content" class="app-content p-0">

<div class="pos pos-customer" id="pos-customer">

<div class="pos-menu">
<div class="logo">
<a href="index.php">
<div class="logo-img"><img src="../img/POS/logo.svg" /></div>
<div class="logo-text">KDON|SHOP</div>
</a>
</div>
<div class="nav-container">
<div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link " href="productos.php">
<i class="fa fa-fw fa-utensils me-1 ms-n2"></i> Todo
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" data-filter="meat">
<i class="fa fa-fw fa-drumstick-bite me-1 ms-n2"></i> Meat
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" data-filter="burger">
<i class="fa fa-fw fa-hamburger me-1 ms-n2"></i> Burger
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" data-filter="pizza">
<i class="fa fa-fw fa-pizza-slice me-1 ms-n2"></i> Pizza
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" data-filter="drinks">
<i class="fa fa-fw fa-cocktail me-1 ms-n2"></i> Drinks
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#" data-filter="desserts">
<i class="fa fa-fw fa-ice-cream me-1 ms-n2"></i> Desserts
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="administrador/index.php">
<i class="fa fa-user-circle me-1 ms-n2"></i>Administrador
</a>
</li>
</ul>
</div>
</div>
</div>

<div class="pos-content">
<div class="pos-content-container" data-scrollbar="true" data-height="100%" data-skip-mobile="true">
<div class="product-row">