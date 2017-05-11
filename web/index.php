
<?php
    $data = file_get_contents('http://partnerapi.funda.nl/feeds/Aanbod.svc/005e7c1d6f6c4f9bacac16760286e3cd/?type=koop&zo=/haarlem/tuin/');
    $xml=simplexml_load_string($data);

    $kamers = $xml->Objects->Object[0]->AantalKamers;
    $foto = $xml->Objects->Object[0]->Foto;
?>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>Funda development test</title>

        <meta name="description" content="My Funda development test">
        <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
        <meta name="theme-color" content="" />

        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <img src=<?= $foto ?> width='100' />
        <h1><?= $kamers; ?></h1>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
    </body>
</html>
