@extends('layout')
@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">Enrollments</div>
        <div class="card-body">
            <form action="{{url('enrollments')}}" method="post">
                {!! csrf_field() !!}
                <label>enroll_no</label><br>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control" required><br>
                <label>batch_id</label><br>
                <input type="text" name="batch_id" id="batch_id"  required class="form-control"><br>
                <label>student_id</label><br>
                <input type="text" name="student_id" id="student_id" required class="form-control"><br>
                <label>join_date</label><br>
                <input type="date" name="join_date" id="join_date"  required class="form-control"><br>
                <label>fee</label><br>
                <input type="double" name="fee" id="fee"  required class="form-control"><br>
                 <input type="submit" value="Save" class="btn btn-outline-success">
            </form>
        </div>
    </div>
</div>

@endsection
