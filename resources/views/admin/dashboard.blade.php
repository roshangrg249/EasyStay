@php
$user=auth()->user();
    
@endphp




<style>
    .navbar-new-top{
    background: #fff;
}
.navbar-brand{
    font-weight: 600;
}
.navbar-brand img{
    width: 20%;
}
.navbar-new-top ul{
    margin-right: 9%;
}
.navbar-new-top ul li{
    margin-right: 8%;
}
.navbar-new-bottom{
    background-color: #f7f7f7;
    box-shadow: 0 5px 6px -2px rgba(0,0,0,.3);
    border-top: 1px solid #e0e0e0;
    margin-top: 4%;
    height: 40px;
}
.navbar-new-bottom ul li{
    margin-left: 2%;
    margin-right: 2%;
}
.navbar-nav .nav-item a {
    color: #333;
    font-size: 14px;
    font-weight: 600;
    transition: 1s ease;
}
.navbar-nav .nav-item a:hover{
    color: #0062cc;
}
.dropdown-menu.show{
    background: #f8f9fa;
    border-radius: 0;
}
.header-btn{
    width: 161%;
    border: none;
    border-radius: 1rem;
    padding: 8%;
    background: #0062cc;
    color: #fff;
    font-weight: 700;
    font-size: 13px;
    cursor: pointer;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar fixed-top navbar-expand-md flex-nowrap navbar-new-top">
            <a href="/admin" class="navbar-brand"><img  alt=""/>Admin dashboard | EasyStay</a>
            
           
        </nav>
        <nav class="navbar fixed-top navbar-expand-md navbar-new-bottom">
            <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">

                <ul class="navbar-nav w-100 justify-content-center px-3">
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin/home">Homes</a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/bookings" class="nav-link">Bookings Request</a></a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/confirmedbookings" class="nav-link">Confirmed Bookings</a></a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/bookingshistory" class="nav-link">Bookings History</a></a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/users" class="nav-link">Users</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="/" class="nav-link">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">{{$user->name}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
     
        
        @hasSection ('content')
        @yield('content');
        @else
        <div style="margin-top:100px;width:100%" class="container-fluid"> <img style="width: 100%" src="{{url("/images/logo/bannerdash.jpg")}}" alt=""></div>
        @endif