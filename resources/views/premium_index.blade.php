<x-layout>

    <header class="p-3 bg-dark container-fluid">
        <div class="row mt-5 pricing-header mx-auto text-center text-white justify-content-center">
            <div class="col-12">
                <h1 class="display-6 display-md fw-normal text-uppercase headerpremium">abbonati a coming soon</h1>
            </div>
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-10 col-lg-5 ">
                <p class="fs-6 text-white-50 ppremium">
                    Unisciti a noi nel mondo avvincente della sezione Premium e scopri un livello completamente nuovo di intrattenimento e assistenza personalizzata! Con soli 2 euro al mese, sblocca vantaggi esclusivi che renderanno la tua esperienza sul nostro sito ancora più straordinaria.
                </p>
            </div>
        </div>
    </header>

    <section class="p-5 bg-dark ">
        <div class="row row-cols-1 row-cols-xl-2 mb-3 text-center justify-content-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm premiumcol">
                    <div class="card-header py-3 bg-success" >
                        <h4 class="my-0 fw-normal text-white-50">Standard</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center p-5">
                        <h1 class="card-title pricing-card-title bg-dark text-white rounded-2 fs-5 p-3 ">€0/mese</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><span class="iconaPremium">✔</span> Serie TV / Films</li>
                            <li><span class="iconaPremium">✔</span> Trailer Prodotti</li>
                            <li><span class="iconaPremiumX">✗</span> Sezione Anime</li>
                            <li><span class="iconaPremiumX">✗</span> Assistenza chat</li>
                        </ul>
                        <div class="d-flex justify-content-center ">
                            <button type="button" class="w-75 p-3 shadow btn btn-success">@if(Auth::user()) Torna ad Home @else Registrati @endif</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm premiumcol">
                    <div class="card-header py-3 bg-success" >
                        <h4 class="my-0 fw-normal text-white-50">Premium</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center p-5">
                        <h1 class="card-title pricing-card-title bg-dark text-white rounded-2 fs-5 p-3 ">€2/mese</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><span class="iconaPremium">✔</span> Serie TV / Films</li>
                            <li><span class="iconaPremium">✔</span> Sezione Anime</li>
                            <li><span class="iconaPremium">✔</span> Trailer Prodotti</li>
                            <li><span class="iconaPremium">✔</span> Assistenza chat</li>
                        </ul>
                        <div class="d-flex justify-content-center ">
                            <button type="button" class="w-75 p-3 shadow btn btn-success">@if(Auth::user()) Passa a Premium @else Registrati @endif</button>
                        </div>
                    </div>
                </div>
            </section>


        </x-layout>