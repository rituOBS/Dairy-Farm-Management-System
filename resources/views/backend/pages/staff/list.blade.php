@extends('backend.master')


@section('content')
<h1 class="text-center"><strong>Staff Information</strong></h1>
<hr>
     <div><a href="{{route('staff.create')}}"><button class="btn btn-info ">Add New Staff</button></a></div>

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
      <td>{{$row->email}}</td>
      <td>
        <img style="weight:60px; height:60px;" src="{{url('/uploads/staffs/'.$row->image)}}" alt="image">
      </td>
   
    
      <td>
        <a class="btn btn-info"  href="{{route('staff.edit',$row->id)}}">Edit</a>
        <a  class="btn btn-warning" href="{{route('staff.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$staff->links()}}

@endsection