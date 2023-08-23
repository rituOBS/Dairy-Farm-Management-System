@extends('backend.master')
@section('content')

<h1 class="text-center"><strong>Holstein Cow (Milk Per Day)</strong></h1>
<hr>
<div><a href="{{route('holsteinmilkWeight.create')}}"><button class="btn btn-info">Add New</button></a></div>

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
   
  @foreach($holsteinMilkWeight as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->category}}</td>
      <td>{{$row->weight}}</td>
      
    <td>
        <a class="btn btn-warning"  href="">View</a>
        <a class="btn btn-info"  href="">Edit</a>
        <a class="btn btn-success" href="">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection