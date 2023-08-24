@extends('backend.master')
@section('content')

<h1 class="text-center"><strong>Indian Cow Feeding Item</strong></h1>
<hr>
<div><a href="{{route('indianFeeding.create')}}"><button class="btn btn-info">Add New</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Feed Name</th>
      <th scope="col">Feed Quantity (litre)</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($indianFeeding as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->quantity}}</td>
      
    <td>
       
        <a class="btn btn-info"  href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$indianFeeding->links()}}

@endsection