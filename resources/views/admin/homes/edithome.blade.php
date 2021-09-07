@extends('admin.dashboard')
@section('content')
    






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
    <div class="container">
    <form action="/admin/home/{{$data->id}}" method="POST" enctype='multipart/form-data'>
       <div style="margin-top:100px" class="container">
      <div class="form-group">
            @csrf
            @error('title')
            <div class="alert alert-danger">Please enter Name</div>
            @enderror
          <label for="exampleInputEmail1">Owner Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Owner Name" value="{{$data->owner_name}}" name="owner_name" required>
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Owner Contact</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Owner Contact Here" value="{{$data->owner_contact}}" name="owner_contact" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Home Capacity</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Home Capacity" value="{{$data->home_capacity}}" name="home_capacity" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Availabe Space</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Available Space" value="{{$data->available_space}}" name="available_space" required>
          </div><br>
          <div class="form-group">
            <label for="exampleInputPassword1">Current Image</label><br>
            <img style="width: 80px;height:40px" src="{{asset('/images/homes/'.$data["image"])}}" alt=""><br>
            <input type="file" class="form-control"   name="image">
          </div><br>
        <button type="submit" class="btn btn-primary">update home</button>
      </form>
    </div>
    </div>
</body>
</html>
@endsection
