@extends('welcome')

@section('content')
<head>
    



<!-- Team -->
<style>
    /* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}




.imagesize{
    height:150px;
}
/* Container holding the image and the text */
.about {
  position: relative;
  text-align: center;
  color: white;
}
/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


    </style>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<div class="about">
    <img src="{{asset('/images/aboutus/12.jpg')}}" alt="Snow" style="width:100%;">
    <div class="centered">
    <h3 >About Us</h3>
    <p >Home Stay in Nepal can be one of the unforgetable moment of your life, Because Nepal has got diverse in culture, climate, custom, creature and community. That is why if you are planning for a holiday in Nepal you would better plan not for tours and travels but plan for tours and travels from Home Stay Plans. Blue Mountain home stay Nepal can make your holiday the best holiday you have experienced ever before. We warmly welcome you in our Nepali Homes, Nepali Chulho, Nepali Dal-bhat Tarkari and Achar. It meants we Blue Mountain home stay Nepal welcome you from the inner core of our heart. 
    </p>
</div>
    
  </div>

   {{-- <div class="container">
    <h5 class="section-title h1">About Us</h5>
    <h4 class="text-justify;p-3 mb-2  text-black">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</h4>
   </div> --}}

        <div class="container">
            <h5 class="section-title h1">How Homestay works</h5>
            <div style="padding-bottom: 20px;margin-left:20px">
            <div class="row">
                <div class="col-md-4">
        <div class="card " style="width: 25rem;">
            <img class="card-img-top imagesize " src="{{asset('/images/aboutus/search.png')}}" alt="Card image cap">
            <div style="height: 150px" class="card-body">
                <h2>Search & Request</h2>
              <h4 class="card-text">Guests search available rooms and send a booking request.</h4>
            </div>
          </div>   
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 25rem;">
            <img class="card-img-top imagesize " src="{{asset('/images/aboutus/wallet.png')}}" alt="Card image cap">
            <div style="height: 150px" class="card-body">
                <h2>Booking and Fee</h2>
              <h4 class="card-text">Once you accept and confirm availability, guest books and pays fee to the respective owner of the house before checking-out.</h4>
            </div>
          </div> </div>
          <div class="col-md-4">
          <div class="card" style="width: 25rem;">
            <img class="card-img-top imagesize " src="{{asset('/images/aboutus/payment.png')}}" alt="Card image cap">
            <div style="height: 150px" class="card-body">
                <h2>Payment</h2>
              <h4 class="card-text">The guest pays you the full amount on checking-out day to the respective owner of the house(additional charges maybe charged if the guest demands or consumes more services). </h4>
            </div>
          </div> 
         
    </div>
    </div>
</div>
    </div>


 

  <div>   
<section id="team" class="pb-5">
    <div class="container">
        
        
   
      

        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{asset('/images/aboutus/aasish.jpg')}}" alt="card image"></p>
                                    <h4 class="card-title">Aasish Sharma</h4>
                                    <p class="card-text">UI and backend developer.</p>
                                    <p class="card-text">Local:Kathmandu.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div style="width: 350px" class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Connect with Aasish:</h4>
                                    <p class="card-text">aasish@myktm.ml.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/aashishshaarma">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/p1aashish"><i class="fa fa-instagram"></i></a></li>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{asset('/images/aboutus/sugam.jpg')}}" alt="card image"></p>
                                    <h4 class="card-title">Sugam Bhandari</h4>
                                    <p class="card-text">Backend developer.</p>
                                    <p class="card-text">Local:Kathmandu.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div style="width: 350px" class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Connect with sugam:</h4>
                                    <p class="card-text">sugamsingh10@gmail.com.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/sugam.s.bhandari">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                    
                                        <li class="list-inline-item"><a href="https://www.instagram.com/sugam_46"><i class="fa fa-instagram"></i></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{asset('/images/aboutus/ayush.jpg')}}" alt="card image"></p>
                                    <h4 class="card-title">Ayush Basnet</h4>
                                    <p class="card-text">Backend helper.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div style="width: 350px" class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Connect with Asyush:</h4>
                                    <p class="card-text">ayushjung63@gmail.com.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/ayushjung63">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <li class="list-inline-item"><a href="https://www.instagram.com/ayushjung63"><i class="fa fa-instagram"></i></a></li>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            
            <div style="margin:auto" class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{asset('/images/aboutus/roshan.jpg')}}" alt="card image"></p>
                                    <h4 class="card-title">Roshan Gurung</h4>
                                    <p class="card-text">Founder and Travel expert.</p>
                                    <p class="card-text">Local:Lamjung.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div style="width: 350px" class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Connect with Roshan:</h4>
                                    <p class="card-text">roshangurung474@gmail.com.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.facebook.com/GrG.Mote.45">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        
                                                <li class="list-inline-item"><a href="https://www.instagram.com/m_yahikogrg"><i class="fa fa-instagram"></i></a></li>
                                           
                                       
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- ./Team member -->
            

        </div>
    </div>
</section>
 </div>

<!-- Team -->
@endsection