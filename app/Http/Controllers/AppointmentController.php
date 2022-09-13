<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Staff;
use App\Models\Timing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result2['data2']=Staff::all();
    return view('appointment', $result2);
    }

    // public function getState(Request $request){
    //     $dato = new Carbon('11:00');

	// 	$cid=$request->post('selected_date');
	// 	$state=Appointment::all();


    //     if ($state->time->isoFormat('H:mm')==$dato->isoFormat('H:mm')) {
    //         $html= '<button class="btn btn-primary times" type="button" onclick="myFunction(this)"
    //         data-bs-toggle="modal" data-bs-target="#exampleModal">'.$dato->isoFormat('H:mm').'</button>';
    //     } else {
    //         $html= '<button class="btn btn-primary disabled times" type="button" onclick="myFunction(this)"
    //         data-bs-toggle="modal" data-bs-target="#exampleModal">'.$dato->isoFormat('H:mm').'</button>';
    //     }


    //     // '<option value="">Select State</option>';
	// 	foreach($state as $list){

    //         if ($list->time->isoFormat('H:mm')==$dato->isoFormat('H:mm')) {
    //             $html.=
    //             // '<option value="'.$list->id.'">'.$list->state.'</option>';

    //             '<button class="btn btn-primary times" type="button" onclick="myFunction(this)"
    //             data-bs-toggle="modal"
    //             data-bs-target="#exampleModal">'.$dato->addHour()->isoFormat('H:mm').'</button>';
    //         } else {
    //             $html.=
    //             // '<option value="'.$list->id.'">'.$list->state.'</option>';

    //             '<button class="btn btn-primary disabled times" type="button" onclick="myFunction(this)"
    //             data-bs-toggle="modal"
    //             data-bs-target="#exampleModal">'.$dato->addHour()->isoFormat('H:mm').'</button>';
    //         }


	// 	}
	// 	echo $html;
	// }

    public function add_appointment_process(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required|numeric',
            'email'=>'required|email',
        ]);

        $model=new Appointment();

        $model->name=$request->post('name');
        $id=$request->post('idss');


        $model->phone=$request->post('phone');
        $model->email=$request->post('email');
        $model->description=$request->post('description');
        $model->status= 1;
        $model->confirmation= 0;
        $model->counselor_assigned= $request->post('counselor');
        $model->date=$request->post('date');
        $model->time=$request->post('time');

        $model->save();

        $model2=Timing::find($id);
        $model2->status=0;
        $model2->save();
        $request->session()->flash('message',"Appointment Request Sent Successfully. You will be notified via email.");
        return redirect('/appointment');
    }


    public function fetchStates(Request $request, $counselor_id, $sdate) {
        $dato = new Carbon('10:00');
        $states = Timing::where(['edate'=>$sdate])->where(['staff_id'=>$counselor_id])->get();
        // dd($states);
        // die;

        // if (Carbon::parse($states[0]->time)->isoFormat('H:mm')==$dato->isoFormat('H:mm')) {
        //     $html= '<button class="btn btn-danger disabled times" type="button" onclick="myFunction(this)"
        //     data-bs-toggle="modal" data-bs-target="#exampleModal">'.$dato->isoFormat('H:mm').'</button>';
        // } else {
        //     $html= '<button class="btn btn-success times" type="button" onclick="myFunction(this)"
        //     data-bs-toggle="modal" data-bs-target="#exampleModal">'.$dato->isoFormat('H:mm').'</button>';
        // }
$html="";
        // for ($i=0; $i < 7; $i++) {

        // foreach($states as $list){
            if (!$states->isEmpty()) {
                for ($j=0; $j < count($states); $j++) {
                    // if (Carbon::parse($states[$j]->time)->subHour()->isoFormat('H:mm')==$dato->isoFormat('H:mm')) {
                        if ($states[$j]->sdate==$sdate && $states[$j]->status==1) {
                            $html.=
                            '<button class="btn btn-info times" type="button" onclick="myFunction(this,'.$states[$j]->id.')"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">'.Carbon::parse($states[$j]->stime)->isoFormat('h:mm A').' - '.Carbon::parse($states[$j]->etime)->isoFormat('h:mm A').'</button>';
                        }
                        else {
                            $html.=
                            '<button class="btn btn-danger  times" type="button" onclick="myFunction(this,'.$states[$j]->id.')"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal" disabled>'.Carbon::parse($states[$j]->stime)->isoFormat('h:mm A').' - '.Carbon::parse($states[$j]->etime)->isoFormat('h:mm A').'</button>';
                        }

                    // }

                }
            }
            else {
                $html.='
                <span>No dates found...</span>
                ';
            }
        //     $html.=
        //     '<button class="btn btn-success times" type="button" onclick="myFunction(this)"
        //     data-bs-toggle="modal"
        //     data-bs-target="#exampleModal">'.$dato->addHour()->isoFormat('H:mm').'</button>';
		// //}
        // }
		// return $html;
        return response()->json([
            'status' => 1,
            'states' => $html
        ]);
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
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
