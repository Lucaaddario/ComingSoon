<x-layout>
    {{-- INIZIO SEZIONE FORM --}}
    <section class="container-fluid bg-dark vh-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center p-5">
            {{-- CREAZIONE COLONNA NERA FORM --}}
            <div class="col-12 p-5 rounded-4 form-column">
                <div class="row">
                    {{-- TITOLO DEL FORM --}}
                    <div class="col-12">
                        <h1 class="fs-4 text-light text-uppercase mb-3">crea prodotto</h1>
                    </div>
                </div>{{-- INIZIO FORM STRUCTURE --}}
                <form method="POST" action="{{ route('store_product') }}" enctype="multipart/form-data">
                    @csrf
                    {{-- TITOLO INPUT --}}
                    <div>
                        <label for="title" class="text-light mb-1 d-block">Titolo</label>
                        <input type="text" name="title" id="title" placeholder="Titolo del prodotto">
                    </div>
                    {{-- CATEGORIA INPUT --}}
                    <div class="mt-3">
                        <label for="category" class="text-light mb-1 d-block">Categoria</label>
                        <select name="category" id="category">
                            <option value="film">Film</option>
                            <option value="series">Serie TV</option>
                            <option value="anime">Anime</option>
                        </select>
                    </div>
                    {{-- DESCRIZIONE INPUT --}}
                    <div class="mt-3">
                        <label for="description" class="text-light mb-1 d-block">Descrizione</label>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    {{-- IMMAGINE INPUT --}}
                    <div class="mt-3 d-flex justify-content-center bg-dark">
                        <label for="image" class="text-light mb-1 d-block"></label>
                        <input type="file" name="image" id="image" class="text-center">
                    </div>
                    {{-- CHECKBOX SOTTOCATEGORIE INPUT --}}
                    <div class="mt-3 d-flex flex-wrap">
                        @foreach($subcategories as $subcategory)
                            <div class="d-flex justify-content-start align-items-center w-50">
                                <label for="subcategory_{{ $subcategory->id }}" class="text-light mb-1 w-75">
                                    {{ $subcategory->name}}
                                </label>
                                <input type="checkbox" name="subcategories[]" id="subcategory_{{ $subcategory->id }}" value="{{$subcategory->id}}" class="w-25">
                            </div>
                        @endforeach
                    </div>
                    {{-- BOTTONE DI INVIO --}}
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