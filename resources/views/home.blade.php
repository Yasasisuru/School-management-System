@extends('layout')
@section('content')



<div class="container mt-5">
   <div class="col-12 text-center mt-3 mb-5"><h2>Welcome !</h2></div>
    <div class="row mt-5">
        <div class="col  m-2" >
            <div class="card " style="background-color:rgb(178, 209, 227)" >
                <div class="card-body">
                  <img src="img/student.png" alt="student" class="img-thumbnail">
                  <h3 class="card-title mb-2 text-muted  mt-3">Stusents</h3>
                  <p class="card-text">Number of Students: {{ $studentsCount }}</p>
                  <a href="{{ url('/students') }}" class="card-link">More</a>

                </div>
              </div>

        </div>
        <div class="col  m-2">
            <div class="card" >
                <div class="card-body" style="background-color:rgb(178, 209, 227);" >
                    <img src="img/teachers.webp" alt="student" class="img-thumbnail">
                    <h3 class="card-title mb-2 text-muted  mt-3">Teachers</h3>
                    <p class="card-text">Number of Teachers:{{ $teachersCount }}</p>
                    <a href="{{ url('/students') }}" class="card-link">More</a>
                </div>
              </div>

        </div>
        <div class="col  = m-2">
            <div class="card" >
                <div class="card-body" style="background-color:rgb(178, 209, 227);" >
                    <img src="img/courses.webp" alt="student" class="img-thumbnail">
                    <h3 class="card-title mb-2 text-muted  mt-3">Courses</h3>
                    <p class="card-text">Number of Courses: {{ $coursesCount }}</p>
                    <a href="{{ url('/students') }}" class="card-link">More</a>
                </div>
              </div>

        </div>
        <div class="col   m-2">
            <div class="card" style="background-color:rgb(178, 209, 227);" >
                <div class="card-body">
                  <img src="img/badge.webp" alt="student" class="img-thumbnail">
                  <h3 class="card-title mt-3 mb-2 text-muted">Batches</h3>
                  <p class="card-text">Number of batches: {{ $batchesCount }}</p>
                  <a href="{{ url('/students') }}" class="card-link">More</a>
                </div>
              </div>

        </div>
      </div>

</div>

@endsection
