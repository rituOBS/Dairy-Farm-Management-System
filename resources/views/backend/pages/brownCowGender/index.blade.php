@extends('backend.master')
@section('content')

<h1 class="text-center"><strong>Brown Cow Gender</strong></h1>
<div><a href="{{route('brownCowGender.create')}}"><button class="btn btn-success ">Create</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cow Name</th>
      <th scope="col">Cow Weight</th>
      <th scope="col">Cow Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($brownCowGender as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->weight}}</td>
      <td>{{$row->gender}}</td>
      
    
    
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