@extends('admin.dashboard')
@section('content')

@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
    <div class="container">
      <div style="position: absolute;top:100px">
    <form action="/admin/home" method="POST" enctype='multipart/form-data'>
        <div class="form-group">
            @csrf
            @error('title')
            <div class="alert alert-danger">Please enter Name</div>
            @enderror
          <label for="exampleInputEmail1">Owner Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Owner Name" name="owner_name" required>
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Owner Contact</label>
          <input type="string" class="form-control" id="exampleInputPassword1" placeholder="Enter Owner Contact Here" name="owner_contact" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Home Capacity</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Home Capacity" name="home_capacity" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Availabe Space</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Available Space" name="available_space" required>
          </div><br>
          <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" class="form-control"   name="image">
          </div><br>
        <button type="submit" class="btn btn-primary">Add homes</button>
      </form>
    </div>
    </div>
@endsection