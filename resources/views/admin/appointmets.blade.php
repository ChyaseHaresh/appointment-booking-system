@extends('admin.layout')
@section('contents')
    @php
        use Carbon\Carbon;
        $date = Carbon::now('+5:45')->subDay();
    @endphp
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Appointments </h1>

        <div class="btn-toolbar mb-2 mb-md-0 form-group">
            <div class="btn-group me-2 form-group">
                {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Share</button> --}}
                <select id="full_dates" class="form-group">
                    <option value="" {{ $selection }}>All</option>
                    @for ($i = 0; $i < 7; $i++)
                        @php
                            if (count($data)<1) {
                                $mark = $c_date;
                            } else {
                                $mark = $data[0]->date;
                            }
                        @endphp

                        @if (Carbon::parse($mark)->subDay()->isoFormat('YYYY-MM-DD') == $date->isoFormat('YYYY-MM-DD'))
                            <option value="{{ $date->addDay()->isoFormat('YYYY-MM-DD') }}" {{ $selections }}>
                                {{ $date->isoFormat('dddd') }}
                            </option>
                        @else
                            <option value="{{ $date->addDay()->isoFormat('YYYY-MM-DD') }}">
                                {{ $date->isoFormat('dddd') }}
                            </option>
                        @endif
                    @endfor
                </select>
                <button type="button" class="btn btn-sm btn-outline-secondary">Filter</button>
            </div>

        </div>



    </div>

    <div class="row">
        @if (count($data)<1)
            <div class="container m-auto text-center">
                <h3>No Appointments Booked on this day</h3>
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

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endif

    </div>
    </div>
@endsection
