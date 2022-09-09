@extends('admin.layout')
@section('contents')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Appointment Confirmation</h1>
    </div>
    <div class="" style="font-size: 20px">
        <div class="row mb-3" style="width: 500px">
            <div class="col-md-4">
                <span>Name</span><br>
                <span>Email</span><br>
                <span>Phone</span><br>
                <span>Date</span><br>
                <span>Time</span><br>
                <span>Description</span>

            </div>
            <div class="col-md-8">
                <span>{{ $data[0]->name }}</span><br>
                <span>{{ $data[0]->email }}</span><br>
                <span>{{ $data[0]->phone }}</span><br>
                <span>{{ $data[0]->date }}</span><br>
                <span>{{ $data[0]->time }}</span><br>
                <span>{{ $data[0]->description }}</span>
            </div>
        </div>
        <br>
        <form action="{{ route('email.send') }}" method="POST">
            @csrf
            Assign Councelor
            <select name="counselor" id="" required>
                <option value="">Select Counselor</option>
                @foreach ($counselors as $counselor)
                <option value="{{$counselor->name}}">{{$counselor->name}}</option>
                @endforeach
            </select>
            @error('counselor')
                {{ $message }}
            @enderror
            <input type="hidden" name="email" value="{{ $data[0]->email }}">
            <input type="hidden" name="id" value="{{ $data[0]->id }}">
            <br>
            <hr class="hr">
            Confirm via Email
            <button type="submit" class="btn btn-secondary">{{ $data[0]->email }}</button>
        </form>
    </div>
@endsection
