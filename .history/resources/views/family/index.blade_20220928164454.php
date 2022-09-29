@extends('theme.layout')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 >Family List!</h1>
               <a href="{{ route('family.create') }}" class="btn btn-success">Create Family</a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Relationship</th>
                <th scope="col">Age</th>
                <th scope="col">Is Alive</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                    <a href="{{ route('family.edit', 1) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('family.destroy', 1) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>

    </table>
@endsection
