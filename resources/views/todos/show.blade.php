@extends('layouts.app')

@section('title', 'Show Todos')

@section('content')

  <div class="container d-flex justify-content-center">
    <div>
      <div class="text-center pt-3">
        <h1>{{ $todos->title }}</h1>
      </div>
      <div class="card mt-5" style="width: 40rem">
        <div class="card-header">
          <span>Details</span>
          @if ($todos->completed === 0)
            <span class="badge bg-warning float-end">
              Non Completed
            </span>
          @else
            <span class="badge bg-success float-end">
              Completed
            </span>
          @endif

        </div>
        <div class="card-body">
          {{ $todos->description }}
        </div>
        <div class="card-footer">
          Created At:
          <span class="badge bg-info float-end">{{ $todos->created_at }}</span><br>
          Updated At:
          <span class="badge bg-info float-end">{{ $todos->updated_at }}</span>
        </div>
      </div>
    </div>
  </div>

@endsection
