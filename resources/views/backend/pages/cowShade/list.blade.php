@extends('backend.master')
@section('content')
<div class="container">
    
       
 <h1 class="text-center"><strong>Cow Shade</strong></h1>


<div><a href="{{route('cowShade.create')}}"><button class="btn btn-info ">Add New</button></a></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Standing Space</th>
      <th scope="col">Standing Width</th> 
      <th scope="col">Central Passage Width</th>  
      <th scope="col">Feed Alley Width</th>   
      <th scope="col">Action</th>
 </tr>
  </thead>
  <tbody>

  @foreach($cowShade as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->space}}</td>
      <td>{{$row->width}}</td>
      <td>{{$row->passage}}</td>
      <td>{{$row->alley}}</td>
      <td>
      
        <a class="btn btn-info"  href="">Edit</a>
        <a  class="btn btn-warning" href="{{route('cowShade.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

    </tbody>
</table>
</div>
  


{{$cowShade->links()}}


@endsection