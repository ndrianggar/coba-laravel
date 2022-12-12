{{-- @dd($post) <!--cara print dumpday   --> --}}


@extends('layouts.main')
      @section('container')
     
      <!--butuh looping---->
        @foreach ($posts as $post)
        <article class="mb-5">    
        <h1>
            <a href="/detailadzkar/{{ $post["slug"] }}">{{ $post["title"] }}        
            </a>
        </h1>
        <h5>by: {{$post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
        </article>
        @endforeach

      @endsection