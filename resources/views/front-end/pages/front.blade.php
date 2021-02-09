@extends('front-end.layouts.default')

@section('content')

    <section class="front-attention">
        <div class="content">
            <small>STILLO</small>
            <h1>Luxe brillen</h1>
        </div>
        <span class="attention-down">
            <i class="fal fa-chevron-down"></i>
        </button>
    </section>
    
    <section class="usp-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="usp-item">
                        <div class="icon">
                            <i class="far fa-house-return"></i>
                        </div>
                        <span>
                            14 dagen gratis retouren
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="usp-item ml-4">
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <span>
                            Een jaar garantie
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="usp-item">
                        <div class="icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <span>
                            24/7 klantenservice
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="choice text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="" class="button button-main">
                        Brillen voor mannen
                    </a>
                    <a href="" class="button button-main ml-4">
                        Brillen voor vrouwen
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="recommended text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <small>Aanbevolen collectie</small>
                    <h4>De STILLO collectie</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-1.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Silver</a>
                    <span class="money">€94 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-2.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Green</a>
                    <span class="money">€90 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-3.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Brown</a>
                    <span class="money">€85 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-4.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Purple</a>
                    <span class="money">€54 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="" class="button button-main collectie-button">
                        Bekijk de collectie
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="recommended text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <small>Aanbevolen collectie</small>
                    <h4>STILLO herenbrillen</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-5.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Silver</a>
                    <span class="money">€94 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-6.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Green</a>
                    <span class="money">€90 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-7.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Brown</a>
                    <span class="money">€85 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-8.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Purple</a>
                    <span class="money">€54 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="" class="button button-main collectie-button">
                        Bekijk de collectie
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="recommended text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <small>Aanbevolen collectie</small>
                    <h4>STILLO damesbrillen</h3>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-5.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Silver</a>
                    <span class="money">€94 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-6.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Green</a>
                    <span class="money">€90 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-7.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Brown</a>
                    <span class="money">€85 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img src="{{ asset('images/front-end/bril-8.jpg') }}" class="img-fluid">
                    </a>
                    <a href="">STILLO Angel Edition - Purple</a>
                    <span class="money">€54 EUR</span>
                    <a href="" class="button button-main">
                        Bestel nu <i class="fas fa-caret-right"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="" class="button button-main collectie-button">
                        Bekijk de collectie
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="front-categories">
        <div class="category-item">
            <div class="content">
                <h5>STILLO</h5>
                <h2>Heren eyewear</h2>
                <a href="" class="button button-secondary">
                    Bekijk de collectie
                </a>
            </div>
        </div>
        <div class="category-item">
            <div class="content">
                <h5>STILLO</h5>
                <h2>Dames eyewear</h2>
                <a href="" class="button button-secondary">
                    Bekijk de collectie
                </a>
            </div>
        </div>
    </section>

    <section class="introduction">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/front-end/introduction-home.jpg') }}" class="img-fluid">
                </div>
                <div class="col-md-6 my-auto">
                    <div class="content">
                        <h3>Ons verhaal</h3>
                        <h2>Nooit verstoren. Altijd vernieuwen en verfijnen van de traditie.</h2>
                        <p>STILLO is een volledig onafhankelijke horlogefabrikant - en we zijn er trots op dat we niet in handen zijn van een groot bedrijf. Het geeft ons de vrijheid om de horloges die ons aanspreken te ontwerpen en te bewerken, en om hogere prijsniveaus uit te dagen met uitstekend vakmanschap, afwerking en ontwerp in onze gehele horlogelijn.</p>
                        <a href="">Lees verder</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="choice text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="" class="button button-main">
                        Brillen voor mannen
                    </a>
                    <a href="" class="button button-main ml-4">
                        Brillen voor vrouwen
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop