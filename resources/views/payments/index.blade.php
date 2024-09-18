@extends('layout')
@section('content')
    <div class="container mt-5">


                <div class="card">
                    <div class="card-hedder text-center">
                        <h2>payments</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/payments/create') }}" class="btn btn-outline-success btn-sm" title="Add New Students"> Add
                            new</a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>enroll_no</th>
                                        <th>date</th>
                                        <th>amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->enrollment_id }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>
                                                <a href="{{ url('/payments/' . $item->id) }}" title="view payments"><button
                                                        class=" btn btn-outline-info">View</button></a>
                                                <a href="{{ url('/payments/' . $item->id . '/edit') }}"
                                                    title="edit payments"><button class=" btn btn-outline-primary">Edit</button></a>
                                                <form method="POST" action="{{ url('/payments' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display: inline">
                                                    {{ @method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-outline-danger" title="Delete payments"
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
