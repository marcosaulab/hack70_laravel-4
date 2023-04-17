<form action="{{ route('contact.send') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="tuonome" class="form-label">Tuo nome</label>
        <input type="text" class="form-control" name="tuonome" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Titolo del fumetto</label>
        <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione del fumetto</label>
        <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>