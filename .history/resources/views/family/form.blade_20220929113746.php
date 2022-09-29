@extends('theme.layout')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Create Family</h1>
            </div>
        </div>
        <form action="{{ route('family.store') }}" method="POST">
            @csrf
            <div class="form-group  mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
            </div>
            <div class="form-group mb-3">
                <label for="relationship">Relationship</label>
                <input type="text" class="form-control" name="relationship" id="relationship" placeholder="Enter relationship">
            </div>
            <div class="form-group mb-3">
                <label for="age">Age</label>
                <input type="number" class="form-control" name="age" id="age" placeholder="Enter age">
            </div>
            <div class="form-group mb-3">
                <label for="is_alive">Is Alive</label>
                <input type="checkbox" class="form-control" name="is_alive" id="is_alive" placeholder="Enter is alive">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
@endsection
