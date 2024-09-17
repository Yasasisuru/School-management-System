

@extends('layout')
@section('content')
<div class="container mt-5 p-5">
    <div class="card">
        <div class="card-header">enrollments page</div>
        <div class="body p-5">
            <form action="{{ url('enrollments/' . $enrollments->id) }}" method="post" >
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $enrollments->id }}" required>
                <label>enroll_no</label><br>
                <input type="text" name="enroll_no" id="enroll_no" value="{{ $enrollments->enroll_no}}" class="form-control" required><br>
                <label>batch_id</label><br>
                <input type="text" name="batch_id" id="batch_id" value="{{ $enrollments->batch_id }}" required class="form-control"><br>
                <label>student_id</label><br>
                <input type="text" name="student_id" id="student_id" value="{{ $enrollments->student_id }}" required class="form-control"><br>
                <label>join_date</label><br>
                <input type="date" name="join_date" id="join_date" value="{{ $enrollments->join_date }}" required class="form-control"><br>
                <label>fee</label><br>
                <input type="double" name="fee" id="fee" value="{{ $enrollments->fee }}" required class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection

