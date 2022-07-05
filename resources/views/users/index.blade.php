@extends('layouts.app')

@section('content')
    <div class="container">
        @if (count($users) > 0)
            <div class="card">
                <div class="d-flex flex-row justify-content-end px-4 py-2">
                    <form class="form-group" action="{{ route('users') }}">
                        <div class="row">
                            <input type="text" class="form-control" name="search" id="search" aria-describedby="helpId" value="{{$search}}" onsubmit=""
                                placeholder="You search">
                            <input type="submit" value="Search" class="btn btn-primary mt-2">
                        </div>
                        <small id="helpId" class="form-text text-muted">Search by email, name, address or phone</small>
                    </form>
                </div>
                <table class="table table-responsive table-borderless table-hover">
                    <thead class="table-dark">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Created at</th>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ date_format($user->created_at, 'Y M D') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h1>No hay envios</h1>
        @endif
    </div>
@endsection
