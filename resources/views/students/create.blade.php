@extends('layout')
@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">Students page</div>
        <div class="card-body">
            <form action="{{url('students')}}" method="post">
                {!! csrf_field() !!}
                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label>Address</label><br>
                <input type="text" name="address" id="address" class="form-control"><br>
                <label>Mobile</label><br>
                <input type="text" name="mobile" id="obile" class="form-control"><br>
                 <input type="submit" value="Save" class="btn btn-outline-success">
            </form>
        </div>
    </div>
</div>

@endsection
