@extends('backend.master')
@section('content')

<h2>CowList Report</h2>

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
<form action="{{route('cowList.report.search')}}" method="get">

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
        <button type="submit" class="btn btn-info">Search</button>
    </div>
</div>

</form>
<div id="cowList_report">

<h2>Report of - {{request()->from_date}} to  {{request()->to_date}}</h2>
    <table class="table table-striped">
        <thead>
        <tr>
      <th scope="col">#</th>
      <th>Cow Report</th>
      <th scope="col">Name</th>
      <th scope="col">Weight (kg)</th>
      <th scope="col">Color</th>  
      <th scope="col">Price</th>  
      <th scope="col">Action</th>   
    </tr>
        </thead>
        <tbody>
        @if(isset($cowData))
        @foreach($cowData as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$row->shade->name}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->weight}}</td>
      <td>{{$row->color}}</td>
      <td>{{$row->price}}</td>
      
      <td>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<button onclick="printDiv('cowList.report')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>


@endsection