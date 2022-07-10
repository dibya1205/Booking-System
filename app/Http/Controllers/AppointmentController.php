<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{  
    //
    public function save(Request $request){
      
        $patient = new Appointment([
           'name' =>$request->get('name'),
           'email' =>$request->get('email'),
           'contact' =>$request->get('contact'),
            'timing' => $request->get('timing'),
            'department' => $request->get('department'),
            'docname' =>$request->get('docname')
        ]);
        $patient->save();

        return redirect()->back();
    }


}
