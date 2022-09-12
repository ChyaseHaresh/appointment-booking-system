<?php

namespace App\Http\Controllers;

use App\Models\Timing;
use App\Models\Staff;
use Illuminate\Http\Request;

class TimingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Staff::all();
        $result2['data2']=Timing::all();

        return view('admin.time_slots', $result, $result2);
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
        $request->validate([
            'name'=>'required',
        ]);

        $model=new Timing();

        $model->staff_id=$request->post('name');
        $model->sdate=$request->post('sdate');
        $model->stime=$request->post('stime');
        $model->edate=$request->post('edate');
        $model->etime=$request->post('etime');
        $model->status=1;

        $model->save();
        $request->session()->flash('message',"Staff Added Successfully");
        return redirect('admin/time_slots');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timing  $timing
     * @return \Illuminate\Http\Response
     */
    public function show(Timing $timing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timing  $timing
     * @return \Illuminate\Http\Response
     */
    public function edit( $status, $id)
    {
        $model=Timing::find($id);
        $model->status=$status;
        $model->save();
        // $request->session()->flash('message','Category status updated');
        return redirect('admin/time_slots');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timing  $timing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timing $timing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timing  $timing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timing $timing)
    {
        //
    }
}
