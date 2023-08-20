@extends('backend.master')
@section('content')
<div class="container">
<h2>Cow Shades</h2>


  <form class="from" action="{{route('cowShade.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Shade Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="shade_name" placeholder="Enter Shade Name">
       </div>
        <div class="form-group">
           <label for="">Enter Standing Space<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="standing_space" placeholder="Enter Standing Space">
       </div> 
       
       <div class="form-group">
           <label for="">Enter Standing Width<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="standing_width" placeholder="Enter Standing Width">
       </div>
       <div class="form-group">
           <label for="">Enter Central Passage<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="central_passage" placeholder="Enter Central Passage">
       </div>
       <div class="form-group">
           <label for="">Enter Feed Alley <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="feed_alley" placeholder="Enter Feed Alley">
       </div>
  <br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

@endsection