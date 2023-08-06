@extends('backend.master')


@section('content')
<h2>Employee list</h2>
<div><a href="{{route('employee.create')}}"><button class="btn btn-success ">Create</button></a></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Salary</th>
      <th scope="col">Workhour</th>
      <th scope="col">designation</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
    
  @foreach($employee as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->salary}}</td>
      <td>{{$row->workhour}}</td>
      <td>{{$row->designation}}</td>
 

      
      <td>
        <a class="btn btn-danger"  href="{{route('employee.edit',$row->id)}}">Edit</a>
        <a  class="btn btn-success" href="{{route('employee.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

</tbody>
</table>



@endsection