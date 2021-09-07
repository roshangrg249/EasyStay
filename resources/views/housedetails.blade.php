@extends('welcome')
@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      body {
  background-color:  #eee;
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




  

.btn {
  margin-top: auto;
}
.checkbox {
  padding-left: 20px; }
.checkbox label {
    display: inline-block;
    position: relative;
    padding-left: 5px; }
.checkbox label::before {
  content: "";
  display: inline-block;
  position: absolute;
  width: 17px;
  height: 17px;
  left: 0;
  margin-left: -20px;
  border: 1px solid #cccccc;
  border-radius: 0px;
  background-color: #fff;
  -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  transition: border 0.15s ease-in-out, color 0.15s ease-in-out; }
.checkbox label::after {
  display: inline-block;
  position: absolute;
  width: 16px;
  height: 16px;
  left: 0;
  top: 0;
  margin-left: -20px;
  padding-left: 3px;
  padding-top: 1px;
  font-size: 11px;
  color: #555555; }
.checkbox input[type="checkbox"] {
opacity: 0; }
.checkbox input[type="checkbox"]:focus + label::before {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px; }
.checkbox input[type="checkbox"]:checked + label::after {
  font-family: 'Glyphicons Halflings';
  content: "\e013"; }
.checkbox input[type="checkbox"]:disabled + label {
  opacity: 0.65; }
  .checkbox input[type="checkbox"]:disabled + label::before {
    background-color: #eeeeee;
    cursor: not-allowed; }
.checkbox.checkbox-circle label::before {
border-radius: 50%; }
.checkbox.checkbox-inline {
margin-top: 0; }

.checkbox-primary input[type="checkbox"]:checked + label::before {
  background-color: #004a91;
    border-color: #004a91;}
.checkbox-primary input[type="checkbox"]:checked + label::after {
  color: #fff; }


    </style>
</head>
<body>
    <div class="container">
        <div style="margin-left:350px;display:flex;margin-top:50px">     
      <div class="card" style="width: 20rem;height:40rem">
      
        <img style="height:100px;width:100%" class="card-img-top" src="{{asset('/images/homes/'.$data["image"])}}" alt="home image">
        <div class="card-body">
          <p class="card-text">Owner Name: {{$data->owner_name}}</p>
          <p class="card-text">Owner Contact: {{$data->owner_contact}}</p>
          <p class="card-text">Home Capacity: {{$data->home_capacity}}</p>
          <p class="card-text">Available Space: {{$data->available_space}}</p>
         
          <a href="/bookhome/{{$data->id}}" class="btn btn-primary">Book Now</a>
        </div>
      </div>
      <div style="height: 50px;margin-bottom: 400px;width:300px">
      <div class="about" style="height:40rem">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{url("/images/homes/3.jpg")}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{url("/images/homes/5.jpg")}}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{url("/images/homes/6.jpg")}}" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{url("/images/homes/7.jpg")}}" alt="Forth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="centered">
        <div class="container">
	<div class="row" style="padding: 30px">
		<h2>Facilities</h2>
	</div>
	<div class="col-sm-6">
	    <div class="form-group">
            <div class="checkbox checkbox-primary pl5">
              <input type="checkbox" id="vehicle1" name="vehicle1" checked onclick="return false;" value="Bike">
<label for="vehicle1"> Free WiFi 24hrs</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" checked onclick="return false;" value="Car">
<label for="vehicle2"> Hot water available</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" checked onclick="return false;" value="Boat">
<label for="vehicle3"> Travel Information</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" checked onclick="return false;" value="Boat">
<label for="vehicle3"> Natural and cultural places to visit</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" checked onclick="return false;" value="Boat">
<label for="vehicle3"> Traditional dishes available</label><br>
              
            </div>
           
          </div>
	</div>
</div>
    </div>
        
      </div>
    </div>
        
      </div>
      </div>
   
    
</body>
</html>
@endsection