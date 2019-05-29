@extends('layout.app')
@section('content')
  <h1 class="mb-5">Create Posts</h1>

   <form action="PostController@store" method="POST">
      <div class="form-group">
        <label for="titlearea">Title</label>
        <input class="form-control pb-3" type="text" name="title" id="titlearea" placeholder="Title" >
      </div>
      
      <div class="form-group">      
        <label for="exampleFormControlTextarea2">Message</label>
        <textarea id="summary-ckeditor" class="form-control rounded-0" placeholder="Body Text" name="body" id="exampleFormControlTextarea2" rows="13" ></textarea>
      </div>
      
      <div class="form-group">
       <input type="hidden" name="_method" value="PUT">
       <button type="submit" class="btn btn-success" >Submit</button>
      </div>      
   </form> 

@endsection