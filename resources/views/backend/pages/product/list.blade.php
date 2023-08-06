@extends('backend.master')


@section('content')
<h2>Products List</h2>
<div><a href="{{route('product.create')}}"><button class="btn btn-success ">Create</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Quantity</th>
      <th scope="col">total_Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($data as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->category}}</td>
      <td>{{$row->quantity}}</td>
      <td>{{$row->total_price}}</td>
      <td>
        <img style="weight:60px; height:60px;" src="{{url('/uploads/products/'.$row->image)}}" alt="image">
      </td>
   
    
      <td>
        <a class="btn btn-danger"  href="{{route('product.edit',$row->id)}}">Edit</a>
        <a  class="btn btn-success" href="{{route('product.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

</tbody>
</table>
{{$data->links()}}

@endsection