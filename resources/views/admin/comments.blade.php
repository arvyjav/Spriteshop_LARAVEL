@extends('layout.v_template')
@section('title','Home')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
  </div>
@endif
@foreach($comments as $data)
<div class="card">
    <h5 class="card-header">{{$data->name}}</h5>
    <div class="card-body">
      <h5 class="card-title">{{$data->email}}</h5>
      <p class="card-text">{{$data->description}}</p>
      
      <form class="delete-pegawai" action=" {{ url('/report/destroy/'.$data->id )}}" method="POST">
        {{csrf_field()}}
        {{method_field('delete')}}
        <button type="button" class="btn btn-danger" onclick="confirmDelete('delete-pegawai')"><i class='bx bxs-trash-alt'></i></button>
        </form>

     </div>
</div>
@include('sweetalert::alert')

@endforeach
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <script>
   function confirmDelete(item_id) {
            swal({
                 title: 'Apakah Anda Yakin?',
                  text: "Anda Tidak Akan Dapat Mengembalikannya!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $('.'+item_id).submit();
                    } else {
                        swal("Cancelled Successfully");
                    }
                });
        }

</script>

<div class="pull-right">
    {{ $comments->links() }}
  </div>


@endsection