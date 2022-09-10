<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Staff;
use Mail;

class ConfirmMail extends Controller
{
    public function index($mail, $id)
    {
        $result['data']= Appointment::where('id', $id)->get();
        $result['counselors']=Staff::all();

    return view('admin.send_mail', $result);
    }

    public function send_mail(Request $request)
    {
        $request->validate([
            'counselor'=>'required',
        ]);
        $email= $request->post('email');
        $counselor= $request->post('counselor');
        $id= $request->post('id');
        $datas=Appointment::where('id',$id)->get();
        $data=['name'=>$datas[0]->name, 'counselor'=> $counselor, 'date'=>$datas[0]->date, 'time'=>$datas[0]->time];
        $user['to']=$email;
        Mail::send('admin/email_format', $data, function ($message) use ($user) {
            $message->to($user['to']);
            $message->subject('Appointment Approval');
        });

        $model=Appointment::find($id);
        $model->confirmation=1;
        $model->councelor_assigned=$counselor;
        $model->save();
    return redirect('admin/appointments');
    }

}
