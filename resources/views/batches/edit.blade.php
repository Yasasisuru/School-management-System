

@extends('layout')
@section('content')
<div class="container mt-5 p-5">
    <div class="card">
        <div class="card-header">batches page</div>
        <div class="body p-5">
            <form action="{{ url('batches/' . $batches->id) }}" method="post" >
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $batches->id }}" required>
                <label>Name</label><br>
                <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control" required><br>
                <label>course_id</label><br>
                <input type="text" name="course_id" id="course_id" value="{{ $batches->course_id }}" required class="form-control"><br>
                <label>start_date</label><br>
                <input type="date" name="start_date" id="start_date" value="{{ $batches->start_date }}" required class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection

