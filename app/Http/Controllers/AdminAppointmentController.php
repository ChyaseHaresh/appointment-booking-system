<?php

namespace App\Http\Controllers;

use App\Models\AdminAppointment;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result2['data']=Appointment::all();
        // dd($result2['data']);
        // die;
        $result2['selection']="selected";
        $result2['selections']="";
        return view('admin.appointmets',$result2);
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
     * @param  \App\Models\AdminAppointment  $adminAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(AdminAppointment $adminAppointment,$date)
    {
        $result2['data']=Appointment::where('date', $date)->get();
        $result2['selections']="selected";
        $result2['selection']="";
        $result2['c_date']="";
        $c_date['c_date']=$date;
        return view('admin.appointmets',$result2, $c_date);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminAppointment  $adminAppointment
     * @return \Illuminate\Http\Response
     */
    public function edit( $status, $id)
    {
        $model=Appointment::find($id);
        $model->status=$status;
        $model->save();
        // $request->session()->flash('message','Category status updated');
        return redirect('admin/appointments');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminAppointment  $adminAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminAppointment $adminAppointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminAppointment  $adminAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminAppointment $adminAppointment)
    {
        //
    }
}
