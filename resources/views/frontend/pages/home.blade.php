@extends('frontend.master')


@section('content')

<div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/frontend/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Welcome to our Dairy Farm</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Dairy Farm Management System</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="w-100" src="/frontend/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Welcome to our dairy farm</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Best Organic Dairy Products</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->



   
    <!-- About End -->


    <!-- Features Start -->
    



    <!-- Gallery Start -->
    <section>
        <h1 class="text-center"><strong>Cow Categories</strong></h1>
        <hr>
        <div class="container">
            <div class="row">
                @foreach($categories as $value)
                <div class="col-md-3">
                    <div class="card">
                        <img class="p-3" style="weight:350px;
                                    height:200px;" src="{{url('uploads/categories/',$value->image)}}" alt="image">
                        <div class="card-header">
                            <div class="card-body">
                              <p><span>Name:</span><strong>{{$value->name}}</strong></p>
                              <p class="badge p-3 bg-danger"><strong>{{$value->status}}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    
    <!-- Features End -->


    <!-- Banner Start -->
   





    <!-- Banner End -->


    <!-- Service Start -->
 


    
    <!-- Service End -->


    <!-- Gallery Start -->
  
    <!-- Gallery End -->


    <!-- Product Start -->
  



    <!-- Product End -->


    <!-- Team Start -->
    



    <!-- Team End -->


    <!-- Testimonial Start -->
  
    
    <!-- Testimonial End -->
    @endsection