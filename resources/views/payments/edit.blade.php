

@extends('layout')
@section('content')
<div class="container mt-5 p-5">
    <div class="card">
        <div class="card-header">Courses page</div>
        <div class="body p-5">
            <form action="{{ url('courses/' . $courses->id) }}" method="post" >
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $courses->id }}" required>
                <label>Name</label><br>
                <input type="text" name="name" id="name" value="{{ $courses->name }}" class="form-control" required><br>
                <label>Syllabus</label><br>
                <input type="text" name="syllabus" id="syllabus" value="{{ $courses->syllabus }}" required class="form-control"><br>
                <label>Duration</label><br>
                <input type="text" name="duration" id="duration" value="{{ $courses->duration }}" required class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection

