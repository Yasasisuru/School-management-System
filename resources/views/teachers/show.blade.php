@extends('layout')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">teachers Page</div>
            <div class="body p-5">

                <h5 class="card-title mt-4">Name :{{ $teachers->name }}</h5>
                <p class="card-text mt-4">Address :{{ $teachers->address }}</p>
                <p class="card-text mt-4">Mobile :{{ $teachers->mobile }}</p>
            </div>
        </div>
    </div>
@endsection
