<x-layout>

    <header class="p-3 bg-dark container-fluid vh-100">
        <div class="row mt-4 pricing-header mx-auto text-center text-white justify-content-center">
            <div class="col-12">
                <h1 class="display-6 display-md fw-normal text-uppercase headerpremium">@if(Auth::user() && Auth::user()->username === $user->username) Il tuo profilo @else Il profilo di {{$user->username}}@endif</h1>
            </div>
        </div>



        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-10 col-lg-5 ">
                <img src="{{Storage::url($user->image)}}" alt="" class="profileImage ">
            </div>
        </div>

        <div class="row justify-content-center text-center flex-column align-items-center">
            <div class="col-12 col-md-10 col-lg-5">
                <p class="fs-5 text-white ppremium mt-5 bg-success text-white-50">
                    Nome:
                    <span class="mx-3 fs-6 text-white">
                        {{$user->name}}
                    </span>
                    Cognome:
                    <span class="mx-3 fs-6 text-white">
                        {{$user->surname}}
                    </span>
                </p>
            </div>

            <div class="col-12 col-md-10 col-lg-5 ">
                <p class="fs-5 text-white ppremium bg-success text-white-50">
                    Data di Nascita:
                    <span class="mx-3 fs-6 text-white">
                        {{$user->birthday}}
                    </span>
                    Genere:
                    <span class="mx-3 fs-6 text-white">
                        {{$user->gender}}
                    </span>
                </p>
            </div>

            <div class="col-12 col-md-10 col-lg-5 ">
                <p class="fs-5 text-white ppremium bg-success text-white-50">
                    Username:
                    <span class="mx-3 fs-6 text-white">
                        {{$user->username}}
                    </span>
                </p>
            </div>

            <div class="col-12 col-md-10 col-lg-5 ">
                <p class="fs-5 text-white ppremium bg-success text-white-50">
                    Email:
                    <span class="mx-3 fs-6 text-white">
                        {{$user->email}}
                    </span>
                </p>
            </div>

            <div class="col-12 col-md-10 col-lg-5 ">
                <p class="fs-5 text-white ppremium bg-success text-white-50">
                    Account creato il:
                    <span class="mx-3 fs-6 text-white">
                        {{$user->created_at}}
                    </span>
                </p>
            </div>

            <div class="col-12 col-md-10 col-lg-5 ">
                <p class="fs-5 text-white ppremium bg-success text-white-50">
                    Tipo di utente:
                    <span class="mx-3 fs-6 text-white">
                        @if ($user->isAdmin===1)
                        Amministratore
                        @else
                        Utente
                        @endif
                    </span>
                </p>
            </div>

            @if(Auth::user() && Auth::user()->username === $user->username || Auth::user() && Auth::user()->isAdmin === 1)
            <div class="col-12 col-md-10 col-lg-5 mt-5 ">
                <a href="{{route('edit_profile')}}" class="text-decoration-none me-3">
                    <button class="btn btn-warning">Modifica Profilo</button>
                </a>
                <a href="">
                    <button class="btn btn-danger">Elimina Profilo</button>
                </a>
            </div>
            @endif


        </div>




    </header>


</x-layout>