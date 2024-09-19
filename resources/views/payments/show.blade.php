@extends('layout')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">payments</div>
            <div class="body p-5">

                <h5 class="card-title mt-4">enrollment_id' :{{ $payments->enrollment_id }}</h5>
                <p class="card-text mt-4">date:{{ $payments->date}}</p>
                <p class="card-text mt-4">amount :{{ $payments->amount }}</p>
            </div>
        </div>
    </div>
@endsection
