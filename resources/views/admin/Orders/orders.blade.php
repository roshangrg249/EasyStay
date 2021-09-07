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

<table class="table">
<tr>
    <th style="width: 40px;">ID</th>
    <th style="width: 40px;">User Name</th>
    <th style="width: 40px;">Contact</th>
    <th style="width: 40px;">Secondary contact</th>
    <th style="width: 40px;">Address</th>
    <th style="width: 40px;">Required Space</th>
    <th style="width: 40px;">Status</th>
    <th colspan="3">Actions</th>
</tr>
@foreach ($data as $post )
    <tr>
        <td style="width: 40px;">{{$post->id}}</td>
        <td style="width: 40px;">{{$post->user_name}}</td>
       
        <td style="width: 40px;">{{$post->contact  }}</td>
        <td style="width: 40px;">{{$post->secondary_contact}}</td>
        <td style="width: 40px;">{{$post->address}}</td>
        <td style="width: 40px;">{{$post->required_space}}</td>
        <td style="width: 40px;">{{$post->status}}</td>
       
        <form method="POST" action="/admin/bookings/{{$post->id}}">
        @csrf
        @method('delete')
        <td><input class="btn btn-warning" type="submit" value="Delete"></td>
        </form>
        @if($post['status']!='canceled')
        <td><a class="btn btn-success" role="button" style="text-decoration: none;color:white"  href="/admin/bookings/confirm/{{$post->id}}/{{$post->house_id}}">Confirm</a></td>
        @endif
        <td><a class="btn btn-danger" role="button" style="text-decoration: none;color:white" href="/admin/bookings/cancel/{{$post->id}}">Cancel</a></td>
    </tr>
@endforeach

</table>

</body>
</html>
@endsection