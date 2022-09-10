@extends('admin.layout')
@section('contents')
    @php
        use Carbon\Carbon;
        $now = Carbon::now('+5:45');

    @endphp
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        {{-- <h1 class="h2">Dashboard</h1> --}}
        <h2>Upcoming Appointments</h2>

    </div>

    <div>
        @if (count($data) < 1)
            <div class="container m-auto text-center pt-5">
                <h5>No Upcoming Appointments Available</h5>
            </div>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Time Left</th>
                        <th scope="col">Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        @if (Carbon::parse($list->date)->diffInDays($now->isoFormat('YYYY-MM-DD'))==0)
                            <tr class="table-danger">
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
                                        {{Carbon::parse($list->time)->diffForHumans($now->isoFormat('H:mm:ss'))}}
                                    </td>
                                    <td>
                                        <a href="#">
                                            <button type="button" class="btn btn-outline-dark">Add Notes</button>
                                        </a>
                                    </td>
                                {{-- <td>
            @if ($list->status == 1)
                <a
                    href="{{ url('admin/appointment/status/') }}/{{ 0 }}/{{ $list->id }}"><button
                        type="button" class="btn btn-success">Enabled</button></a>
            @else
                <a
                    href="{{ url('admin/appointment/status/') }}/{{ 1 }}/{{ $list->id }}"><button
                        type="button" class="btn btn-danger">Disabled</button></a>
            @endif

            @if ($list->confirmation == 0 && $list->status == 1)
                <a
                    href="{{ url('admin/appointments/confirmatio/') }}/{{ $list->email }}/{{ $list->id }}"><button
                        type="button" class="btn btn-info">Confirm</button></a>
            @else
                <button type="button" class="btn btn-secondary" disabled>Confirmed</button>
            @endif

        </td> --}}
                            </tr>
                        @elseif (Carbon::parse($list->date)->diffInDays($now->isoFormat('YYYY-MM-DD')) == 1)
                            <tr class="table-warning">
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
                                        {{Carbon::parse($list->date.$list->time)->diffForHumans($now)}}
                                    </td>
                                {{-- <td>
            @if ($list->status == 1)
                <a
                    href="{{ url('admin/appointment/status/') }}/{{ 0 }}/{{ $list->id }}"><button
                        type="button" class="btn btn-success">Enabled</button></a>
            @else
                <a
                    href="{{ url('admin/appointment/status/') }}/{{ 1 }}/{{ $list->id }}"><button
                        type="button" class="btn btn-danger">Disabled</button></a>
            @endif

            @if ($list->confirmation == 0 && $list->status == 1)
                <a
                    href="{{ url('admin/appointments/confirmatio/') }}/{{ $list->email }}/{{ $list->id }}"><button
                        type="button" class="btn btn-info">Confirm</button></a>
            @else
                <button type="button" class="btn btn-secondary" disabled>Confirmed</button>
            @endif

        </td> --}}
                            </tr>
                        @else
                            <tr class="table-success">
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
                                        {{Carbon::parse($list->date)->diffForHumans($now)}}
                                    </td>
                                {{-- <td>
            @if ($list->status == 1)
                <a
                    href="{{ url('admin/appointment/status/') }}/{{ 0 }}/{{ $list->id }}"><button
                        type="button" class="btn btn-success">Enabled</button></a>
            @else
                <a
                    href="{{ url('admin/appointment/status/') }}/{{ 1 }}/{{ $list->id }}"><button
                        type="button" class="btn btn-danger">Disabled</button></a>
            @endif

            @if ($list->confirmation == 0 && $list->status == 1)
                <a
                    href="{{ url('admin/appointments/confirmatio/') }}/{{ $list->email }}/{{ $list->id }}"><button
                        type="button" class="btn btn-info">Confirm</button></a>
            @else
                <button type="button" class="btn btn-secondary" disabled>Confirmed</button>
            @endif

        </td> --}}
                            </tr>
                        @endif
                    @endforeach

                </tbody>
            </table>
        @endif
    </div>
@endsection
