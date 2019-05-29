@extends('layouts.app-layout')

@section('content')
<a href="/larapp/public/posts" class="btn btn-primary my-3">Go back</a>
    <h1 class="text-uppercase">{{$posts->title}}</h1>
    
    <div>
    <p class="text-capitalize">{{$posts->body}}</p>
    </div>
    <hr>
     <p class="text-muted"> written on {{$posts->created_at}}</p>
        
@endsection