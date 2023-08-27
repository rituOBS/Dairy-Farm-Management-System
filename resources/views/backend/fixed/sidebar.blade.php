<div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{route('staff.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                 Staff Info
                            </a>
                            <a class="nav-link" href="{{route('cowShade.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                 Cow Shade
                            </a>

                            <a class="nav-link" href="{{route('cow.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Cow List
                            </a>
                         
                            <a class="nav-link" href="{{route('category.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                              Cow Categories
                              </a>


                              <!-- accordion start style -->
                              <style>
                               

                               .accordion-body a{
                                    text-decoration: none;
                                    text-align: center;
                                }
                              </style>
                           

                              <style>
                                .accordion-body a{
                                    text-decoration: none;
                                }
                              </style>
                              
                            <div class="accordion" id="myAccordion"> 
                                     <!-- Collapsible Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button  class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Brown-Cow Details
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#myAccordion">
                                <div class="accordion-body  bg-dark ">
                                    <a class="text-white" href="{{route('brownCow.index')}}">Total-Cow</a>
                                    
                                </div>
                                <div  class="accordion-body  bg-dark ">
                                    <a class="text-white" href="{{route('feeding.index')}}">Feeding-Item</a>
                                    
                                </div>
                                <div class="accordion-body  bg-dark">
                                    <a class="text-white" href="{{route('milkWeight.index')}}">Milk weight</a>
                                    
                                </div>
                                <div class="accordion-body  bg-dark ">
                                    <a class="text-white" href="{{route('brownCowGender.index')}}">Cow Gender</a>
                                    
                                </div>
                                </div>
                            </div>


                            <div class="accordion" id="myAccordion">
                            <!-- Collapsible Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTow">
                                <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    Bessie-Cow Details
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#myAccordion">
                                <div class="accordion-body bg-dark">
                                    <a class="text-white" href="{{route('bessieCow.index')}}">Total-Cow</a>
                                    
                                </div>
                                <div class="accordion-body bg-dark">
                                    <a  class="text-white" href="{{route('bessieFeeding.index')}}">Feeding-Item</a>
                                    
                                </div>
                                <div class="accordion-body bg-dark">
                                    <a  class="text-white" href="{{route('bessieCowGender.index')}}">Cow Gender</a>     
                                </div>
                                </div>
                            </div>



                            <div class="accordion" id="myAccordion">
                            <!-- Collapsible Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    Indian-Cow Details
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#myAccordion">
                                <div class="accordion-body  bg-dark">
                                    <a class="text-white" href="{{route('indianCow.index')}}">Total-Cow</a>
                                    
                                </div>
                                <div class="accordion-body  bg-dark">
                                    <a class="text-white" href="{{route('indianFeeding.index')}}">Feeding-Item</a>
                                    
                                </div>
                                <div class="accordion-body  bg-dark">
                                    <a class="text-white" href="{{route('indianCowGender.index')}}">Cow Gender</a>
                                    
                                </div>
                                </div>
                           </div>


                            
                            <div class="accordion" id="myAccordion">
                            <!-- Collapsible Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Holstein Friesian Cattle Details
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#myAccordion">
                                <div class="accordion-body bg-dark">
                                    <a class="text-white" href="{{route('holsteinCow.index')}}">Total-Cow</a>
                                    
                                </div>
                                <div class="accordion-body bg-dark">
                                    <a class="text-white" href="{{route('holsteinFeeding.index')}}">Feeding-Item</a>
                                    
                                </div>
                                <div class="accordion-body bg-dark">
                                    <a class="text-white" href="{{route('holsteinmilkWeight.index')}}">Milk weight</a>
                                    
                                </div>
                                <div class="accordion-body bg-dark">
                                    <a class="text-white"  href="{{route('holsteinCowGender.index')}}">Cow Gender</a>
                                    
                                </div>
                                </div>
                            </div>

        
                          
                            <a class="nav-link" href="{{route('feed.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Feed List
                            </a>

                            <a class="nav-link" href="{{route('feedSchedule.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Feed Schedule
                            </a>

                            <a class="nav-link" href="{{route('milk.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Milk List
                            </a>

                            <a class="nav-link" href="{{route('vaccineMonitor.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Vaccine Monitoring
                            </a>

                            <a class="nav-link" href="{{route('vaccineSchedule.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Vaccine Schedule
                            </a>

                            <a class="nav-link" href="{{route('all.report')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Report
                            </a>
                         
                           
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                         
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                          
                        </div>
                </div>