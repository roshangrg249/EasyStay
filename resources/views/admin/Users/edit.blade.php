@extends('admin.dashboard')
@section('content')
    






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form action="/admin/users/{{$data->id}}" method="POST" enctype='multipart/form-data'>
    <div class="form-group">
        @csrf
        @error('title')
        <div class="alert alert-danger">Please enter Name</div>
        @enderror
      <label for="exampleInputEmail1">Name</label>
      <input type="text" value="{{$data->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="email" value="{{$data->email}}" class="form-control" id="exampleInputPassword1"  name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Role</label> <span class="text-muted">Note: Role 1 is user 2 is admin</span>
        <input type="number" value="{{$data->role}}" class="form-control" id="exampleInputPassword1"  name="role">
      </div>
     
    
    <button type="submit" class="btn btn-primary">Update User</button>
  </form>
</div>
</body>
</html>
@endsection