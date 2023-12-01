<x-layout>
    {{-- INIZIO FORM STRUCTURE --}}
    <section class="container-fluid bg-dark d-flex align-items-center justify-content-center p-lg-5">
        <div class="row database-row p-4 p-lg-5 fs-4 rounded-3 flex-row ">
            <div class="col-12 text-white mb-0 database-column mb-4 text-uppercase">Database prodotti</div>
            <div class="row row-title-db text-white ">
                <h5 class="mb-5">Films</h5>
                @foreach ($productsByFilms as $product)
                <div class="col-6 mb-4 db-content">
                    <span class="me-2">{{$product->title}}</span>
                </div>
                <div class="col-6 mb-4 db-content">
                    <a class="text-decoration-none" href="{{route('edit_product' ,  compact('product'))}}">
                        <button class="btn btn-dark bg-success">Modifica</button>
                    </a>
                    <form class="d-inline" method="post" action="{{route('delete_product' , compact('product'))}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark bg-danger">Elimina</buttonclass=>
                    </form>
                </div>
                @endforeach
            </div>

            <div class="row row-title-db text-white ">
                <h5 class="mb-5">Series</h5>
                @foreach ($productsBySeries as $product)
                <div class="col-6 mb-4 db-content">
                    <span class="me-2">{{$product->title}}</span>
                </div>
                <div class="col-6 mb-4 db-content">
                    <a class="text-decoration-none" href="{{route('edit_product' ,  compact('product'))}}">
                        <button class="btn btn-dark bg-success">Modifica</button>
                    </a>
                    <form class="d-inline" method="post" action="{{route('delete_product' , compact('product'))}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark bg-danger">Elimina</buttonclass=>
                    </form>
                </div>
                @endforeach
            </div>

            <div class="row row-title-db text-white">
                <h5 class="mb-5">Anime</h5>
                @foreach ($productsByAnime as $product)
                <div class="col-6 mb-4 db-content">
                    <span class="me-2">{{$product->title}}</span>
                </div>
                <div class="col-6 mb-4 db-content">
                    <a class="text-decoration-none" href="{{route('edit_product' , compact('product'))}}">
                        <button class="btn btn-dark bg-success">Modifica</button>
                    </a>
                    <form class="d-inline" method="post" action="{{route('delete_product' , compact('product'))}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark bg-danger">Elimina</buttonclass=>
                    </form>
                </div>
                @endforeach
            </div>


        </div>
    </section>
</x-layout>