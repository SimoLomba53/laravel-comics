<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>

    @vite('resources/js/app.js')
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light d-flex justify-content-between">
  <div class="container-fluid">
    <div>
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">CHARACTERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">COMICS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">MOVIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">GAMES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">COLLECTIBLES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">VIDEOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FANS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">NEWS</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SHOP
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
    </div>
  </div>
</nav>
</body>
</html>