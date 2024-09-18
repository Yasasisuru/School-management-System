@extends('layout')
@section('content')
    <div class="container mt-5">


                <div class="card">
                    <div class="card-hedder text-center">
                        <h2>batches</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/batches/create') }}" class="btn btn-outline-success btn-sm" title="Add New Students"> Add
                            new</a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>course_id</th>
                                        <th>start_date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($batches as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->course->name}}</td>
                                            <td>{{ $item->start_date}}</td>
                                            <td>
                                                <a href="{{ url('/batches/' . $item->id) }}" title="view batches"><button
                                                        class=" btn btn-outline-info">View</button></a>
                                                <a href="{{ url('/batches/' . $item->id . '/edit') }}"
                                                    title="edit batches"><button class=" btn btn-outline-primary">Edit</button></a>
                                                <form method="POST" action="{{ url('/batches' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display: inline">
                                                    {{ @method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-outline-danger" title="Delete batches"
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
