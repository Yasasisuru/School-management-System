@extends('layout')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Courses</div>
            <div class="body p-5">

                <h5 class="card-title mt-4">Name :{{ $courses->name }}</h5>
                <p class="card-text mt-4">Syllabus:{{ $courses->syllabus}}</p>
                <p class="card-text mt-4">Duration :{{ $courses->duration }}</p>
            </div>
        </div>
    </div>
@endsection
