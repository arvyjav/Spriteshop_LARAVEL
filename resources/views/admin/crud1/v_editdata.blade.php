@extends('layout.v_template')
@section('title','Edit Pengurus')

@section('content')

<form action="/webs/update/{{$webs->id}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-row">

          <div class="form-group col-md-2">
            <label for="inputZip">NIM</label>
            <input name="NIM" type="number" class="form-control @error('NIM') is-invalid @enderror" placeholder="NIM" value="{{$webs->NIM}}" readonly>
            <div class="text-danger">
              @error('NIM')
              {{ $message }}
          @enderror
            </div>
          </div>
      
 
          <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input name="Name" type="text" class="form-control @error('Name') is-invalid @enderror" id="inputEmail4" placeholder="Name" value="{{$webs->Name}}">
            <div class="text-danger">
              @error('Name')
              {{ $message }}
          @enderror
            </div>
          </div>
   
   
          <div class="col-md-6 mb-3">
            <label for="validationCustomUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
              </div>
              <input name="Username" type="text" class="form-control form-control @error('Username') is-invalid @enderror" id="validationCustomUsername" placeholder="Username" value="{{$webs->Username}}">
          </div>
          <div class="text-danger">
            @error('Username')
            {{ $message }}
          @enderror
        </div>
  
          <div class="col-sm-10">
            <label>Password</label>

            <input name="Password" type="password" class="form-control form-control @error('Password') is-invalid @enderror" id="inputPassword" placeholder="Password" value="{{$webs->Password}}">
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
          <select name="State" id="inputState" class="form-control @error('State') is-invalid @enderror" value="{{$webs->State}}"
            <option selected>Choose...</option>
            <option>Admin</option>
            <option>Uploader</option>
  
          </select>
         <div class="text-danger">
          @error('State')
          {{ $message }}
          @enderror
         </div>
        </div>
      </div>
     
      <div class="form-group col-md-6">
        <label for="inputAddress">Email</label>
        <input name="Email" type="email" class="form-control  @error('Email') is-invalid @enderror" id="inputAddress" placeholder="Input E-Mail" value="{{$webs->Email}}">
      </div>
    <div class="text-danger">
      @error('Email')
      {{ $message }}
       @enderror
    </div>
    

  
    
      <div class="form-row">
        <div class="form-group col-md-5">
          <label>Choose Photo</label>
          <input name="photo" type="file" class="form-control @error('photo') is-invalid @enderror" id="inputGroupFile01" value="{{$webs->photo}}">
        </div>
          <img src="{{url('Sprite/'.$webs->photo)}}" width="150px">
          <div class="text-danger">
            @error('photo')
              {{ $message }}
            @enderror
          </div>
       
      </div>


    <button type="submit" class="btn btn-primary">Sign in</button>

  </form>
  

@endsection