<x-layout>


    <x-masthead />

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Hack70 Comics</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-3 my-2">
                        <x-comic-card 
                            comicId="{{ $comic['id'] }}"
                            comicTitle="{{ $comic['title'] }}"
                            comicEditor="{{ $comic['editor'] }}"
                            comicGenre="{{ $comic['genre'] }}"
                            comicImg="{{ $comic['img'] }}"
                            comicAbstract="{{ $comic['abstract'] }}"
                            comicRelease="{{ $comic['release'] }}"
                        
                        />
                    </div>
                @endforeach

        </div>
    </div>


</x-layout>

