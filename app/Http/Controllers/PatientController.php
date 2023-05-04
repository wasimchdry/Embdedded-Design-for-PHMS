<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
class PatientController extends Controller
{
    
    public function index()
    {
        $patients = Patient::all();
        return view('welcome', ['patients' => $patients]);
    }
   
    // public function show(Request $request, $id)
    // {
    //     // dd($id);
    //     $id = $request->input('id');
    //     $patient = Patient::find($id);
    
    //     return view('show', [
    //         'patient' => $patient,
    //         'id' => $id,
    //     ]);
    // }
    
    
    public function show(Request $request, $id)
    {
      
        $id = $request->input('id');
        // dd($id);
        $patients = Patient::where('id', $id)->get();
        // dd(  $patients->isEmpty());

        return view('show', [
            'patients' => $patients,
        ]);
    }
    
    
    

}