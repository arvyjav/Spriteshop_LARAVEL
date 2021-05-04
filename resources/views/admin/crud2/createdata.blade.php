@extends('layout.v_template')
@section('title','Add Hans!')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form action="/sampahs/store" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationTooltip01">Product name</label>
          <input name="product_name" type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="{{old('product_name')}}">
          <div class="text-danger">
              @error('product_name')
              {{ $message }}
          @enderror
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationTooltip02">How Much</label>
          <input name="how_much" type="text" class="form-control" id="validationTooltip02" placeholder="How Much" value="{{old('how_much')}}">
          <div class="text-danger">
              @error('how_much')
              {{ $message }}
          @enderror
          </div>
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-floating">
            <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" value="{{old('description')}}" rows="9" cols="50"></textarea>
            <label for="floatingTextarea2">Comments</label>
            <div class="text-danger">
                @error('description')
                {{ $message }}
            @enderror
            </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationTooltip05">Price</label>
        <input name="price" type="text" class="form-control" id="validationTooltip05" placeholder="Price" value="{{old('price')}}">
        <div class="text-danger">
            @error('price')
            {{ $message }}
        @enderror
        </div>
      </div>


  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1" value="{{old('photo')}}">
    <div class="text-danger">
      @error('photo')
       {{ $message }}
       @enderror
    </div>
  </div>

  <button class="btn btn-primary" type="submit">Submit form</button>

</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </body>
</html>
    
@endsection
