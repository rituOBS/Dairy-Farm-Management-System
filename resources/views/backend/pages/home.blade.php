@extends('backend.master')
@section('content')

<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body"><strong style="font-size: 18px;">Total Category</strong></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h1 class="">{{ $categories }}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><strong style="font-size: 18px;">Staff - list</strong></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h1 class="">{{ $staffs }}</h1>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body"><strong style="font-size: 18px;">Milk - List</strong></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h1 class="">{{ $milkList }}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><strong style="font-size: 18px;">Total Feed - list</strong></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h1 class="">{{ $feedList }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        

                            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><strong style="font-size: 18px;">Vaccines Monitoring</strong></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h1 class="">{{ $vaccines }}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body"><strong style="font-size: 18px;">Vaccine Schedule</strong></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <h1 class="">{{ $vaccines }}</h1>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        
                        
                        
                           
                    
                        
                        </div>
                    </div>
                </main>
@endsection