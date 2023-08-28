@extends('backend.master')

@section('content')

<div class="container">
<h1 class="text-center"><strong>Cow Categories</strong></h1>
<hr>
<div><a href="{{route('category.create')}}"><button class="btn btn-info ">+ Add New</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  @foreach($category as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->status}}</td>
      <td>

        <img style="width:50px;
                    height:50px;"
                    src="{{url('/uploads/categories/'.$row->image)}}" alt="image">
      </td>
      

      
      <td>
        <a class="btn btn-info"  href="{{route('categories.edit',$row->id)}}">Edit</a>
        <a  class="btn btn-danger" href="{{route('categories.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

   </tbody>
</table>
</div>

   {{$category->links()}}


@endsection



   

