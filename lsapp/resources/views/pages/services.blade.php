 @extends('layout.app') 

 @section('content')      
    <h1 class="mt-5">{{$title}}</h1>    
    <p>I have received some reports from users telling me that this option is not available in Google Chrome flags anymore. They can’t find it by entering chrome://flags. I have tried myself, and it seems this option is disappeared. But some users still have it in their Chrome browser. So if you can’t find this option, try to use other methods.</p>
      @if(count($services)>0)
        <ul class="list-group">
            @foreach($services as $service)
             <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
      @endif
@endsection  
