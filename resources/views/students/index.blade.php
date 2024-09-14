@extends('layout')
@section('content')
    <div class="container mt-5">


                <div class="card">
                    <div class="card-hedder text-center">
                        <h2>Student Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Students"> Add
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
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>
                                                <a href="{{ url('/students/' . $item->id) }}" title="view students"><button
                                                        class=" btn btn-info">View</button></a>
                                                <a href="{{ url('/students/' . $item->id . '/edit') }}"
                                                    title="edit students"><button class=" btn btn-primary">Edit</button></a>
                                                <form method="POST" action="{{ url('/students' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display: inline">
                                                    {{ @method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger" title="Delete Students"
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
