<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Risultati di ricerca per: <span class="fst-italic">{{ $chiaveRicerca }}</span></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">

            @if (count($comics) > 0)
                    @foreach ($comics as $comic)
                        <div class="col-12 col-md-3 my-2">
                            <x-comic-card comicId="{{ $comic['id'] }}" comicTitle="{{ $comic['title'] }}" comicEditor="{{ $comic['editor'] }}"
                                comicGenre="{{ $comic['genre'] }}" comicImg="{{ $comic['img'] }}" comicAbstract="{{ $comic['abstract'] }}"
                                comicRelease="{{ $comic['release'] }}" />
                        </div>
                    @endforeach
            @else
                  <div class="alert alert-primary h3" role="alert">
                    Non ci sono risultati
                </div>
            @endif



        </div>
    </div>


</x-layout>