@extends('backend.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-3 p3">
                <div class="card-body">
                <h1 class="text-center"><strong>Edit categories</strong></h1>
                <hr>

@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif

<form action="{{route('categories.update',$categories->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div>
                <p class="alert alert-danger"> {{$error}}</p>
            </div>
            @endforeach
            @endif
            <form class="from" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                <label for="">Enter Categories Name <span style="color:red">*</span></label>
                <input value="{{$categories->name}}" type="text" class="form-control" required name="name" placeholder="Enter Categories Name">
            </div>
                <br>
                <button type="submit" class="btn btn-dark">Update Catrgory</button>
            </form>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection