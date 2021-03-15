<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{config("app.name", "Laravel App")}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/posts">Posts</a>
          </li>
          
        </ul>
        <ul class="nav navbar-nav ml-auto">
          <li><a class="nav-link" aria-current="page" href="/posts/create">Create Post</a></li>
        </ul>
        
      </div>
    </div>
  </nav>