<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    function showappointment(){
        return view("appointment.appointment");
    }
    function insertintoappointmenttable(Request $request){
        dd($request->all());
}
}