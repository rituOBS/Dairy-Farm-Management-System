@extends('backend.master')
@section('content')

<h1> Brown Cow (Daily Milk- Weight)</h1>
<div><a href="{{route('milkWeight.create')}}"><button class="btn btn-success ">Create</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cow Name</th>
      <th scope="col">Milk Category</th>
      <th scope="col">Daily Milk Weight</th>
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
        <a class="btn btn-warning"  href="">View</a>
        <a class="btn btn-danger"  href="">Edit</a>
        <a class="btn btn-success" href="">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection