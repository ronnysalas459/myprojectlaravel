@extends('theme.layout')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 >Family CRUD!</h1>
               <a href="{{ route('family.create') }}" class="btn btn-success">Create Family</a>
            </div>
        </div>
    </div>

@endsection
