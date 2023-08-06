@extends('backend.master')


@section('content')
<h2>Staff Info</h2>
<div><a href="{{route('staff.create')}}"><button class="btn btn-success ">Create</button></a></div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
   
  @foreach($staff as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->designation}}</td>
      <td>{{$row->quantity}}</td>
      <td>{{$row->email}}</td>
      <td>
        <img style="weight:60px; height:60px;" src="{{url('/uploads/staff/'.$row->image)}}" alt="image">
      </td>
   
    
      <td>
        <a class="btn btn-danger"  href="">Edit</a>
        <a  class="btn btn-success" href="">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection