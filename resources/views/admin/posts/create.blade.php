@extends('layouts.app')

@section('content')
    <div class="contrainer p-5">
        <h2 class="my-4">
            Creazione nuovo post
        </h2>

        <form action="{{route('adminposts.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input
                id="title"
                name="title"
                value="{{old('title')}}"
                class="form-control"
                placeholder=Titolo
                type="text"
                >
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Descrizione</label>
                <textarea
                class="form-control "
                name=""
                id="text"
                cols="30"
                rows="10"
                >{{old('title')}}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Crea</button>

        </form>


    </div>

        <script>
            ClassicEditor
                .create( document.querySelector( '#text' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>

@endsection
