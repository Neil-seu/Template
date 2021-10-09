@extends('layouts.app')

@section('content')

<div class="container h-100 d-flex justify-content-center">
    <div class="my-auto col-md-6 bg-secondary">
        <h1 class="">

            <form method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1" class="text-warning">First name</label>
                  <input type="text" class="form-control" name="firstName">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="text-warning">Last name</label>
                  <input type="text" class="form-control" name="lastName">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </div>
            </form>

            <div>
                <a class="btn btn-block btn-info"href="{{ route('/') }}">Back to home</a>
            </div>
        </h1>
    </div>
</div>

@endsection