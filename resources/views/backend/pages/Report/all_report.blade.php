@extends('backend.master')
@section('content')


<div class="container mt=4">
 <div>
 <h1 class="text-center"><strong>All Report</strong></h1>
 <hr>
</div>

<div class="row">
    <div class="col-sm-3">
</div>

<div class="d-grid gap-3 col-4 mx-center">

<a type="button" class="btn btn-warning btn-lg" href="{{route('staff.report')}}">Staff Report</a>


<a type="button" class="btn btn-warning btn-lg" href="{{route('cow.report')}}">Cow Report</a>

<a type="button" class="btn btn-warning btn-lg" href="{{route('cowShade.report')}}">CowShade Report</a>

<a type="button" class="btn btn-warning btn-lg" href="{{route('category.report')}}">Category Report</a>

<a type="button" class="btn btn-warning btn-lg" href="{{route('feed.report')}}">Feed Report</a>

<a type="button" class="btn btn-warning btn-lg" href="{{route('feedSchedule.report')}}">FeedSchedule Report</a>



<a type="button" class="btn btn-warning btn-lg" href="{{route('milk.report')}}">Milk Report</a>


<a type="button" class="btn btn-warning btn-lg" href="{{route('vaccineMonitor.report')}}">VaccineMonitor Report</a>

<a type="button" class="btn btn-warning btn-lg" href="{{route('vaccineSchedule.report')}}">VaccineSchedule Report</a> 

@endsection