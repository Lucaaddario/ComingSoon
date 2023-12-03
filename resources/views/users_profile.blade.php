<x-layout>

    <header class="p-3 bg-dark container-fluid vh-100">
        <div class="row mt-4 pricing-header mx-auto text-center text-white justify-content-center">
            <div class="col-12">
                <h1 class="display-6 display-md fw-normal text-uppercase headerpremium">Il tuo profilo</h1>
            </div>
        </div>



        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-10 col-lg-5 ">
                <img src="{{Storage::url(Auth::user()->image)}}" alt="" class="profileImage ">
                </div>
            </div>

            <div class="row justify-content-center text-center flex-column align-items-center">
                <div class="col-12 col-md-10 col-lg-5">
                    <p class="fs-5 text-white ppremium mt-5 bg-success text-white-50">
                        Nome:
                        <span class="mx-3 fs-6 text-white">
                            {{Auth::user()->name}}
                        </span>
                        Cognome:
                        <span class="mx-3 fs-6 text-white">
                            {{Auth::user()->surname}}
                        </span>
                    </p>
                </div>

                <div class="col-12 col-md-10 col-lg-5 ">
                    <p class="fs-5 text-white ppremium bg-success text-white-50">
                        Data di Nascita:
                        <span class="mx-3 fs-6 text-white">
                            {{Auth::user()->birthday}}
                        </span>
                        Genere:
                        <span class="mx-3 fs-6 text-white">
                            {{Auth::user()->gender}}
                        </span>
                    </p>
                </div>

                <div class="col-12 col-md-10 col-lg-5 ">
                    <p class="fs-5 text-white ppremium bg-success text-white-50">
                        Username:
                        <span class="mx-3 fs-6 text-white">
                            {{Auth::user()->username}}
                        </span>
                    </p>
                </div>

                <div class="col-12 col-md-10 col-lg-5 ">
                    <p class="fs-5 text-white ppremium bg-success text-white-50">
                        Email:
                        <span class="mx-3 fs-6 text-white">
                            {{Auth::user()->email}}
                        </span>
                    </p>
                </div>

                <div class="col-12 col-md-10 col-lg-5 ">
                    <p class="fs-5 text-white ppremium bg-success text-white-50">
                        Account creato il:
                        <span class="mx-3 fs-6 text-white">
                            {{Auth::user()->created_at}}
                        </span>
                    </p>
                </div>

                <div class="col-12 col-md-10 col-lg-5 ">
                    <p class="fs-5 text-white ppremium bg-success text-white-50">
                        Tipo di utente:
                        <span class="mx-3 fs-6 text-white">
                            @if (Auth::user()->isAdmin===1)
                            Amministratore
                            @else
                            Utente
                            @endif
                        </span>
                    </p>
                </div>

                <div class="col-12 col-md-10 col-lg-5 mt-5 ">
                    <a href="{{route('edit_profile')}}" class="text-decoration-none me-3">
                        <button class="btn btn-warning">Modifica Profilo</button>
                    </a>
                    <a href="">
                        <button class="btn btn-danger">Elimina Profilo</button>
                    </a>
                </div>


            </div>




        </header>


    </x-layout>