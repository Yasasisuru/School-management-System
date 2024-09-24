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
                <select class="form-control"name="course_id" id="course_id"><br>
                    @foreach ($batches as $id=>$name)
                    <option value="{{$id}}">{{$name}}</option>
                    @endforeach


                  </select>
                <label>student_id</label><br>
                <select class="form-control"name="course_id" id="course_id"><br>
                    @foreach ($students as $id=>$name)
                    <option value="{{$id}}">{{$name}}</option>
                    @endforeach


                  </select>
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
