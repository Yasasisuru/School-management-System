@extends('layout')
@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">payments</div>
        <div class="card-body">
            <form action="{{url('payments')}}" method="post">
                {!! csrf_field() !!}
                <label>Enroll No</label><br>
                <select class="form-control" name="enrollment_id" id="enrollment_id"><br>
                    @foreach ($enrollments as $id => $enroll_no)
                        <option value="{{ $id }}">{{ $enroll_no }}</option>
                    @endforeach
                </select>

                <label>date</label><br>
                <input type="date" name="date" id="date" class="form-control" required><br>
                <label>amount</label><br>
                <input type="text" name="amount" id="amount" class="form-control" required><br>
                 <input type="submit" value="Save" class="btn btn-outline-success">
            </form>
        </div>
    </div>
</div>

@endsection
