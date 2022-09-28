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
    <bscf-table>
        <bscf-table-column field="id" label="ID" sortable></bscf-table-column>
        <bscf-table-column field="name" label="Name" sortable></bscf-table-column>
        <bscf-table-column field="description" label="Description" sortable></bscf-table-column>
        <bscf-table-column field="created_at" label="Created At" sortable></bscf-table-column>
        <bscf-table-column field="updated_at" label="Updated At" sortable></bscf-table-column>
        <bscf-table-column field="actions" label="Actions" sortable></bscf-table-column>
    </bscf-table>
@endsection
