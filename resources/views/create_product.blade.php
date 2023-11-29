<x-layout>
    {{-- INIZIO SEZIONE FORM --}}
    <section class="container-fluid bg-dark vh-100 d-flex align-items-center justify-content-center ">
        <div class="row justify-content-center p-5">
            {{-- CREAZIONE COLONNA NERA FORM --}}
            <div class="col-12 p-5 rounded-4 form-column">
                <div class="row">
                    {{-- TITOLO DEL FORM --}}
                    <div class="col-12">
                        <h1 class="fs-4 text-light text-uppercase mb-3">crea prodotto</h1>
                    </div>
                </div>{{-- INIZIO FORM STRUCTURE --}}
                <form method="POST" action="{{route('store_product')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- TITLE INPUT --}}
                    <div>
                        <label for="title" class="text-light mb-1 d-block">Titolo</label>
                        <input type="text" name="title" id="title" placeholder="Titolo del film">
                    </div>
                    {{-- CATEGORY INPUT --}}
                    <div class="mt-3">
                        <label for="category" class="text-light mb-1 d-block">Categoria</label>
                        <select name="category" id="category">
                            <option value="film">
                                Film
                            </option>
                            <option value="series">
                                Serie TV
                            </option>
                            <option value="anime">
                                Anime
                            </option>
                        </select>
                    </div>
                    {{-- DESCRIPTION INPUT --}}
                    <div class="mt-3">
                        <label for="description" class="text-light mb-1 d-block">Descrizione</label>
                        <input type="text" name="description" id="description" placeholder="Descrizione del film">
                    </div>
                    {{-- IMAGE INPUT --}}
                    <div class="mt-3 d-flex justify-content-center bg-dark">
                        <label for="image" class="text-light mb-1 d-block"></label>
                        <input type="file" name="image" id="image" class="text-center">
                    </div>
                    {{-- SUBMIT BUTTON --}}
                    <div class="mt-3 d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-success px-4 py-3 mx-0 mx-lg-3 mt-1 mt-lg-0 ms-1 w-75">
                            Crea Prodotto
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>
</x-layout>