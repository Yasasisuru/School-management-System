<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System.</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
       .sidebar {
      height: 87vh;

    }
    .bg-col{
        background:rgb(185, 255, 239);
    }
</style>

<body>
    <div class="">
        <div class="row">
            <div class="col-12 justify-content-center text-center d-flex bg-col">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand " href="#">
                        <h2>Student Management System.</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class=" border-right col-md-3 sidebar bg-col">
                <div class="list-group list-group-flush mt-5 text-center p-2">
                    <a href="#" class="list-group-item list-group-item-action bg-col ">Home</a>
                    <a href="{{ url('/students') }}" class="list-group-item list-group-item-action bg-col ">Student</a>
                    <a href="{{ url('/teachers') }}" class="list-group-item list-group-item-action bg-col ">Teacher</a>
                    <a href="{{ url('/courses') }}" class="list-group-item list-group-item-action bg-col ">Courses</a>
                    <a href="{{ url('/batches') }}" class="list-group-item list-group-item-action bg-col ">Batches</a>
                    <a href="{{ url('/enrollments') }}" class="list-group-item list-group-item-action bg-col ">Enrollment</a>
                    <a href="{{ url('/payments') }}" class="list-group-item list-group-item-action bg-col ">payments</a>
                </div>
            </div>
            <div class="col-md-9 ">
                 @yield('content')

            </div>
        </div>
    </div>
</body>

</html>
