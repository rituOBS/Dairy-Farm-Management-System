<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <!-- Toastr 
     -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{url('css/styles.css')}}" rel="stylesheet">
       
    </head>
    <body class="sb-nav-fixed">
      








    @include('backend.fixed.header')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                 








                @include('backend.fixed.sidebar')
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
               








                @yield('content')

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                          
                            <div>
                               
                                &middot;
                            
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('/js/scripts.js')}}"></script>
        <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
     
        {!! Toastr::message() !!}
        
      
        </body>
</html>
