@extends('layouts.app')

@section('content')

<div class="container h-100 d-flex justify-content-center">
    <div class="my-auto">
        <h1 class="">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                
                @php
                  $i = 1;
                @endphp
                @foreach ($data_View as $post)
                <tbody>
                  <tr>
                    <th>{{ $i++ }}</th>
                    <td>{{ $post->firstName }}</td>
                    <td>{{ $post->lastName }}</td>
                    <td>
                        <a class="btn btn-success"href="#">Edit</a>
                        <a class="btn btn-danger"href="#">Delete</a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
            </table>

            <div>
                <a class="btn btn-block btn-info"href="{{ route('Insert') }}">Add</a>
            </div>
        </h1>
    </div>
</div>

@endsection