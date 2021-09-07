@php
    $user=auth()->user();
@endphp



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav style="border-radius:0px;margin-bottom:0px" class="navbar navbar-icon-top navbar-expand-lg navbar-light bg-light">
  <a style="margin-bottom:30px" class="navbar-brand" href="/"><img style="width: 80px; height: 60px; " src="{{asset('/images/logo/easystay_logo.png')}}" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="/myorders">
          <i class="fa fa-envelope-o">
           
          </i>
          My Bookings
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-warning">11</span>
          </i>
          Disabled
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-envelope-o">
            <span class="badge badge-primary">11</span>
          </i>
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul> --}}
    <div class="dropdown-divider"></div>

  </div>
  <ul class="navbar-nav ">
    @if(Auth::user())
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-target="#navItemGame"  id="navbarDropdown" role="button" data-toggle="dropdown" v-pre>
        <i class="fa fa-user" style="color:blue">
          <span class="badge badge-primary"></span>
        </i><?php
        print($user->name);

        ?>
      </a>
      <div id="#navItemGame" class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a id="#navItemGame" class="dropdown-item" href="/myorders">My Orders</a>
        <a id="#navItemGame" class="dropdown-item" href="/user">Profile</a>
        <a id="#navItemGame" class="dropdown-item" href="/logout">Logout</a>


      </div>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="/login">
        <i class="fa fa-user" style="color:green">

        </i>
        Login
      </a>
    </li>
@endif
    @if ($user==NULL)
    <span></span>
    @else
@if($user['role']=='2')
    <li class="nav-item">
      <a class="nav-link" href="/admin">
        <i class="fa fa-user" style="color:red">
          {{-- <span class="badge badge-success">11</span> --}}
        </i>
        Admin
      </a>
    </li>
    @else
        <span></span>

    @endif
    @endif
  </ul>
    {{-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav>
