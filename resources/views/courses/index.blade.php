@extends('layout')
@section('content')
    <div class="container mt-5">


                <div class="card">
                    <div class="card-hedder text-center">
                        <h2>Courses</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/courses/create') }}" class="btn btn-outline-success btn-sm" title="Add New Students"> Add
                            new</a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>syllabus</th>
                                        <th>duration</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->syllabus }}</td>
                                            <td>{{ $item->duration() }}</td>
                                            <td>
                                                <a href="{{ url('/courses/' . $item->id) }}" title="view courses"><button
                                                        class=" btn btn-outline-info">View</button></a>
                                                <a href="{{ url('/courses/' . $item->id . '/edit') }}"
                                                    title="edit courses"><button class=" btn btn-outline-primary">Edit</button></a>
                                                <form method="POST" action="{{ url('/courses' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display: inline">
                                                    {{ @method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-outline-danger" title="Delete courses"
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
