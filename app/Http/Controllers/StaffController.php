<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Staff::all();

        return view('admin.staff', $result);

    }
    public function add_staff()
    {
        return view('admin.add_staff');

    }

    public function add_staff_process(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'designation'=>'required',
        ]);

        $model=new Staff();

        $model->name=$request->post('name');
        $model->designation=$request->post('designation');

        $model->save();
        $request->session()->flash('message',"Staff Added Successfully");
        return redirect('admin/staff');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result['data']=Staff::where('id',$id)->get();
        return view('admin.edit_staff', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'designation'=>'required',
        ]);

        $id= $request->post('ids');
        $model=Staff::find($id);
$naam=$request->post('name');
        $model->name=$naam;
        $model->designation=$request->post('designation');
        $model->save();
    return redirect('admin/staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        $model=Staff::find($id);
        $model->delete();
    return redirect('admin/staff');
    }
}
