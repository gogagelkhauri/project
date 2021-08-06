@extends('layouts.adminLayout')
@section('content')
    <div class="container">
        <form action="/categories" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter category name">
            </div>
            <div class="form-group">
                <label for="name">Icon</label>
                <input type="text" name="icon" class="form-control" id="icon" placeholder="Enter Fontawesome icon class">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection