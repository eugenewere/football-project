 <nav class="navbar navbar-expand-md bg-dark navbar-dark  sticky-top">      
            <a class="navbar-brand" href="#"><i class="fas fa-futbol"></i> {{config('app.name','JKUAT-USL')}}</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-center collapsibleNavbar" id="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fixtures">Fixtures</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blogs</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacts</a>
                    </li> 
                </ul>
                
            </div> 
            <!--register user sectioon-->
            <div class="collapse navbar-collapse justify-content-end collapsibleNavbar" id="">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item mr-md-2 mb-sm-2">
                        <a class="nav-link btn btn-success" href="/jkuat-usl/public/login">Log-In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger" href="/jkuat-usl/public/register">Register</a>
                    </li>
                
                </ul>        
            </div>       
        </nav>