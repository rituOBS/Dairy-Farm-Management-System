@extends('backend.master')
@section('content')
<div class="container">
    
       
 <h1 class="text-center"><strong>Cow List</strong></h1>
<hr>

<div><a href="{{route('cow.create')}}"><button class="btn btn-info ">Add New Cow</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th>Cow Shade</th>
      <th scope="col">Name</th>
      <th scope="col">Weight (kg)</th>
      <th scope="col">Color</th>  
      <th scope="col">Price (Tk)</th>  
      <th scope="col">Action</th>

      
    </tr>
  </thead>
  <tbody>

  @foreach($cowData as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->shade->name}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->weight}}</td>
      <td>{{$row->color}}</td>
      <td>{{$row->price}}</td>
      
      <td>
      
        <a class="btn btn-info"  href="{{route('cow.edit',$row->id)}}">Edit</a>
        <a  class="btn btn-danger" href="{{route('cow.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

    </tbody>
</table>
</div>
  


{{$cowData->links()}}


@endsection