@extends('layout.v_navbar')
@section('title','Account')

@section('content')

<div class="container my-5 d-grid gap-5">
    <div class="p-5 border">
      <h1>{{Auth::user()->name}}</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
        natus iusto fugit id saepe neque rerum magni laudantium accusantium
        dolorem numquam quasi.
      </p>
    </div>
    
  </div>
  
@endsection