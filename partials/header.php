<!DOCTYPE html>
<?php
$curent =  $_SERVER['REQUEST_URI'];
?>
<html>
    <head>
        <title>Maxin Inženjering</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan">
        <meta name="description" content="Preduzeće za konsalting, inženjering, trgovinu i proizvodnju">
        <meta name="keywords" content="inženjering,inžinjering,inzenjering, inzinjering, maxin, maksin,
              separacija, separacije, postrojenja, drobilice, drobilica, proizvodnja, trgovina">
              
              <?php
        if ($curent == '/index.php') {
            echo '<link rel="canonical" href="https://maxin-ing.rs" />';
        }
        ?>

        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Maxin Inženjering">
        <link rel="apple-touch-icon" href="apple-icon-144x144.png">


        <!--Android compatibility-->

        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="Maxin Inženjering">
        <link rel="icon" type="image/png" href="android-icon-192x192.png">

        <!--CSS FILES-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
        <link href="css/theme.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <!--HEADER START-->

        <header>
            <div id="top" class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand first-logo"  href="index.php"><img src="images/Logo.png" width="70" height="70" alt="Slika nije ucitana"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#main-nav" aria-controls="main-nav" 
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="main-nav">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item <?php
                            if ($curent == '/index.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="index.php">O NAMA<span class="sr-only">(current)</span></a>
                            </li>
                            
                            
                            <li class="nav-item ml-lg-4 <?php
                            if ($curent == '/ing.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="ing.php">INŽENJERING</a>
                            </li>
                            
                            
                            <li class="nav-item ml-lg-4 <?php
                            if ($curent == '/proizvodnja.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="proizvodnja.php">PROIZVODNJA</a>
                            </li>
                            
                            
                            <li class="nav-item ml-lg-4 <?php
                            if ($curent == '/drobilice.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="drobilice.php">DROBILICE</a>
                            </li>
                            
                            
                            <li class="nav-item ml-lg-4 <?php
                            if ($curent == '/separacije.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="separacije.php">SEPARACIJE</a>
                            </li>
                            
                            
                            <li class="nav-item ml-lg-4 <?php
                            if ($curent == '/kontakt.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="kontakt.php">KONTAKT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>



        