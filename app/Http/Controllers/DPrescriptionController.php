<?php

namespace App\Http\Controllers;

use App\Models\D_prescription;
use Illuminate\Http\Request;

class DPrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function D_presciption_store(Request $request)
    {
       
      
       
       


        $post=new D_prescription;
        $post->Patient_name=$request->get('p_name');
        $post->Prescription_Date=$request->get('pre_date');
        $post->Patient_ID=$request->get('p_id');
        $post->Diagnose=$request->get('dia');
        $post->Medicine_Name=json_encode($request->get('med'));
        $post->Timing=json_encode($request->get('time'));
        
        $post->save();

        return redirect(url('/Doctor_Deshboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\D_prescription  $d_prescription
     * @return \Illuminate\Http\Response
     */
    public function show(D_prescription $d_prescription)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\D_prescription  $d_prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(D_prescription $d_prescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\D_prescription  $d_prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, D_prescription $d_prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\D_prescription  $d_prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(D_prescription $d_prescription)
    {
        //
    }
}
