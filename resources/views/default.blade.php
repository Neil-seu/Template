@extends('layouts.app')

@section('content')

<div class="container h-100 d-flex justify-content-center">
    <div class="my-auto">
        <h1 class="">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a class="btn btn-success"href="#">Edit</a>
                        <a class="btn btn-danger"href="#">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>
                        <a class="btn btn-success"href="#">Edit</a>
                        <a class="btn btn-danger"href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
            </table>

            <div>
                <a class="btn btn-block btn-info"href="{{ route('Insert') }}">Add</a>
            </div>
        </h1>
    </div>
</div>

@endsection