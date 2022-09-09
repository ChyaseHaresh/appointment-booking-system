@extends('admin.layout')
@section('contents')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Appointments</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <select name="" id="">
                <option value="">Sunday</option>
                <option value="">Monday</option>
                <option value="">Tuesday</option>
                <option value="">Wednesday</option>
                <option value="">Thursday</option>
                <option value="">Friday</option>
                <option value="">Saturrday</option>
            </select>
        </div>
    </div>
    @php
        use Carbon\Carbon;

    @endphp
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

                        <td>
                            @php
                                $dato = new Carbon($list->time);
                                $ch_time = $dato->isoFormat('h:mm A');

                            @endphp
                            {{ $ch_time }}</td>
                        <td>
                            @if ($list->status == 1)
                                <a href="{{ url('admin/appointment/status/') }}/{{ 0 }}/{{ $list->id }}"><button
                                        type="button" class="btn btn-success">Enabled</button></a>
                            @else
                                <a href="{{ url('admin/appointment/status/') }}/{{ 1 }}/{{ $list->id }}"><button
                                        type="button" class="btn btn-danger">Disabled</button></a>
                            @endif

                            @if ($list->confirmation == 0 && $list->status ==1)
                                <a
                                    href="{{ url('admin/appointments/confirmatio/') }}/{{ $list->email }}/{{ $list->id }}"><button
                                        type="button" class="btn btn-info">Confirm</button></a>
                            @else
                                <button type="button" class="btn btn-secondary" disabled>Confirmed</button>
                            @endif

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    </div>
@endsection
