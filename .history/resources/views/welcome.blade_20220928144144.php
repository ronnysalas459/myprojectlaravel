@extends('theme.layout')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Family CRUD!</h1>
                <a href="{{ route('family.create') }}" class="btn btn-success">Create</a>
            </div>
        </div>
    </div>

@endsection
