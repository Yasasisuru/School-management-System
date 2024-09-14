@extends('layout')
@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">Students Page</div>
        <div class="body p-5">

            <h5 class="card-title mt-2">Name {{$students->name}}</h5>
            <p class="card-text mt-2">Address :{{$students->address}}</p>
            <p class="card-text mt-2">Mobile  :{{$students->mobile}}</p>
        </div>
    </div>
</div>
@endsection
