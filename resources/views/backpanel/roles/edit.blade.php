@extends('backpanel.layouts.master')

@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('role.index')}}" class="btn btn-primary rounded">All Roles</a>
    </div>
        <h3 class="text-center">Create A New Role</h3>

            @include('backpanel.layouts.errors')

        <form action="{{route('role.update', [$role->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    id="name"
                    type="text"
                    class="form-control"
                    name="name"
                    placeholder="Enter Role Name"
                    value="{{$role->name}}"
                >
            </div>
            <button class="btn btn-primary btn-block rounded" type="submit">Update Role</button>
        </form>
    </div>
@endsection
