<nav class="navbar navbar-expand-md bg-dark navbar-dark mb-4">
  <!-- Brand -->
  <a class="navbar-brand" href="/">{{config('app.name','LARAPP')}}</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/larapp/public/home">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/larapp/public/about">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/larapp/public/services">SERVICES</a>
      </li> 
      <li class="nav-item">
          <a class="nav-link" href="/larapp/public/posts">POSTS</a>
        </li> 
    </ul>
    <ul class="navbar-item">
        <li class="nav-item">
            <a class="nav-link" href="/larapp/public/services"></a>
        </li> 
    </ul>
  </div> 
</nav>
