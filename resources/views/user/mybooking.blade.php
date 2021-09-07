





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
  <div>
    {{View::make('header')}}
  </div>
  
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
<table class="table">
<tr>
    <th style="width: 70px;">ID</th>
    <th style="width: 70px;">Name</th>
    <th style="width: 70px;">Contact</th>
    <th style="width: 70px;">Status</th>
    <th style="width: 70px;">Required Space</th>
    <th colspan="3">Actions</th>
</tr>
@foreach ($orders as $post )
    <tr>
        <td style="width: 70px;">{{$post->id}}</td>
        <td style="width: 70px;">{{$post->user_name}}</td>
       
        <td style="width: 70px;">{{$post->contact}}</td>
        <td style="width: 70px;">{{$post->status}}</td>
        <td style="width: 70px;">{{$post->required_space}}</td>
        
    @if($post['status']=='pending')
        <form method="POST" action="/cancelbooking/{{$post->id}}">
        @csrf
        @method('delete')
        <td><input class="btn btn-warning" type="submit" value="Cancel Booking">&nbsp;<span style="color:green">Waiting for admin approvel</span></td>
        </form>
        @elseif($post['status']=='confirmed')
          <td>
        <span style="color:green">Booked</span></td>
        @elseif($post['status']=='canceled')
        <td>
          <span style="color:red">Sorry,Canceled</span></td>
          @elseif($post['status']=='HouseFull')
          <td> <span style="color:red">Sorry, Space not enough</span></td></td>
          @elseif($post['status']=='CheckedOut')
          <td> <span style="color:green">Thank You for staying, please visit again</span></td></td>
    @endif
    </tr>
@endforeach

</table>
</div>
<div style="margin-top:180px"> 
  {{View::make('footer')}}
</div>
</body>
</html>
