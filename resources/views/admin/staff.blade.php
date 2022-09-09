@extends('admin.layout')
@section('page_title','Staf')

@section('contents')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"> Staffs</h1>
        </div>
        <div class="container">
           <a href="{{url('admin/staff/add')}}">
            <button >Add Staff</button>
           </a>
           <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Designation</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $list)

              <tr>
                <th scope="row">{{ $list->id }}</th>
                <td>{{ $list->name }}</td>
                <td>{{ $list->designation }}</td>
                <td>
                    <a href="{{ url('admin/staff/edit_staff/') }}/{{ $list->id }}"><button
                        type="button" class="btn btn-success">Edit</button></a>

                <a href="{{ url('admin/staff/delete/') }}/{{ $list->id }}"><button type="button"
                        class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
    @endsection
