@extends('backend.master')

@section('content')

<div class="container">
<h1 class="text-center"><strong>Total Brown Cow</strong></h1>
<hr>
<div><a href="{{route('brownCow.create')}}"><button class="btn btn-info ">Add New</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cow Name</th>
      <th scope="col">Total Cow Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($brownCow as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->number}}</td>
      
    
    
      <td>
        <a class="btn btn-info"  href="{{route('brown.edit',$row->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('brown.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection