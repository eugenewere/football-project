@extends('layouts.app-layout')

@section('content')
 
    <h1>wellcome to laravel</h1>
    <p>this is first service</p>
        @if(count($service)>0)
          <ul>
            @foreach($service as $services)
                <li>{{$services}}</li>
            @endforeach
            </ul>
        @endif()



@endsection