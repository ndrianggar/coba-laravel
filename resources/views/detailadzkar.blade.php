{{-- @dd($posts);  untuk cek masuk variable--}}


@extends('layouts.main')


@section('container')


    <h1>{{ $posts["title"] }}</h1>
    <h5>{{ $posts["author"] }}</h5>
    <p>{{ $posts["body"] }}</p>





    <a href="/adzkar">Back to Adzkar</a>

@endsection