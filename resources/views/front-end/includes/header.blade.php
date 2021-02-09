<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous"/>
        <link href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/front-end/app.css') }}">
    </head>
    <body>

    <section class="header header-transparent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <ul class="main-menu">
                        <li>
                            <a href="">Brillen</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/front-end/stillo_logo.png') }}" class="img-fluid main-logo">
                    <span>STILLO</span>
                </div>
                <div class="col-md-4 text-right">
                    <ul class="shop-menu">
                        <li>
                            <a href="">Zoeken</a>
                        </li>
                        <li class="cart-item">
                            <a href="">Winkelwagen (0)</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>