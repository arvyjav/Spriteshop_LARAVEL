@extends('layout.v_template')
@section('title','Detail Pengurus')

@section('content')

<div class="row">

	<div class="col-md-8">
		<div class="card card-dark">
			<div class="card-header">
				<h3 class="card-title">Detail Pegawai</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>NIM</b>
							</td>
							<td>:
								{{$webs->NIM}}
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama</b>
							</td>
							<td>:
                                {{$webs->Name}}
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>State</b>
							</td>
							<td>:
								{{$webs->State}}
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Email</b>
							</td>
							<td>:
								{{$webs->Email}}
							</td>
						</tr>

                        <tr>
							<td style="width: 150px">
								<b>Username</b>
							</td>
							<td>:
								{{$webs->Username}}
							</td>
						</tr>

                        <tr>
							<td style="width: 150px">
								<b>Password</b>
							</td>
							<td>:
								{{$webs->Password}}
							</td>
						</tr>
					
					</tbody>
				</table>
				<div class="card-footer">
					<a href="/crud" class="btn btn-warning">Kembali</a>

				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto Pegawai
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="{{url('Sprite/'.$webs->photo) }}" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					
				</h3>
			</div>
		</div>
	</div>

</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

@endsection