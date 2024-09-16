@extends('layout')
@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">Batches</div>
        <div class="card-body">
            <form action="{{url('batches')}}" method="post">
                {!! csrf_field() !!}
                <label>Batch-Name</label><br>
                <input type="text" name="name" id="name" class="form-control" required><br>
                <label>Course name</label><br>
                <input type="text" name="course_id" id="course_id" class="form-control" required><br>
                <label>Start Date</label><br>
                <input type="text" name="start_date" id="start_date" class="form-control" required><br>
                 <input type="submit" value="Save" class="btn btn-outline-success">
            </form>
        </div>
    </div>
</div>

@endsection
