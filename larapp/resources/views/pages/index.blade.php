@extends('layouts.app-layout')


@section('content')
 <div class="jumbotron text-center">
    <h1 class="text-uppercase text-center">welcome to laravel</h1>
   <p class="text-capitalize text-center">this is first index {{$title}}</p>
   <p class="text-center"><a href="" class="btn btn-primary">Login</a>  <a href="" class="btn btn-outline-success">Sign-up</a></p>

 </div>
 @endsection