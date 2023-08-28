@extends('backend.master')
@section('content')

<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Cow Shades Report</strong></h1>
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
<form action="{{route('cowShade.report.search')}}" method="get">

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
        
        <!-- <div><button onclick ="printDiv('cowShade_report')" class="btn btn-sm btn-danger">Print</button></div> -->
    </div>
</div>

</form>
<div id="cowShade_report">

<h2>Report of - {{request()->from_date}} to  {{request()->to_date}}</h2>
    <table class="table table-striped">
        <thead>
        <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Standing Space</th>
      <th scope="col">Standing Width</th> 
      <th scope="col">Central Passage Width</th>  
      <th scope="col">Feed Alley Width</th>   
 </tr>
        </thead>
        <tbody>
        @if(isset($cowShade))
        @foreach($cowShade as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->space}}</td>
      <td>{{$row->width}}</td>
      <td>{{$row->passage}}</td>
      <td>{{$row->alley}}</td>
      <td>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<div><button onclick="printDiv('cowShade_report')" class="btn btn-danger">Print</button></div>


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