@extends('layouts.app-layout')

@section('content')
    <h1>Posts </h1><a href="/larapp/public/posts/create" class="btn btn-"></a>
        @if (count($posts)>0)
           @foreach ($posts as $post)
                <a href="/larapp/public/posts/{{$post->id}} "class='nav-link text-dark'>
                    <div class="card py-4 px-2">
                        <h3 class="text-uppercase">{{$post->title}}</h3>
                        <p class="text-capitalize">{{$post->body}}</p>
                        <small class="text-right"> Written on {{$post->created_at}}</small>
                    </div>
                </a>
           @endforeach 
           {{$posts->links()}}
        @endif
@endsection