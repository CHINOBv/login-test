@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-md-flex flex-md-row justify-content-between">
            <h1 class="text-white">You'r tasks</h1>
            <div class='d-flex flex-md-row justify-content-around'>
                <form class="form-group" action="{{ route('tasks.index') }}">
                    <div class="row">
                        <input type="text" class="form-control" name="search" id="search" aria-describedby="helpId"
                            value="{{ $search }}" onsubmit="" placeholder="Search you'r task">
                        <input type="submit" value="Search" class="btn btn-primary mt-2">
                    </div>
                    <small id="helpId" class="form-text text-muted">Search for title</small>
                </form>
                <div class="px-4 align-items-start">
                    <a href="{{ route('tasks.create') }}" class="btn btn-success text-white">+</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($tasks as $task)
                <div class="col mb-4">
                    <div class="card {{ $task->completed ? 'bg-success text-white' : '' }} card-hover">
                        <div class="card-body d-flex flex-column flex-md-row justify-content-between">
                            <div>
                                <h3>{{ $task->title }}</h3>
                                <p>{{ $task->content }}</p>
                            </div>
                            <div class="d-flex flex-column align-content-center justify-content-center">
                                <p class="text-end">{{date_format($task->created_at, 'Y M d')}}</p>

                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-red text-white">
                                    </form>
                                    <a class="btn btn-warning text-white"
                                        href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="completed" value="{{ $task->completed ? 0 : 1 }}">
                                        <input type="submit" value="{{ $task->completed ? 'Cancel' : 'Complete' }}"
                                            class="btn btn-{{ !$task->completed ? 'primary' : 'grey text-white' }} ">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
