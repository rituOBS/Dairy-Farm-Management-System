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
                                    <div class="card-body">Category</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    {{$categories}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">StaffList</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    {{$staffs}}
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">MilkList</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    {{$milkList}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">FeedList</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    {{$feedList}}
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        

                            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Vaccine</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    {{$vaccines}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Vaccine Schedule</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    {{$vaccines}}
                                    </div>
                                    </div>
                                </div>
                            </div>
                        
                        
                        
                           
                    
                        
                        </div>
                    </div>
                </main>
@endsection