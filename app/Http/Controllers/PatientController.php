<?php

namespace App\Http\Controllers;


use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient=Patient::get();
        return view ('Patient_Deshboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    //     $patient = new Patient;
    //     $patient->fIrst_name = $request->fname;
    //     $patient->last_name = $request->lname;
    //     $patient->Email = $request->email;
    //     $patient-> Pass= $request->pass;
    //     $patient->DOB = $request->dob;
    //     $patient->Mobile_number = $request->m_num;
    //     $patient->Cnic = $request->cnic;
    //     $patient->Add = $request->add;
    //     $patient->Gender = $request->r1;
    //    $patient->save();
    //     return redirect(route('index'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Patient;
        $post->fIrst_name=$request->get('fname');
        $post->last_name=$request->get('lname');
        $post->Email=$request->get('email');
        $post->Pass=$request->get('pass');
        $post->DOB=$request->get('dob');
        $post->Mobile_number=$request->get('m_num');
        $post->Cnic=$request->get('cnic');
        $post->Address=$request->get('add');
        $post->Gender=$request->get('r1');
        $post->save();

        return redirect(url('/Patient_Deshboard'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $patient=Patient::all();
        return view('pages/admin_pages/admin_patient',['patient'=>$patient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient,$id)
    {
        $patients=Patient::find($id);
        return view('pages/admin_pages/edit-patient-type',['patient'=>$patients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient,$id)
    {
        $patient=Patient::find($id);
        $patient->first_name=$request->get('fname');
        $patient->last_name=$request->get('lname');
        $patient->Email=$request->get('email');
        $patient->Mobile_number=$request->get('mobile');
        $patient->Address=$request->get('address');
        $patient->save();
        
        return redirect( url('Patient-side-admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient,$id)
    {
        $patient=Patient::find($id);
       $patient->delete();
       return redirect('Patient-side-admin');
    }
}
