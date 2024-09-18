@extends('layout')
@section('content')
    <div class="container mt-5">


                <div class="card">
                    <div class="card-hedder text-center">
                        <h2>enrollments</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/enrollments/create') }}" class="btn btn-outline-success btn-sm" title="Add New Students"> Add
                            new</a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>enroll_no</th>
                                        <th>batch_id</th>
                                        <th>student_id</th>
                                        <th>join_date</th>
                                        <th>fee</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollments as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->enroll_no }}</td>
                                            <td>{{ $item->batch->name }}</td>
                                            <td>{{ $item->student->name}}</td>
                                            <td>{{ $item->join_date}}</td>
                                            <td>{{ $item->fee}}</td>
                                            <td>
                                                <a href="{{ url('/enrollments/' . $item->id) }}" title="view enrollments"><button
                                                        class=" btn btn-outline-info">View</button></a>
                                                <a href="{{ url('/enrollments/' . $item->id . '/edit') }}"
                                                    title="edit enrollments"><button class=" btn btn-outline-primary">Edit</button></a>
                                                <form method="POST" action="{{ url('/enrollments' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display: inline">
                                                    {{ @method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-outline-danger" title="Delete enrollments"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)">delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

@endsection
