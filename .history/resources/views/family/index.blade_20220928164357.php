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

    </table>
@endsection
