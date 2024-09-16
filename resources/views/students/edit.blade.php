

@extends('layout')
@section('content')
<div class="container mt-5 p-5">
    <div class="card">
        <div class="card-header">Contact page</div>
        <div class="body p-5">
            <form action="{{ url('students/' . $student->id) }}" method="post" >
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $student->id }}" required>
                <label>Name</label><br>
                <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control" required><br>
                <label>Address</label><br>
                <input type="text" name="address" id="address" value="{{ $student->address }}" required class="form-control"><br>
                <label>Mobile</label><br>
                <input type="text" name="mobile" id="mobile" value="{{ $student->mobile }}" required class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection

