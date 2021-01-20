<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" integrity="sha512-n+g8P11K/4RFlXnx2/RW1EZK25iYgolW6Qn7I0F96KxJibwATH3OoVCQPh/hzlc4dWAwplglKX8IVNVMWUUdsw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <div class=" container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="bg-white text-center navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="#"><img src="{{ asset('logo-banner.png')}}" /></a>
            <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ asset('dashboard/images/logo_star_mini.jpg')}}" alt=""></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
            <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
            <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
            </form>
            <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
                {{-- <li class="nav-item">
                    <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="{{ asset('logo.png')}}" alt=""></a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </nav>

        <!-- partial -->
        <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-right">
            <!-- partial:partials/_sidebar.html -->
            <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
            <div class="user-info">
                <img src="{{ Auth::user()->image }}}" alt="">
                <p class="name">{{ Auth::user()->name }}</p>
                <p class="designation">{{ Auth::user()->role }}</p>
                <span class="online"></span>
            </div>
            <ul class="nav">
                @if (Auth::user()->role=='member')
                <li class="nav-item {{ request()->url()== route('admin.main') ? 'active' : '' }}">
                    <a class="nav-link" href="#">
                        <img src="{{ asset('dashboard/images/icons/1.png')}}" alt="">
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->url()== route('member.karya')? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('member.karya') }}">
                        <img src="{{ asset('dashboard/images/icons/2.png')}}" alt="">
                        <span class="menu-title">Karyaku</span>
                    </a>
                <li class="nav-item {{ request()->url()== request()->url() ? 'active' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                        <img src="{{ asset('dashboard/images/icons/9.png')}}" alt="">
                        <span class="menu-title">Buat Karya<i class="fa fa-sort-down"></i></span>
                    </a>
                    <div class="collapse" id="sample-pages">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item {{ request()->url()==request()->url() ? 'active' : '' }}">
                                <a class="nav-link" href="#">Komik</a>
                            </li>
                            <li class="nav-item {{ request()->url()==request()->url() ? 'active' : '' }}">
                                <a class="nav-link" href="#">Novel</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->url()==request()->url() ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('member.profile') }}">
                        <img src="{{ asset('dashboard/images/icons/10.png')}}" alt="">
                        <span class="menu-title">Profile</span>
                    </a>
                </li>
                @else
                <li class="nav-item {{ request()->url()== route('admin.main') ? 'active' : '' }} active">
                    <a class="nav-link" href="{{ route('admin.main') }}">
                        <img src="{{ asset('dashboard/images/icons/1.png')}}" alt="">
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->url()== route('admin.member') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.member') }}">
                        <img src="{{ asset('dashboard/images/icons/2.png')}}" alt="">
                        <span class="menu-title">List Member</span>
                    </a>
                </li>    
                <li class="nav-item {{ request()->url()== route('buku.index')||request()->url()== route('buku.validasi.view')||request()->url()== route('genre.index') ? 'active' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                        <img src="{{ asset('dashboard/images/icons/9.png')}}" alt="">
                        <span class="menu-title">Karya<i class="fa fa-sort-down"></i></span>
                    </a>
                    <div class="collapse" id="sample-pages">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item {{ request()->url()==request()->url() ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('buku.index') }}">List</a>
                            </li>
                            <li class="nav-item {{ request()->url()==request()->url() ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('buku.validasi.view') }}">Validasi</a>
                            </li>
                            <li class="nav-item {{ request()->url()==request()->url() ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('genre.index') }}">Genre</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->url()==request()->url() ? 'active' : '' }}">
                    <a class="nav-link" href="#">
                        <img src="{{ asset('dashboard/images/icons/2.png')}}" alt="">
                        <span class="menu-title">Kotak masuk</span>
                    </a>
                </li>    
                <li class="nav-item {{ request()->url()== route('admin.profile') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.profile') }}">
                        <img src="{{ asset('dashboard/images/icons/10.png')}}" alt="">
                        <span class="menu-title">Profile</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->url()==request()->url() ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.profile') }}">
                        <img src="{{ asset('dashboard/images/icons/10.png')}}" alt="">
                        <span class="menu-title">Setting</span>
                    </a>
                </li>
                @endif
                <li class="nav-item {{ request()->url()==request()->url() ? 'active' : '' }}">
                    <a class="nav-link ml-4" href="{{ url('logout') }}">
                        <span class="menu-title btn btn-danger">Logout</span>
                    </a>
                </li>
            </ul>
            </nav>
            <div class="content-wrapper" style="background-color:lavender">
                @yield('content')
            </div>

        </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('dashboard/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dashboard/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dashboard/js/misc.js') }}"></script>
    @yield('script')
</body>

</html>
