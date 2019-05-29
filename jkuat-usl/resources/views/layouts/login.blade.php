<div class="container pt-5 ">
    <h3 class="text-center">Log-In</h3>
    <form class="form-horizontal" role="form" action="{{URL::to("/logs")}}" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10"> 
            <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
        </div>
       
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
            <input type="hidden" name="_method" value="GET">
            <button type="submit" class="btn btn-success">LogIn</button>
            </div>
        </div>
    </form>
</div>
