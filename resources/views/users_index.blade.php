<x-layout>
    {{-- INIZIO FORM STRUCTURE --}}
    <section class="container-fluid bg-dark d-flex align-items-center justify-content-center p-lg-5 min-vh-100 ">
        <div class="row database-row p-4 p-lg-5 fs-4 rounded-3 flex-row ">
            <div class="col-12 text-white mb-0 database-column mb-4 text-uppercase">Database Utenti</div>
            <div class="row">
                <div class="col-12">
                    @foreach ($users as $user)
                    <div class="d-flex flex-column mb-4">
                        <div class="text-white shadow w-100 mt-2 p-3">
                            <div class="mb-2">{{$user->username}}</div>
                            <div class="fs-6 mb-2">{{$user->email}}</div>
                            <div class="fs-6 mb-2 fst-italic">Iscritto dal {{$user->created_at->format('d/m/Y')}}</div>
                            @if ($user->isAdmin === 1)
                            <div class="fs-6 mb-2 fst-italic">Admin</div>
                            @else
                            <div class="fs-6 mb-2 fst-italic">Utente</div>
                            @endif
                            <div class="d-flex justify-content-start mt-3">
                                <div class="me-3">
                                    <a href="{{route('users_edit' , compact('user'))}}">
                                        <button class="btn btn-success rounded-0 btn-promote">Modifica</button>
                                    </a>
                                </div>

                                <div class="me-3">
                                    <a href="{{route('profile_username' , ['username' => $user->username])}}">
                                        <button class="btn btn-success rounded-0 btn-promote">Profilo</button>
                                    </a>
                                </div>

                                <div class="me-3">
                                    @if ($user->isAdmin === 0 )
                                    <form method="POST" action="{{route('users_promote' , compact('user'))}}" class="">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-primary btn-promote rounded-0">Promuovi</button>
                                    </form>
                                    @else
                                    <form method="POST" action="{{route('users_demote' , compact('user'))}}" class="">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-primary btn-promote rounded-0">Declassa</button>
                                    </form>
                                    @endif
                                </div>

                                <div>
                                    <form method="POST" action="{{route('users_delete' , compact('user'))}}" class="">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-promote rounded-0">Elimina</button>
                                    </form>
                                </div>


                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
</x-layout>