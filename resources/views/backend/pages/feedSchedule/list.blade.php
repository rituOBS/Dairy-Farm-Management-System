@extends('backend.master')


@section('content')
<h1 class="text-center"><strong>Feed Schedule</strong></h1>
<hr>
<div><a href="{{route('feedSchedule.create')}}"><button class="btn btn-info ">Add New</button></a></div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type of Animal</th>
      <th scope="col">Feeding During</th>
      <th scope="col">Green Grass (kg)</th>
      <th scope="col">Dry Fooder(kg)</th>
      <th scope="col">Soybean Meal(kg)</th>
      <th scope="col">Paddy Straw(kg)</th>
      <th scope="col">Concentrate Mixture (kg)</th>
      <th scope="col">Wheat Bran(kg)</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($feedSchedule as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->animal}}</td>
      <td>{{$row->during}}</td>
      <td>{{$row->grass}}</td>
      <td>{{$row->fooder}}</td>
      <td>{{$row->meal}}</td>
      <td>{{$row->straw}}</td>
      <td>{{$row->mixture}}</td>
      <td>{{$row->bran}}</td>
    <td>
      
        <a class="btn btn-info"  href="{{route('feedSchedule.edit',$row->id)}}">Edit</a>
        <a class="btn btn-warning" href="{{route('feedSchedule.delete',$row->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$feedSchedule->links()}}

@endsection