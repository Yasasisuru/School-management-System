@extends('layout')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Enrollments</div>
            <div class="body p-5">

                <h5 class="card-title mt-4">enroll_no :{{ $enrollments->enroll_no }}</h5>
                <p class="card-text mt-4">batch_id:{{ $enrollments->batch_id}}</p>
                <p class="card-text mt-4">student_id:{{ $enrollments->student_id}}</p>
                <p class="card-text mt-4">join_date:{{ $enrollments->join_date}}</p>
                <p class="card-text mt-4">fee:{{ $enrollments->fee}}</p>
            </div>
        </div>
    </div>
@endsection
