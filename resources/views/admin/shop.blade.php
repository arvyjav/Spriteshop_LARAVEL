@extends('layout.v_template')
@section('title','Shop')

@section('content')

<a href=""><h1 class="text-end"><i class='bx bxs-report'></i></h1></a>
<a href="/cart"><h1 class="text-end" ><i class='bx bxs-cart'></i></h1></a>

@foreach ($menu as $data)
  <div class="container mt-5">  

     <div class="card">
         <div class="row">
             <div class="col-md-4">
                 <img src="{{url('Sprite/'.$data->photo)}}" class="img-fluid" width="150px">
             </div>
             <div class="col-md-8">
                  <h2 class="card-title mt-2">{{$data->product_name}}</h2>
                  <p></p>
                  <footer class="blockquote-footer">Price: {{$data->price}}</footer>
                  <a class="btn btn-info" href="/shop/shop/{{$data -> id}}"><i class='bx bxl-microsoft-teams'></i></a>
            </div>
         </div>
     </div>
  </div>
@endforeach


@endsection