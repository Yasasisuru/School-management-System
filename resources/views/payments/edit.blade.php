

@extends('layout')
@section('content')
<div class="container mt-5 p-5">
    <div class="card">
        <div class="card-header">payments page</div>
        <div class="body p-5">
            <form action="{{ url('payments/' . $payments->id) }}" method="post" >
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $payments->id }}" required>
                <label>enrollment_id</label><br>
                <input type="text" name="enrollment_id" id="enrollment_id" value="{{ $payments->enrollment_id}}" class="form-control" required><br>
                <label>date</label><br>
                <input type="text" name="date" id="date" value="{{ $payments->date }}" required class="form-control"><br>
                <label>amount</label><br>
                <input type="text" name="amount" id="amount" value="{{ $payments->amount }}" required class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection

