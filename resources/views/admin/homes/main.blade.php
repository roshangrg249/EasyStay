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
    <th style="width: 40px;">Owner Name</th>
    <th style="width: 40px;">Owner Contact</th>
    <th style="width: 40px;">Home Capacity</th>
    <th style="width: 40px;">Available Space</th>
    <th colspan="3">Actions</th>
</tr>
@foreach ($data as $post )
    <tr>
        <td style="width: 40px;">{{$post->id}}</td>
        <td style="width: 40px;">{{$post->owner_name}}</td>
       
        <td style="width: 40px;">{{$post->owner_contact  }}</td>
        <td style="width: 40px;">{{$post->home_capacity}}</td>
        <td style="width: 40px;">{{$post->available_space}}</td>
        <td style="width: 40px;"><img style="width: 80px;height:40px" src="{{asset('/images/homes/'.$post["image"])}}" alt=""></td>
        <td style="width: 40px;"><a href="/admin/home/{{$post->id}}/edit"><button class="btn btn-info">Edit</button></a></td>
        <form method="POST" action="/admin/home/{{$post->id}}">
        @csrf
        @method('delete')
        <td><input class="btn btn-warning" type="submit" value="Delete"></td>
        </form>
    
    </tr>
@endforeach

</table>
<a href="/admin/home/create" class="btn btn-primary" >Add Homes</a>
</body>
</html>
@endsection