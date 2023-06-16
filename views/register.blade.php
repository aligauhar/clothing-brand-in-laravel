@extends('layout')
@section('content')
    <div class="container">
        <h1>Register page here</h1>
        <form method="post" action="register" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" name="role" class="form-control" id="role" placeholder="Enter role">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
