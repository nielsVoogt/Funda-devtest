<?php
    $data = file_get_contents('http://partnerapi.funda.nl/feeds/Aanbod.svc/005e7c1d6f6c4f9bacac16760286e3cd/?type=koop&zo=/haarlem/tuin/');
    $xml=simplexml_load_string($data);
    // print_r($xml->Objects->Object[1])
?>

<?php
    $detail = json_decode(file_get_contents('http://partnerapi.funda.nl/feeds/Aanbod.svc/json/detail/005e7c1d6f6c4f9bacac16760286e3cd/koop/fd2d6326-0957-451c-b306-be450fcbf50b/'));
    $placed = preg_replace("/[^0-9]/","",$detail->AangebodenSinds);
?>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>Funda development test</title>

        <meta name="description" content="My Funda development test">
        <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
        <meta name="theme-color" content="#F7A100" />

        <link rel="stylesheet" href="../styling/css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <div class="funda-header">
            <div class="container">
                <img alt="funda logo" src="img/fundawonen-logo.svg" />
            </div>
        </div>

        <div class="tile-container" id="tile-container">
            <?php for ($i = 0; $i <= 10; $i++) : ?>
                <div class="funda-tile">
                    <div class="funda-tile__top">
                        <div class="funda-tile__top__labels">
                            <div class="label label--new">
                                Nieuw
                            </div>
                        </div>
                        <div
                            class="property-image"
                            style="background: url(<?= $xml->Objects->Object[$i]->FotoMedium ?>) no-repeat center center/cover;"
                        ></div>
                        <div class="property-details">
                            <div class="property-details__details">
                                <h2 class="property-details__primary">
                                    <?= $xml->Objects->Object[$i]->PrijsGeformatteerdHtml ?>
                                </h2>
                                <small class="property-details__secondary">
                                    <?= $xml->Objects->Object[$i]->Oppervlakte ?> / <?= $xml->Objects->Object[$i]->Perceeloppervlakte ?> m²
                                    <?= $xml->Objects->Object[$i]->AantalKamers ?> Kamers
                                </small>
                            </div>
                            <div class="property-details__button">
                                <a href="" class="zoom-picture _funda-tile-zoom-picture">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                    >
                                        <path d="M23.81 21.646l-6.206-6.205c1.168-1.604 1.857-3.578 1.857-5.71C19.46 4.365 15.098 0 9.73 0 4.366 0 0 4.365 0 9.73c0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698L21.455 24l2.354-2.354zM2.853 9.73c0-3.792 3.085-6.877 6.877-6.877S16.61 5.938 16.61 9.73s-3.085 6.877-6.877 6.877-6.876-3.085-6.876-6.877z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="funda-tile__center">
                        <div class="property-details">
                            <div class="property-details__details">
                                <h2 class="property-details__primary">
                                    <?= $xml->Objects->Object[$i]->Adres ?>
                                </h2>
                                <small class="property-details__secondary">
                                    <?= chunk_split($xml->Objects->Object[$i]->Postcode, 4, " "); ?>
                                </small>
                            </div>
                            <div class="property-details__button">
                                <a href="_funda-tile-show-location">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                    >
                                        <path d="M12 0C6.478 0 2 4.395 2 9.815 2 15.32 6.375 19.085 12 24c5.625-4.916 10-8.68 10-14.185C22 4.395 17.522 0 12 0zm1 17.932V14h-2v3.932C7.382 17.48 4.52 14.617 4.07 11H8V9H4.07C4.52 5.383 7.382 2.52 11 2.07V6h2V2.07c3.617.45 6.48 3.313 6.93 6.93H16v2h3.93c-.45 3.617-3.313 6.48-6.93 6.932z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="property-content">
                            <div class="property-content__description">
                                <div class="property-content__description__inner">
                                    <p><?php
                                            $detail = json_decode(file_get_contents('http://partnerapi.funda.nl/feeds/Aanbod.svc/json/detail/005e7c1d6f6c4f9bacac16760286e3cd/koop/' . $xml->Objects->Object[$i]->Id . '/'));
                                            echo $detail->VolledigeOmschrijving;
                                        ?></p>
                                </div>
                            </div>
                            <div class="property-content__additional-information">
                               as dsad saasd ads
                            </div>
                        </div>
                    </div>
                    <div class="funda-tile__bottom">
                        <a href="#" class="btn btn--transparent _funda-tile-show-more">
                            <span class="show-more-content">Meer informatie</span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                            >
                                <path d="M6.456 5.384L8.702 3.18 17.48 12l-8.778 8.82-2.246-2.204L13.07 12"/>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endfor ?>
        </div>

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/lightbox.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
