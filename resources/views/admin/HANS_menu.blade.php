@extends('layout.v_template')
@section('title','Add Hans!')

@section('content')

<div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
      <h5 class="card-title">@yield('title')</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="/sampahs" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="mt-3"></div>
  @if(session('pesan'))
  <div class="alert alert-success" role="alert">
    {{session('pesan')}}
  </div>
  @endif
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Pict</th>
        <th scope="col">Act</th>

      </tr>
    </thead>
    <tbody>
      <?php $no=1?>
      @foreach ($menu as $data)
      <tr>
        <th scope="row">{{$no++}}</th>
        <td>{{$data->product_name}}</td>
        <td>{{$data->price}}</td>
        <td><img src="{{url('Sprite/'.$data->photo)}}" width="100px"></td>
        <td>
          <a class="btn btn-info" href="/sampahs/show/{{$data -> id}}">Info</a>
          <a class="btn btn-success" href="/sampahs/edit/{{$data -> id}}">Success</a>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">
            DELETE
          </button>       
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @foreach($menu as $data)
  <div class="modal modal-warning fade" id="delete{{$data->id}}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content bg-warning">
        <div class="modal-header">
          <h4 class="modal-title">{{$data->product_name}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>SURE FOR DELETE THIS H**</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline pull-right btn-dark" data-dismiss="modal">Close</button>
          <a href="/sampahs/destroy/{{$data->id}}" class="btn btn-outline btn-dark">YEAH</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach
  <div class="pull-right">
    {{ $menu->links() }}
  </div>

@endsection