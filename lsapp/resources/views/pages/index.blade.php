
 @extends('layout.app') 

 @section('content') 
    <div class="jumbotron text-center">
        <h1>Welcome to jkuat-usl</h1>
        <p>I have received some reports from users telling me that this option is not available in Google Chrome flags anymore. They can’t find it by entering chrome://flags. I have tried myself, and it seems this option is disappeared. But some users still have it in their Chrome browser. So if you can’t find this option, try to use other methods.</p>
        <p><a class="btn btn-primary btn-lg" href="/lsapp/public/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/lsapp/public/register" role="button">Register</a></p>
    </div>     
   
@endsection  
