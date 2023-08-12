@extends('backend.master')


@section('content')
<h2>Vaccine Schedule</h2>
<div><a href="{{route('vaccineSchedule.create')}}"><button class="btn btn-success ">Create</button></a></div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cow Disease</th>
      <th scope="col">Vaccine Name</th>
      <th scope="col">Time of Vaccination</th>
      <th scope="col">Immunity</th>
      <th scope="col">Vaccine Dose (ml)</th>
      <th scope="col">Remark</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($vaccineSchedule as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->disease}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->time}}</td>
      <td>{{$row->immunity}}</td>
      <td>{{$row->dose}}</td>
      <td>{{$row->remark}}</td>
      
    <td>
      
        <a class="btn btn-danger"  href="">Edit</a>
        <a class="btn btn-success" href="">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$vaccineSchedule->links()}}
@endsection