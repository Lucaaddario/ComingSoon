<x-layout>
    {{-- ERRORE ADMIN AUTH MIDDLEWARE --}}
    @if(session('error'))
    <div class="alert alert-danger mb-0" id="errorTimeOut">
        {{ session('error') }}
    </div>
    @endif
    {{-- INIZIO HEADER --}}
    <header>
        <header class="p-5" style="background: linear-gradient(rgba(0, 0, 0, 0.432), rgb(0, 0, 0)), url('media/header_default.jpg'); min-height: 85vh; max-height: 85vh; background-repeat: no-repeat; background-position: center center; background-size: 100% 100%;"  id="header">

            <div class="row text-white text-start text-lg-end ms-2 ms-lg-0 me-lg-3 fs-3">
                <div class="col-12">
                    <a href="" class="text-decoration-none nav-link d-inline">
                        <i class="fa-brands fa-square-instagram mx-1 shadow "></i>
                    </a>

                    <a href="" class="text-decoration-none nav-link d-inline ">
                        <i class="fa-brands fa-telegram mx-1 shadow "></i>
                    </a>

                    <a href="" class="text-decoration-none nav-link d-inline ">
                        <i class="fa-brands fa-square-twitter mx-1 shadow "></i>
                    </a>
                </div>
            </div>

            <div class="d-flex justify-content-start align-items-center h-100">
                <div class="text-white contentheader">
                    <h1 class="fw-bold ms-2 display-6 text-uppercase" id="titleHeader">Coming Soon</h1>
                    <div class="col-10 col-md-8 col-lg-6 col-xl-4 col-xl-4">
                        <p class="ms-3 mt-3 header-content" id="contentHeader">
                            "Benvenuto nel mondo affascinante dell'anime e delle serie TV più celebri! Il nostro sito è la destinazione ideale per gli amanti dell'animazione giapponese e delle migliori produzioni televisive, offrendoti un'esperienza unica. @if (Auth::user()) Benvenuto {{Auth::user()->name}}! @endif
                        </p>
                        </div>
                        <a class="btn btn-header btn-light ms-3 mt-2 px-3 py-2" href="#!" role="button">
                            <i class="fa-solid fa-play text-black me-2"></i>
                            Riproduci
                        </a>
                        <a class="btn btn-header btn-success ms-3 mt-2 px-3 py-2" href="#!" role="button">
                            Informazioni
                        </a>
                    </div>
                </div>

                <!-- SWIPER ULTIMI TITOLI --->
                <div class="swiper mySwiper p-3 mt-2">
                    <h5 class="text-white ms-2">Ultimi Titoli</h5>
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                        <div class="swiper-slide me-5">
                            <a href="#" data-title="{{$product->title}}" data-desc="{{$product->description}}" data-image="{{Storage::url($product->image)}}" id="swiperData">
                                <img src="{{Storage::url($product->image)}}"/>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </header>
        {{-- FINE HEADER --}}

        <section class="container-fluid bg-lastfilm p-3">
            <div class="row p-4">
                <!-- SWIPER ULTIMI FILM-->
                <div class="col-12 p-3">
                    <div class="swiper mySwiper p-3 mt-2">
                        <h5 class="text-white ms-2">Ultimi Film</h5>
                        <div class="swiper-wrapper">
                            @foreach ($productsByFilms as $product)
                            <div class="swiper-slide me-5">
                                <a href="#" data-title="{{$product->title}}" data-desc="{{$product->description}}" data-image="{{Storage::url($product->image)}}" id="swiperData">
                                    <img src="{{Storage::url($product->image)}}"/>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- SWIPER ULTIME SERIES-->
                <div class="col-12 p-3 ">
                    <div class="swiper mySwiper p-3 mt-2">
                        <h5 class="text-white ms-2">Ultime Serie TV</h5>
                        <div class="swiper-wrapper">
                            @foreach ($productsBySeries as $product)
                            <div class="swiper-slide me-5">
                                <a href="#" data-title="{{$product->title}}" data-desc="{{$product->description}}" data-image="{{Storage::url($product->image)}}" id="swiperData">
                                    <img src="{{Storage::url($product->image)}}"/>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <!-- SWIPER ULTIME ANIME-->
                <div class="col-12 p-3 ">
                    <div class="swiper mySwiper p-3 mt-2">
                        <h5 class="text-white ms-2">Ultimi Anime</h5>
                        <div class="swiper-wrapper">
                            @foreach ($productsByAnime as $product)
                            <div class="swiper-slide me-5">
                                <a href="#" data-title="{{$product->title}}" data-desc="{{$product->description}}" data-image="{{Storage::url($product->image)}}" id="swiperData">
                                    <img src="{{Storage::url($product->image)}}"/>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SEZIONE ALTRI TITOLI --}}
</x-layout>