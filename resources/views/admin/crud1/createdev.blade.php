@extends('layout.v_template')
@section('title','Add Pengurus')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


  </head>
  <body>
    <form action="/webs/store" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-row">
         
            <div class="form-group col-md-2">
              <label for="inputZip">NIM</label>
              <input name="NIM" type="number" class="form-control @error('NIM') is-invalid @enderror" placeholder="NIM" value="{{old('NIM')}}">
              <div class="text-danger">
                @error('NIM')
                {{ $message }}
            @enderror
              </div>
            </div>
      

            <div class="form-group col-md-6">
              <label for="inputEmail4">Name</label>
              <input name="Name" type="text" class="form-control @error('Name') is-invalid @enderror" id="inputEmail4" placeholder="Name" value="{{old('Name')}}">
              <div class="text-danger">
                @error('Name')
                {{ $message }}
            @enderror
              </div>

          </div>
   
            <div class="col-md-8 mb-3">
              <label for="validationCustomUsername">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input name="Username" type="text" class="form-control form-control @error('Username') is-invalid @enderror" id="validationCustomUsername" placeholder="Username" value="{{old('Username')}}">
            </div>
            <div class="text-danger">
              @error('Username')
              {{ $message }}
          @enderror
          </div>
    

            <div class="col-md-8 mb-3">
              <label for="validationCustomUsername">Password</label>
              <input name="Password" type="password" class="form-control form-control @error('Password') is-invalid @enderror" id="inputPassword" placeholder="Password" value="{{old('Password')}}">
              <small id="passwordHelpInline" class="text-muted">
                Must be 8-20 characters long.
              </small>
            </div>
            <div class="text-danger">
              @error('Password')
              {{ $message }}
              
          @enderror
      

          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select name="State" id="inputState" class="form-control @error('State') is-invalid @enderror">
              <option value="0" selected disabled>Choose...</option>
              <option>Admin</option>
              <option>Uploader</option>
            </select>
            
          </div>

        </div>

        <div class="form-group col-md-6">
          <label for="inputAddress">Email</label>
          <input name="Email" type="email" class="form-control  @error('Email') is-invalid @enderror" id="inputAddress" placeholder="Input E-Mail" value="{{old('Email')}}">
        </div>
      <div class="text-danger">
        @error('Email')
        {{ $message }}
    @enderror
      </div>
      
        <div class="form-row">
    
            <div class="form-group col-md-4">
              <label>Choose Photo</label>
              <input name="photo" type="file" class="form-control @error('photo') is-invalid @enderror" id="inputGroupFile01" value="{{old('photo')}}">
            </div>
            <div class="text-danger">
              @error('photo')
        {{ $message }}
    @enderror
            </div>
          </div>


      <button type="submit" class="btn btn-primary">Sign in</button>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </body>

    
</html>

@endsection
