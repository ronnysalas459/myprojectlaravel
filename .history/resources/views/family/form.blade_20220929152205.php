@extends('theme.layout')

@section('content')
    <div class="container py-5">

        <div class="row">
            <div class="col-md-12 text-center">
                @if (isset($family))
                    <h1>Edit Family</h1>
                @else
                    <h1>Create Family</h1>
                @endif
            </div>
        </div>
        @if (isset($family))
            <form action="{{ route('family.update', $family) }}" method="POST">
                @method('PUT')
            @else
                <form action="{{ route('family.store') }}" method="POST">
        @endif
        @csrf
        <div class="form-group  mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value = "{{old('name') ?? @$family->name}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="relationship">Relationship</label>
            <input type="text" class="form-control" name="relationship" id="relationship" placeholder="Enter relationship" value = "{{old('relationship') ?? @$family->relationship}}">
            @error('relationship')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Enter age" value = "{{old('age') ?? @$family->age}}">
            @error('age')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="is_alive">Is Alive</label>
            <select class="form-control" name="is_alive" id="is_alive" value = "{{old('is_alive') ?? @$family->is_alive}}">
                <option value="1" selected ={{$selected}}>:-)</option>
                <option value="0">:-(</option>
            </select>
            @error('is_alive')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
         @if (isset($family))
                       <button type="submit" class="btn btn-primary">Editar</button>
                @else
                    <button type="submit" class="btn btn-primary">Create</button>
                @endif

    </div>
@endsection
