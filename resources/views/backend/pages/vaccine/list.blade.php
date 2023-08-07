@extends('backend.master')


@section('content')
<h2>Vaccine Monitoring</h2>
<div><a href="{{route('vaccine.create')}}"><button class="btn btn-success ">Create</button></a></div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cow Name</th>
      <th scope="col">Vaccine Date for (July - 2023)</th>
      <th scope="col">Remark</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($vaccine as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->date}}</td>
      <td>{{$row->remark}}</td>
      
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