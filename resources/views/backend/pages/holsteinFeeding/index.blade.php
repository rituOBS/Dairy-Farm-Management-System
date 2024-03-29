@extends('backend.master')

@section('content')

<div class="container">
<h1 class="text-center"><strong>Holstein Feeding Item</strong></h1>
<hr>
<div><a href="{{route('holsteinFeeding.create')}}"><button class="btn btn-info">+ Add New</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Feed Name</th>
      <th scope="col">Feed Quantity (kg)</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($holsteinFeeding as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->quantity}}</td>
      
    <td>
        <a class="btn btn-info"  href="{{route('holsteinFeeding.edit',$row->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('holsteinFeeding.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
{{$holsteinFeeding->links()}}

@endsection