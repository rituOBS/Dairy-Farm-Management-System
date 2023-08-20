@extends('backend.master')


@section('content')
<h1 class="text-center"><strong>Vaccine Monitoring</strong></h1>
<div><a href="{{route('vaccineMonitor.create')}}"><button class="btn btn-success ">Create</button></a></div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cow Name</th>
      <th scope="col">Vaccine Date</th>
      <th scope="col">Remark</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($vaccineMonitor as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->date}}</td>
      <td>{{$row->remark}}</td>
      
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