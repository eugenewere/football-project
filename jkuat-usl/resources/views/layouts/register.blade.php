<div class="container pt-5">

    <h3 class="text-center">Register</h3>
    <form class="form-horizontal " role="form" action="{{URL::to("/store")}}" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Fullname:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full name">
            </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
            </div> 
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10"> 
            <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter Password">
            </div>
        </div>
        
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
            <input type="hidden" name="_method" value="GET">
            <button  name="regi" type="submit" class="btn btn-success">Submit</button>
            </div> 
        </div>
    </form>
</div>
