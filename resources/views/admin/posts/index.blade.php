@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            Elenco dei progetti
        </h2>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Informazioni</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->date}}</td>
                    <td><a href="{{route('adminposts.show',$post)}}" class="btn btn-success"><i class="fa-regular fa-eye"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
