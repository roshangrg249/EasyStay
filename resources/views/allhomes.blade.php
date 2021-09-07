@extends('welcome')
@section('content')
    

<div class="alert alert-success" role="alert">
  <h5 class="section-title h1;">Welcome Home</h5>
  <p class="lead">Feel at home in your community homestay in Nepal, where you will experience genuine local hospitality and learn about the real Nepal while leaving behind a positive impact.
  </p>
</div>
  

<div class="container">
    @foreach ($data as $item)
    <div style="float:left;margin:20px;position:relative;">     
  <div class="card" style="width: 18rem;">
  
    <img style="height:100px;width:100%" class="card-img-top" src="{{asset('/images/homes/'.$item["image"])}}" alt="home image">
    <div class="card-body">
      <p class="card-text">Owner Name: {{$item->owner_name}}</p>
      <p class="card-text">Owner Contact: {{$item->owner_contact}}</p>
      <p class="card-text">Home Capacity: {{$item->home_capacity}}</p>
      <p class="card-text">Available Space: {{$item->available_space}}</p>
      <a href="/details/{{$item->id}}" class="btn btn-primary">view details</a>
    </div>
  </div>
  </div>
  @endforeach
  </div>
  @endsection