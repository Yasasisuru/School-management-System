@extends('layout')
@section('content')
    <div class="container mt-5">


                <div class="card">
                    <div class="card-hedder text-center">
                        <h2>Teachers</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/teachers/create') }}" class="btn btn-outline-success btn-sm" title="Add New teachers"> Add
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
                                    @foreach ($teachers as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>
                                                <a href="{{ url('/teachers/' . $item->id) }}" title="view teachers"><button
                                                        class=" btn btn-outline-info">View</button></a>
                                                <a href="{{ url('/teachers/' . $item->id . '/edit') }}"
                                                    title="edit teachers"><button class=" btn btn-outline-primary">Edit</button></a>
                                                <form method="POST" action="{{ url('/teachers' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display: inline">
                                                    {{ @method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-outline-danger" title="Delete teachers"
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
