@extends('layout.v_template')
@section('title','Add Pengurus')

@section('content')

<div class="mt-3"></div>
<div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
      <h5 class="card-title">@yield('title')</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="/webs" class="btn btn-primary"><i class='bx bxs-book-add'></i></a>
    </div>
  </div>
  <div class="mt-3"></div>

  @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
  @endif


<table class="table table-success table-hover table-bordered border-dark">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NIM</th>
          <th scope="col">Name</th>
          <th scope="col">State</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        <?php $no=1?>
        @foreach($webs as $data)
        <tr>
          <th scope="row">{{$no++}}</th>
          <td>{{$data->NIM}}</td>
          <td>{{$data->Name}}</td>
          <td>{{$data->State}}</td>
          <td>
            <a class="btn btn-outline-info" href="/webs/show/{{$data -> id}}"><i class='bx bxs-bullseye'></i></a>
            <a class="btn btn-outline-success" href="/webs/edit/{{$data -> id}}"><i class='bx bxs-edit-alt'></i></a>
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete{{$data->id}}">
              <i class='bx bx-trash'></i>
            </button>
        </td>
        </tr>
        @endforeach

      </tbody>
  </table>

  @foreach($webs as $data)
  <div class="modal modal-warning fade" id="delete{{$data->id}}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content bg-warning">
        <div class="modal-header">
          <h4 class="modal-title">{{$data->Name}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>SURE FOR DELETE THIS H**</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline pull-right btn-dark" data-dismiss="modal">Close</button>
          <a href="/webs/destroy/{{$data->id}}" class="btn btn-outline btn-dark">YEAH</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach


  <div class="pull-right">
    {{ $webs->links() }}
  </div>



@endsection
@include('sweetalert::alert')
