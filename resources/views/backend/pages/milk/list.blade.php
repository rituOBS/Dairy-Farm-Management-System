@extends('backend.master')


@section('content')
<h1 class="text-center"><strong>Milk Collection Record</strong></h1>
<div><a href="{{route('milk.create')}}"><button class="btn btn-success ">Create</button></a></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Quality</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($milk as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->quality}}</td>
      <td>{{$row->quantity}}</td>
      <td>{{$row->price}}</td>
    
     
      
      <td>
        <a class="btn btn-info"  href="{{route('milk.edit',$row->id)}}">Edit</a>
        <a  class="btn btn-warning" href="{{route('milk.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

    </tbody>
</table>
{{$milk->links()}}

@endsection