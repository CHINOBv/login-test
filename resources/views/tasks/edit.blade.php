@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-white">Update you task</h1>
  <div class="d-flex flex-md-row flex-column justify-content-center align-items-center">
      <div class="card flex-column col-md-4">
          <form class="card-body" action="{{ route('tasks.update', $task->id) }}" method="POST">
              @method('PUT')
              @csrf
              <div class="mb-3">
                  <label for="title" class=" col-form-label text-md-end">{{ __('Title') }}</label>

                  <div class="">
                      <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                          name="title" value="{{ $task->title }}" required autocomplete="title" autofocus>

                      @error('title')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="mb-3">
                  <div class="">
                      <div class="form-group">
                          <label for="content">Content</label>
                          <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="3">{{ $task->content }}</textarea>
                      </div>
                      @error('content')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <input type="submit" value="Create" class="btn btn-primary w-100">
          </form>

      </div>
  </div>
</div>
@endsection