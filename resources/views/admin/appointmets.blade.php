@extends('admin.layout')
@section('contents')
<div
class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

<div class="container">
    <div class="row">
    <h1 class="h2">Appointments</h1>
    </div>
    <div class="row">
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $list)
            <tr>
                <th scope="row">{{ $list->id }}</th>
                <td>{{ $list->name }}</td>
                <td>{{ $list->phone }}</td>
                <td>{{ $list->email }}</td>
                <td>{{ $list->date }}</td>
                <td>{{ $list->time }}</td>
                <td>
                    @if ($list->status == 1)
                    <a href="{{ url('admin/appointment/status/') }}/{{ 0 }}/{{ $list->id }}"><button
                        type="button" class="btn btn-success">Enabled</button></a>
                    @else
                        <a href="{{ url('admin/appointment/status/') }}/{{ 1 }}/{{ $list->id }}"><button
                                type="button" class="btn btn-danger">Disabled</button></a>
                    @endif
                </td>
            </tr>
        @endforeach

    </tbody>
  </table>
    </div>
</div>
</div>
@endsection
