@extends('backend.master')


@section('content')
<h2>Feed list</h2>

@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif
        
<a href="{{route('feed.create')}}"><button class="btn btn-info ">Create</button></a>
<form action="{{route('feed.store')}}" method="post">
    @csrf
    <div class="form-group">
           <label for="">Enter Feed Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="feed_name" placeholder="Enter Feed Name">
    </div>
        <div class="form-group">
           <label for="">Enter Feed Item<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="feed_item" placeholder="Enter Feed Item">
       </div>    
       
       <div class="form-group">
           <label for="">Enter Daily Consumption<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="feed_daily_consumption" placeholder="Enter Daily Consumption">
       </div>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
@endsection