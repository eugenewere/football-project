@extends('layout.app')
@section('content')
  <h1 class="mb-5">Posts</h1>
  @if(count($posts)>0)
     @foreach($posts as $post)
        <div class="card p-2">
            <h3 class="text-capitalize "><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>  
             <p><small>Written on {{$post->created_at}}</small></p>
        </div>
    @endforeach
    <br>
     {{$posts->links()}}
  @else
    <p>no posts found</p>
     
   @endif 
@endsection