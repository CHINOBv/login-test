@extends('layouts.app')

@section('content')
    <div class="container">
      @if (count($users) > 0)  
      <div class="card">
          <table class="table table-borderless table-hover">
              <thead class="table-dark">
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Created at</th>
              </thead>
              <tbody>
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
