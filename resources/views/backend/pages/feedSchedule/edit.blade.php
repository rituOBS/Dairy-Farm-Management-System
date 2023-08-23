@extends('backend.master')


@section('content')
<h2>Feed Schedule</h2>


            
<form action="{{route('feedSchedule.update',$feedSchedule->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
    <div class="form-group">
           <label for="">Enter Types of Animal <span style="color:red">*</span></label>
           <input value="{{$animal->type}}" type="text" class="form-control" required name="animal_type" placeholder="Enter Types of Animal">
    </div>
        <div class="form-group">
           <label for="">Enter Feeding During<span style="color:red">*</span></label>
           <input value="{{$feeding->during}}" type="text" class="form-control" required name="feeding_during" placeholder="Enter Feeding During">
       </div>   
       <div class="form-group">
           <label for="">Enter Green grass <span style="color:red">*</span></label>
           <input value="{{$green->grass}}" type="text" class="form-control" required name="green_grass" placeholder="Enter Green grass">
    </div>
    <div class="form-group">
           <label for="">Enter Dry Fooder <span style="color:red">*</span></label>
           <input value="{{$dry->fooder}}" type="text" class="form-control" required name="dry_fooder" placeholder="Enter Dry Fooder">
    </div> 
       
    <div class="form-group">
           <label for="">Enter Soybean Meal<span style="color:red">*</span></label>
           <input value="{{$soybean->meal}}" type="text" class="form-control" required name="soybean_meal" placeholder="Enter Soybean Meal">
       </div>
       <div class="form-group">
           <label for="">Enter Paddy Straw<span style="color:red">*</span></label>
           <input value="{{$paddy->straw}}" type="text" class="form-control" required name="paddy_straw" placeholder="Enter Paddy Straw">
       </div>
       <div class="form-group">
           <label for="">Enter Concentrate Mixture<span style="color:red">*</span></label>
           <input value="{{$concentrate->mixture}}" type="text" class="form-control" required name="concentrate_mixture" placeholder="Enter Concentrate Meal">
       </div>
       <div class="form-group">
           <label for="">Enter Wheat Bran<span style="color:red">*</span></label>
           <input value="{{$wheat->bran}}" type="text" class="form-control" required name="wheat_bran" placeholder="Enter Wheat Bran">
       </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection