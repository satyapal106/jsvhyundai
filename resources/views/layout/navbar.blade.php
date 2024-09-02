<!--**********************************
            Header start
        ***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                        <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <img src="{{ asset('assets') }}/admin/images/profile/education/pic1.jpg" width="20"
                                alt="" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{url('admin/update-password')}}" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="ml-2">Profile </span>
                            </a>
                            <a href="{{url('admin/logout')}}" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a href="{{url('admin/dashboard')}}" aria-expanded="false">
                    <i class="la la-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-car"></i>
                    <span class="nav-text">Cars</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('admin/cars-category')}}">Cars Category</a></li>
                    <li><a href="{{url('admin/car-details')}}">Car Details</a></li>
                    <li><a href="{{url('admin/all-car-details')}}">All Car details</a></li>
                </ul>
            </li>
            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-graduation-cap"></i>
                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-courses.html">All Courses</a></li>
                    <li><a href="add-courses.html">Add Courses</a></li>
                    <li><a href="edit-courses.html">Edit Courses</a></li>
                    <li><a href="about-courses.html">About Courses</a></li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
