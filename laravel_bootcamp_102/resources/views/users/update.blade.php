@extends('layouts.admin-master')

@section('content')
<form action="{{route('users.update',$user->id)}}" method="post">
    <div class="form-group">
        <label for="exampleName">Name</label>
        <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleName">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
