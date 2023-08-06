@extends('backend.master')
@section('content')
<h2>Feed list</h2>
<div><a href="{{route('feed.create')}}"><button class="btn btn-success ">Create</button></a></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">feed Item</th>
      <th scope="col">Daily Consumption</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($feed as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->item}}</td>
      <td>{{$row->daily_consumption}}</td>
    
    
      <td>
        <a class="btn btn-danger"  href="{{route('feed.edit',$row->id)}}">Edit</a>
        <a class="btn btn-success" href="{{route('feed.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

    </tbody>
</table>
{{$feed->links()}}

@endsection