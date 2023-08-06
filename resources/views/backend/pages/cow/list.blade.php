@extends('backend.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-3 p3">
                <div class="card-body">
                <h1 class="text-center"><strong>Cow List</strong></h1>


<div><a href="{{route('cow.create')}}"><button class="btn btn-success ">Create</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Weight</th>
      <th scope="col">Price</th> 
      <th scope="col">Color</th>    
      <th scope="col">Action</th>

      
    </tr>
  </thead>
  <tbody>

  @foreach($cow as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->weight}}</td>
      <td>{{$row->price}}</td>
      <td>{{$row->color}}</td>
    

      
      <td>
      
        <a class="btn btn-danger"  href="{{route('cow.edit',$row->id)}}">Edit</a>
        <a  class="btn btn-success" href="{{route('cow.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

    </tbody>
</table>
</div>
            </div>
        </div>
    </div>
</div>


{{$cow->links()}}


@endsection



   

