{{-- @dd($post);   --}}
{{-- untuk cek masuk variable --}}


@extends('layouts.main')


@section('container')
<h1>{{ $posts["title"] }}</h1>
    <h5>{{ $posts["author"] }}</h5>
    <p>{{ $posts["body"] }}</p>

{{-- <h1>Detail Adzkar</h1> --}}



    <a href="/adzkar">Back to Adzkar</a>

@endsection