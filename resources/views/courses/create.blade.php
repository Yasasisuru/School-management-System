@extends('layout')
@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">Courses</div>
        <div class="card-body">
            <form action="{{url('courses')}}" method="post">
                {!! csrf_field() !!}
                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control" required><br>
                <label>Syllabus</label><br>
                <input type="text" name="syllabus" id="syllabus" class="form-control" required><br>
                <label>Duration</label><br>
                <input type="text" name="duration" id="duration" class="form-control" required><br>
                 <input type="submit" value="Save" class="btn btn-outline-success">
            </form>
        </div>
    </div>
</div>

@endsection
