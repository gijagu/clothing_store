<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/main.css">
        <link href="css/font-awesome.css" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 
    <!--here starts container-->
    <div class="container">
        
      <main class="gs-primary">

        <h3 class="text-muted">My Own Store Online</h3>
        <hr>
      <nav>

        <ul class="gs-navigation nav nav-tabs nav-justified" role="tablist">
            <li class="<?= $pedidos; ?>"><a href='petition.php' >Pedidos</a></li>
            <li class="<?= $clientes; ?>"><a href='customers.php' >Clientes</a></li>
            <li class="<?= $productos; ?>"><a href='product.php'>Productos</a></li>
            <li class="<?= $marcas; ?>"><a href='brand.php'>Marcas</a></li>
        </ul>

      </nav>