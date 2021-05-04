<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css" />
    <style>
      .banner-image {
        background-image: url('img/banner-img.jpg');
        background-size: cover;
      }
    .button {
  position: absolute;
  top: 60%;
  left: 50%;
  padding: 10px 30px;
  transform: translate(-50%,-50%);
}
.btn {
  border: 1px solid #fff;
  padding: 10px 30px;
  color: #fff;
  text-decoration: none;
  transition: 0.6s;
}
  </style>
  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#">Web Zone</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/services">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="/shop">Shop</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link text-white" href="/login">log</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>

    <!-- Banner Image  -->
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    >
      <div class="content text-center">
        <h1 class="text-white">WEB ZONE</h1>
      </div>
      <div class="button">
        <a href="#" class="btn">Here</a>
        <a href="#" class="btn">Or Here</a>
      </div>
  
    </div>

    @yield('content')

    <!-- Main Content Area -->

    <script src="{{asset('js')}}/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
  </body>
  <div class="mt-5"></div>
</html>
@extends('layout.v_footer')

@section('content')

@endsection