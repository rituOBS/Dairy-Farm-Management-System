@extends('backend.master')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Edit Feed List</strong></h1>
<hr>

    @if(session()->has('msg'))
    <p class="alert alert-success"> {{session()->get('msg')}}</p>
    @endif

    @if ($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
       </div>
       @endforeach
       @endif

       <form action="{{route('feed.update',$feed->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="form-group">
           <label for="">Enter Feed Name <span style="color:red">*</span></label>
           <input value="{{$feed->name}}" type="text" class="form-control" required name="feed_name" placeholder="Enter Feed Name">
    </div>
        <div class="form-group">
           <label for="">Enter Feed Item<span style="color:red">*</span></label>
           <input value="{{$feed->item}}" type="text" class="form-control" required name="feed_item" placeholder="Enter Feed Item">
       </div>    
       
       <div class="form-group">
           <label for="">Enter Feed Daily Consumption<span style="color:red">*</span></label>
           <input value="{{$feed->daily_consumption}}" type="text" class="form-control" required name="feed_daily_consumption" placeholder="Enter Daily Consumption">
       </div>
       <br>
      <div><button type="submit" class="btn btn-dark">Update</button></div> 
      
     </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection