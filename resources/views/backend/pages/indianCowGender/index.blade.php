@extends('backend.master')
@section('content')

<h1 class="text-center"><strong>Indian Cow Gender</strong></h1>
<hr>
<div><a href="{{route('indianCowGender.create')}}"><button class="btn btn-info">Add New</button></a></div>

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
  
  @foreach($indianCowGender as $row)
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

@endsection