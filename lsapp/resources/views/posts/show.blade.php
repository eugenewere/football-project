@extends('layout.app')

@section('content')
   <a href="/lsapp/public/posts" class="btn btn-info btn-block m-3">Go back</a>
  <h1 class="mb-5 text-capitalize">{{$post->title}}</h1>
      
   <div class="media border p-4">
     <div class= media-body>
       {{$post->body}}<br>       
     </div>
     <small class="align-bottom alert alert-success">Written on {{$post->created_at}}</small>
   </div>  

   <a href="/lsapp/posts/{{$post->id}}/edit" class="btn btn-warning mt-2">Edit</a> 
  
  <form action="{{PostContoller@destroy}}" method="POST" class="d-flex justify-content-end">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger">Delete</button>  
  </form>
@endsection