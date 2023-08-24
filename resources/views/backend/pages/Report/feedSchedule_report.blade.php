@extends('backend.master')
@section('content')

<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Feed Schedule Report</strong></h1>
<hr>

@if(session()->has('msg'))
<p class="alert alert-info"> {{session()->get('msg')}}</p>
@endif

@if ($errors->any())
  @foreach($errors->all() as $error)
    <div>
      <p class="alert-danger"> {{$error}} </p>
  </div>
  @endforeach
  @endif
<form action="{{route('feedSchedule.report.search')}}" method="get">

<div class="row">
    <div class="col-md-3">
        <label for=""><b>From date:</b></label>
        <input value="{{request()->from_date}}" name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-3">
        <label for=""><b>To date:</b></label>
        <input value="{{request()->to_date}}" name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-3">
        <button type="submit" class="btn btn-danger">Search</button>
    </div>
</div>

</form>
<div id="feedSchedule_report">

<h2>Report of - {{request()->from_date}} to  {{request()->to_date}}</h2>
    <table class="table table-striped">
        <thead>
        <tr>
      <th scope="col">#</th>
      <th scope="col">Type of Animal</th>
      <th scope="col">Feeding During</th>
      <th scope="col">Green Grass</th>
      <th scope="col">Dry Fooder</th>
      <th scope="col">Soybean Meal</th>
      <th scope="col">Paddy Straw</th>
      <th scope="col">Concentrate Mixture</th>
      <th scope="col">Wheat Bran</th>
      <th scope="col">Action</th>
     
    </tr>
        </thead>
        <tbody>
        @if(isset($feedSchedule))
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
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<button onclick="printDiv('feedSchedule_report')" class="btn btn-danger">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
       </div>
      </div>
     </div>
    </div>
  </div>
 </div>

@endsection