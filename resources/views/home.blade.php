@extends('layout')
@section('content')

<div class="container mt-5">
    <div class="row ">
        <div class="col  m-2">
            <div class="card" >
                <div class="card-body">
                  <img src="./resources/img/student.png" alt="student" class="img-thumbnail">
                  <h4 class="card-title mb-2 text-muted">Stusents</h4>
                  <p class="card-text">Number of Students: {{ $studentsCount }}</p>
                  <a href="{{ url('/students') }}" class="card-link">More</a>

                </div>
              </div>

        </div>
        <div class="col  m-2">
            <div class="card" >
                <div class="card-body">

                </div>
              </div>

        </div>
        <div class="col  = m-2">
            <div class="card" >
                <div class="card-body">

                </div>
              </div>

        </div>
        <div class="col   m-2">
            <div class="card" >
                <div class="card-body">
                  
                </div>
              </div>

        </div>
      </div>

</div>

@endsection
