<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container-xl">
      <a class="navbar-brand" href="{{route('welcome')}}">
        <img src="media/logo.png" alt="" class="navbar-logo me-5">
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
            <a class="nav-link" href="#">Serie TV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Anime</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{Route::is('create_product') ? "active" : ""}}" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu bg-dark border-0 rounded-2">
              <li class="nav-item">
                <a class="mt-2 nav-link {{Route::is('create_product') ? "active" : ""}}" href="{{route('create_product')}}">
                Aggiungi Prodotto</a>
              </li>
            </ul>
          </li>
        </ul>

          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ms-2 ms-lg-0">
          <button type="button" class="btn btn-navbar btn-success px-4 py-1 mx-0 mx-lg-3 mt-1 mt-lg-0 ms-1">Accedi</button>
          <button type="button" class="btn btn-navbar btn-success px-4 py-1 mx-0 mx-lg-3 mt-1 mt-lg-0 ms-1">Registrati</button>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user ms-2 ms-lg-2 mt-3 mt-lg-0 ms-lg-0 me-2 text-white "></i>
              Benvenuto
            </a>
            <ul class="dropdown-menu bg-dark border-0 rounded-2">
              <li class="nav-item">
                <a class="mt-1 nav-link ms-2 ms-lg-0" href="#">
                Profilo
              </a>
              </li>

              <li class="nav-item">
                <a class="mt-1 nav-link ms-2 ms-lg-0" href="#">
                Logout
              </a>
              </li>
            </ul>
          </li>
        </ul>
        </ul>
      </div>
    </div>
  </nav>