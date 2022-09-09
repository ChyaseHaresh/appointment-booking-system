@extends('admin.layout')
@section('page_title','Add Staf')

@section('contents')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Staffs</h1>
        </div>
        <div class="container">

            <form action="{{route('staff.add')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="name">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Designation</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="designation">

                </div>

                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    @endsection
