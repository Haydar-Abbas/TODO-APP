@extends('layouts.app')

@section('title', 'All Todos')

@section('content')

  <div class="container d-flex justify-content-center">
    <div class="card mt-5" style="width: 40rem">
      <div class="card-header text-center">
        <h1>All Todos</h1>
      </div>
      <div class="card-body">

        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session()->get('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @elseif (session()->has('delete'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session()->get('delete')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <ul class="list-group list-group-flush">
          @forelse ($todos as $todo)
            <li class="list-group-item">
              <span class="badge bg-secondary">{{ $todo->id }}</span>
              {{ $todo->title }}
              <span class="float-end">
                @if ($todo->completed === 0)
                  <a href="complete/{{$todo->id}}"><i class="bi bi-clipboard2-check-fill" style="color: orange"></i></a>
                @elseif ($todo->completed === 1)
                  <i class="bi bi-clipboard2-check-fill" style="color: chartreuse"></i>
                @endif
                <a href="show/{{$todo->id}}"><i class="bi bi-eye-fill" style="color: blue"></i></a>
                <a href="edit/{{$todo->id}}"><i class="bi bi-pencil-square" style="color: green"></i></i></a>
                <a href="delete/{{$todo->id}}"><i class="bi bi-trash3" style="color: red"></i></a>
              </span>
            </li>
          @empty
            <span class="alert alert-danger">Non Todos!</span>
          @endforelse
        </ul>
      </div>
    </div>
  </div>

@endsection
