@extends('theme.layout')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Family List!</h1>
                <a href="{{ route('family.create') }}" class="btn btn-success">Create Family</a>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Relationship</th>
                            <th>Age</th>
                            <th>Is Alive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($families as $family)
                            <tr>
                                <td>{{ $family->name }}</td>
                                <td>{{ $family->relationship }}</td>
                                <td>{{ $family->age }}</td>
                                <td>{{ $family->is_alive }}</td>
                                <td>
                                    <a href="{{ route('family.edit', $family->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('family.destroy', $family->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>


            </table>
        </div>
    @endsection
