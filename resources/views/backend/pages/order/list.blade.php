@extends('backend.master')


@section('content')
<h2>Order List Record</h2>
<div><a href="{{route('order.create')}}"><button class="btn btn-success ">Create</button></a></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Date</th>
      <th scope="col">Total-price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->quantity}}</td>
      <td>{{$row->date}}</td>
      <td>{{$row->total_price}}</td>
    

      
      <td>
      <a class="btn btn-warning"  href="">Approve</a>
        <a class="btn btn-danger"  href="">Declare</a>
        <a  class="btn btn-success" href="{{route('order.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

   {{$data->links()}}
@endsection