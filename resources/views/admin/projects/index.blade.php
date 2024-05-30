@extends('layouts.app')
@section('content')
    <div class="container mt-5 d-flex">
        @foreach ($projects as $project)
            <div class="card zoom me-5" style="width: 18rem;">
                <img src="{{ Vite::asset($project->image) }}" class="card-img-top" alt="{{ $project->title }} image">
                <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ $project->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection