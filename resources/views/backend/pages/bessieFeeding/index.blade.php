@extends('backend.master')
@section('content')

<h1 class="text-center"><strong>Bessie Cow Feeding Item</strong></h1>
<div><a href="{{route('bessieFeeding.create')}}"><button class="btn btn-success ">Create</button></a></div>

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
  
  @foreach($bessieFeeding as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->quantity}}</td>
      
    <td>
        <a class="btn btn-warning"  href="">View</a>
        <a class="btn btn-info"  href="">Edit</a>
        <a class="btn btn-success" href="{{route('bessieFeeding.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$bessieFeeding->links()}}
@endsection