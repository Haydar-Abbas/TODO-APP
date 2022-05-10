@extends('layouts.app')

@section('title', 'Create Todo')

@section('content')

  <div class="container d-flex justify-content-center">
    <div class="card text-center mt-5" style="width: 40rem">
      <div class="card-header">
        <h1>Create Todo</h1>
      </div>
      <div class="card-body">
        <form action="{{route('todos.store')}}" method="POST">
          @csrf
          <div class="mb-3 @error('todoTitle') is-invalid @enderror">
            <input type="text" name="todoTitle" class="form-control" placeholder="Enter Your Todo">
          </div>
          @error('todoTitle')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="mb-3 @error('todoDescription') is-invalid @enderror">
            <textarea class="form-control" name="todoDescription" placeholder="Write Your Description's Todo" rows="3"></textarea>
          </div>
          @error('todoDescription')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <button type="submit" class="btn btn-success">Create</button>

        </form>
      </div>
    </div>
  </div>

@endsection
