<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container-xl">
    <a class="navbar-brand" href="{{route('welcome')}}">
      <img src="{{asset('media/logo.png') }}" alt="" class="navbar-logo me-5">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navcomingsoon" aria-controls="navcomingsoon" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navcomingsoon" style="">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2 ms-lg-0">
        <li class="nav-item">
          <a class="nav-link {{Route::is('welcome') ? "active" : ""}}" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::is('series_index') ? "active" : ""}}" href="{{route('series_index')}}">Serie TV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::is('films_index') ? "active" : ""}}" href="{{route('films_index')}}">Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::is('anime_index') ? "active" : ""}}" href="{{route('anime_index')}}">Anime</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::is('premium_index') ? "active" : ""}}" href="{{route('premium_index')}}">Premium</a>
        </li>

        @if (Auth::user() && Auth::user()->isAdmin === 1)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{Route::is('create_product') ? "active" : ""}}" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu bg-dark border-0 rounded-2">
            <li class="nav-item">
              <a class="mt-2 nav-link {{Route::is('create_product') ? "active" : ""}}" href="{{route('create_product')}}">
                Aggiungi Prodotto</a>
              </li>

              <li class="nav-item">
                <a class="mt-2 nav-link {{Route::is('products_index') ? "active" : ""}}" href="{{route('products_index')}}">
                  Database Prodotti</a>
                </li>

                <li class="nav-item">
                  <a class="mt-2 nav-link {{Route::is('users_index') ? "active" : ""}}" href="{{route('users_index')}}">
                    Database Utenti</a>
                  </li>
              </ul>
            </li>
            @endif
          </ul>


          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ms-2 ms-lg-0">

            @guest
            <a href="{{route('login')}}">
              <button type="button" class="btn btn-navbar px-4 py-1 btn-success mx-0 mx-lg-3 mt-1 mt-lg-0 ms-1">
                Accedi
              </button>
            </a>

            <a href="{{route('register')}}">
              <button type="button" class="btn btn-navbar px-4 py-1 btn-success mx-0 mx-lg-3 mt-1 mt-lg-0 ms-1">
                Registrati
              </button>
            </a>
            @endguest

            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-1">
                  <img src="{{Storage::url(Auth::user()->image)}}" alt="" class="rounded-5 prof-icon">
                </span>
                @if (Auth::user()->gender === 'M')
                Benvenuto {{Auth::user()->username}}
                @else
                Benvenuta {{Auth::user()->username}}
                @endif
              </a>
              <ul class="dropdown-menu bg-dark border-0 rounded-2">
                <li class="nav-item">
                  <a class="mt-1 nav-link ms-2 ms-lg-0" href="{{route('users_profile')}}">
                    Profilo
                  </a>
                </li>

                <li class="nav-item">
                  <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button type="submit" class="ms-2 ms-lg-0 bg-dark nav-link border-none fw-bold" >
                      Logout
                    </button>
                  </form>
                </li>
              </ul>
            </li>
            @endauth
          </ul>
        </ul>
      </div>
    </div>
  </nav>