@extends('layouts.app')

@section('content')
    <div class="contrainer p-5">
        <h2 class="my-4">
            {{$post->title}}
        </h2>

        <span>{{$post->description}}</span>
    </div>
@endsection
