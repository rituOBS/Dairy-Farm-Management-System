@extends('backend.master')

@section('content')

<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">

 <div class="container">
<h1 class="text-center"><strong>Entire Reports</strong></h1>
<hr>
</div>

<div class="row">
    <div class="col-sm-3">
</div>

<div class="d-grid gap-3 col-4 mx-center">
<!-- 
***route for staff List*** -->
<a type="button" class="btn btn-dark btn-lg" href="{{route('staff.report')}}">Staff Report</a>

<!-- 
***route for staffs*** -->
<a type="button" class="btn btn-dark btn-lg" href="{{route('cow.report')}}">Cow Report</a>


<!-- 
***route for Cow Shades*** -->
<a type="button" class="btn btn-dark btn-lg" href="{{route('cowShade.report')}}">CowShade Report</a>


<!-- 
***route for Category*** -->
<a type="button" class="btn btn-dark btn-lg" href="{{route('category.report')}}">Category Report</a>


<!-- 
***route for Feed List*** -->
<a type="button" class="btn btn-dark btn-lg" href="{{route('feed.report')}}">Feed Report</a>

<!-- 
***route for Feed Schedule*** -->
<a type="button" class="btn btn-dark btn-lg" href="{{route('feedSchedule.report')}}">FeedSchedule Report</a>


<!-- 
***route for Milk Collections*** -->
<a type="button" class="btn btn-dark btn-lg" href="{{route('milk.report')}}">Milk Report</a>


<!-- 
***route for Vaccine Monitor*** -->
<a type="button" class="btn btn-dark btn-lg" href="{{route('vaccineMonitor.report')}}">VaccineMonitor Report</a>

<!-- 
***route for Vaccine Schedule*** -->
<a type="button" class="btn btn-dark btn-lg" href="{{route('vaccineSchedule.report')}}">VaccineSchedule Report</a>

       </div>
      </div>
     </div>
    </div>
  </div>
 </div>
@endsection