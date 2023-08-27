@extends('backend.master')
@section('content')
<div class="container">
<h1 class="text-center"><strong>Holstein Cow Gender</strong></h1>
<hr>
<div><a href="{{route('holsteinCowGender.create')}}"><button class="btn btn-info">Add New</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cow Name</th>
      <th scope="col">Cow Weight (kg)</th>
      <th scope="col">Cow Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($holsteinCowGender as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->weight}}</td>
      <td>{{$row->gender}}</td>
      
    
    
      <td>
        <a class="btn btn-info"  href="">Edit</a>
        <a class="btn btn-success" href="{{route('holsteinCowGender.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection