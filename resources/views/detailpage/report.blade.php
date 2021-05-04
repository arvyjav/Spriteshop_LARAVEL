<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Report!</title>
  </head>
  <body>
      @if(session('toast_success'))
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        {{session('toast_success')}}
      </div>
      @endif

    <div class="container mt-3">
        <form class="row g-3" action="/report/store" method="POST">
            @csrf
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Enter Email!">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Name</label>
              <input name="name" type="text" class="form-control" id="inputPassword4" placeholder="Enter Name!">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Description</label>
              <input name="description" type="text" class="form-control" id="inputAddress" placeholder="ENTER DESCRIPTION!">
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
        @include('sweetalert::alert')

    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>