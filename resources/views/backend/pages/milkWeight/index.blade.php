@extends('backend.master')
@section('content')

<h1 class="text-center"><strong>Brown Cow Daily Milk Weight</strong></h1>
<hr>
<div><a href="{{route('milkWeight.create')}}"><button class="btn btn-info">Add New</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cow Name</th>
      <th scope="col">Milk Category</th>
      <th scope="col">Daily Milk Weight (kg)</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
  @foreach($milkWeight as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->category}}</td>
      <td>{{$row->weight}}</td>
      
    <td>
        <a class="btn btn-info"  href="">Edit</a>
        <a class="btn btn-success" href="{{route('milkWeight.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection