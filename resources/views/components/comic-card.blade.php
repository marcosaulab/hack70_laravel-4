<div class="card" style="width: 18rem;">
    <img src="/img/{{ $comicImg }}" class="card-img-top" alt="{{ $comicTitle }}">
    <div class="card-body">
        <h5 class="card-title">{!! $comicTitle !!}</h5>
        <p class="card-text d-flex justify-content-between">
            <span>Genere: {{ $comicGenre }}</span>
            <span>Release: {{ $comicRelease }} </span>
        </p>
        <p class="card-text"> Editor: {!! $comicEditor !!} </p>
        <p class="card-text"> Abstract: {!! Str::limit($comicAbstract, 18) !!}</p>
        <a href="{{ route('comic.show', ['id' => $comicId ]) }}" class="btn btn-primary">Scopri di più</a>
    </div>
</div>