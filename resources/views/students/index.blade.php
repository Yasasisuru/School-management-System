@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-hedder">
                        <h2>Student Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/students/create') }}" class="btn btn-succese btn-sm" title="Add New Students"> Add
                            new</a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                             <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Action</th>
                              </tr>
                             </thead>
                             <tbody>
                                @foreach ($students as $item)

                                @endforeach
                             </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
