@extends('layout')
@section('contents')
    @php
        use Carbon\Carbon;
        $date = Carbon::now('+5:45');
        $dato = new Carbon('11:00');
        echo $date->isoFormat('YYYY-MM-DD');
        $c_date = $date->isoFormat('YYYY-MM-DD');
        $c_time = $date->isoFormat('H:mm');

        $c_week = $date->isoFormat('ddd, MMM DD');

        $ch_time = $date->addHour()->isoFormat('H:mm');
    @endphp


    <div class="container">
        <h2 class="mt-5">Appointment Availability</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h5>Available days</h5>
                <select class="form-select mb-3 date" aria-label="Default select example">
                    <option value="{{ $date->isoFormat('dddd, MMM DD') }}">
                        {{ $date->isoFormat('dddd, MMM DD') }}
                    </option>


                    @for ($i = 0; $i < 6; $i++)
                        <option value="{{ $date->addDay()->isoFormat('dddd, MMM DD') }}">
                            {{ $date->isoFormat('dddd, MMM DD') }}
                        </option>
                    @endfor
                </select>

                <div class="d-grid gap-2 d-md-block">
                    <h5>Available time slots</h5>
                    <button class="btn btn-primary times" type="button" onclick="myFunction(this)" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">{{ $dato->isoFormat('H:mm') }}</button>

                    @for ($i = 0; $i < 6; $i++)
                        <button class="btn btn-primary times" type="button" onclick="myFunction(this)"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">{{ $dato->addHour()->isoFormat('H:mm') }}</button>
                    @endfor
                    {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><a class="time" href="">11:00</a></button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><a class="time" href="">12:00</a></button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><a class="time" href="">2:00</a></button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><a class="time" href="">3:00</a></button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal"><a class="time" href="">4:00</a></button> --}}
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/appoint.svg') }}" alt="">
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #83aef7;">
                        <h5 class="modal-title" id="exampleModalLabel">Appointment with Nepal Education Consultancy
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex">
                            <i class="fa-regular fa-calendar-days "></i>
                            <p class="mx-2 " id="modal_date"></p>
                        </div>

                        <div class="d-flex">
                            <i class="fa-solid fa-clock"></i>
                            <p class="mx-2 mb-3" id="modal_time"></p>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-auto col-form-label"><i
                                    class="fa-solid fa-user"></i></label>Name
                            <div class="col-sm-9">
                                <input type="name" class="form-control" id="name"placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-auto col-form-label"><i
                                    class="fa-solid fa-phone"></i></label>Phone
                            <div class="col-sm-9">
                                <input type="phone" class="form-control" id="phone"
                                    placeholder="Enter your phone number">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-auto col-form-label"><i
                                    class="fa-solid fa-envelope"></i></label>Email
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" class="col-auto col-form-label"><i
                                    class="fa-solid fa-clipboard"></i></label>Description
                            <div class="col-sm-9">
                                <textarea class="form-control" id="description" placeholder="Enter appointment description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary">Place Appointment</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
