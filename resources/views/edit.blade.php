@extends('layouts.app')

@section('content')

<div class="container h-100 d-flex justify-content-center">
    <div class="my-auto col-md-6 bg-secondary p-5">
        <h1 class="text-white">
            Edit
        </h1>
        <form method="POST" action="{{ route('Update') }}">
            @csrf
            <input type="hidden" class="form-control" name="id" value="{{ $update_data->id }}">
            <div class="form-group">
                <label for="exampleInputEmail1" class="text-warning">First name</label>
                <input type="text" class="form-control" name="firstName" value="{{ $update_data->firstName }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="text-warning">Last name</label>
                <input type="text" class="form-control" name="lastName" value="{{ $update_data->lastName }}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-warning my-3">Update</button>
            </div>
        </form>

        <div>
            <a class="btn btn-block btn-info"href="{{ route('Default') }}">Back to home</a>
        </div>
    </div>
</div>

@endsection