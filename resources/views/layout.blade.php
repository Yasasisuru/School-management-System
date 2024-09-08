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
      height: 100vh;
      background:rgb(201, 230, 241);
    }
    .bg-col{
        background:rgb(201, 230, 241);
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
            <div class=" border-right col-md-3 sidebar ">
                <div class="list-group list-group-flush mt-5 ">
                    <a href="#" class="list-group-item list-group-item-action bg-col">Home</a>
                    <a href="#" class="list-group-item list-group-item-action bg-col">About</a>
                    <a href="#" class="list-group-item list-group-item-action bg-col">Services</a>
                    <a href="#" class="list-group-item list-group-item-action bg-col">Contact</a>
                </div>
            </div>
            <div class="col-md-9">
                content
            </div>
        </div>
    </div>
</body>

</html>
