<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AptdeleteController extends Controller
{

    public function destroy($id){
            DB::delete('delete from appointment where id = ?',[$id]);
            echo "Consulation marked successfull.<br/>";
            echo '<a href = "/doctor/dashboard">Click Here</a> to go back.';
         }
  

}
