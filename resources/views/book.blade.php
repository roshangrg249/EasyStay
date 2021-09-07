
    
@php
$user=auth()->user();
@endphp
    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div>
    {{View::make('header')}}
  </div>

  <div class="container">
   
    <form action="/book" method="POST">

      @csrf
      <div class="form-group">
        
        <input style="width:300px" type="text" name="user_id" class="form-control" value="{{$user->id}}" id="email" readonly hidden>
        <input style="width:300px" type="text" name="house_id" class="form-control" value="{{$data->id}}" id="email" readonly hidden>

      </div>
        <div class="form-group">
          <label for="text">Enter your name:</label>
          <input style="width:300px" type="text" name="user_name" class="form-control" id="email" required>

        </div>
        <div class="form-group">
          <label for="pwd">Contact:</label>
          <input style="width:300px"  type="number" maxlength="10" minlength="10" name="contact" class="form-control" id="pwd" required>
        </div>
        <div class="form-group">
          <label for="pwd">Address:</label>
          <input style="width:300px"  type="text" name="address" class="form-control" id="pwd" required>
        </div>
        <div class="form-group">
            <label for="pwd">Secondary contact:(optional)</label>
            <input style="width:300px" type="number" maxlength="10" minlength="10" name="secondary_contact" class="form-control" id="pwd" >
          </div>
          <div class="form-group">
            <label for="pwd">Total number of person:</label>
            <input style="width:300px"  type="number" name="required_space" class="form-control" id="pwd" required>
          </div>
        <button class="btn btn-success">Submit</button>
      </form>
    </div>
    
    <div style="padding-top:30px">
      {{View::make('footer')}}
    </div>
      
</body>

</html>

