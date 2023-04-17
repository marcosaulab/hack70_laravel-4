<x-layout>

    <x-slot name="title">
        Grazie per averci contattato
    </x-slot>

    <x-masthead />

    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <div class="alert alert-success" role="alert">
                    Grazie per averci contattato!!
                    <br>
                    <a href="{{ route('homepage') }}" class="alert-link">Torna alla home</a>
                </div>
            </div>
        </div>
    </div>


</x-layout>