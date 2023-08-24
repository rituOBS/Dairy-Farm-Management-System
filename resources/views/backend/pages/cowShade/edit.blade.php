@extends('backend.master')
@section('content')
<div class="container">
<h2>Cow Shades</h2>


@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif
        <form action="{{route('cowShade.update',$cowShade->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="form-group">
           <label for="">Enter Shade Name <span style="color:red">*</span></label>
           <input value="{{$cowShade->name}}" type="text" class="form-control" required name="shade_name" placeholder="Enter Shade Name">
       </div>
        <div class="form-group">
           <label for="">Enter Standing Space<span style="color:red">*</span></label>
           <input value="{{$cowShade->space}}" type="text" class="form-control" required name="standing_space" placeholder="Enter Standing Space">
       </div> 
       
       <div class="form-group">
           <label for="">Enter Standing Width<span style="color:red">*</span></label>
           <input value="{{$cowShade->width}}" type="text" class="form-control" required name="standing_width" placeholder="Enter Standing Width">
       </div>
       <div class="form-group">
           <label for="">Enter Central Passage<span style="color:red">*</span></label>
           <input value="{{$cowShade->passage}}" type="text" class="form-control" required name="central_passage" placeholder="Enter Central Passage">
       </div>
       <div class="form-group">
           <label for="">Enter Feed Alley <span style="color:red">*</span></label>
           <input value="{{$cowShade->alley}}" type="text" class="form-control" required name="feed_alley" placeholder="Enter Feed Alley">
       </div>
  <br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

@endsection