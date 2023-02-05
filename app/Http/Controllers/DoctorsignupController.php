<?php

namespace App\Http\Controllers;

use App\Models\Doctorsignup;
use Illuminate\Http\Request;

class DoctorsignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function D_signup_store(Request $request)
    {
        $post=new Doctorsignup;
        $post->first_name=$request->get('fname');
        $post->last_name=$request->get('lname');
        $post->Email=$request->get('email');
        $post->Password=$request->get('pass');
        $post->DOB=$request->get('dob');
        $post->Mobile_number=$request->get('m_num');
        $post->License_number=$request->get('l_num');
        $post->Address=$request->get('add');
        $post->Gender=($request->get('ro1'));
        $post->save();

        return redirect(url('Doctor_Deshboard '));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctorsignup  $doctorsignup
     * @return \Illuminate\Http\Response
     */
    public function show(Doctorsignup $doctorsignup)
    {
        $doctorsignups=Doctorsignup::all();
        return view('pages/admin_pages/admin_doctor',['doctorsignups'=>$doctorsignups]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctorsignup  $doctorsignup
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctorsignup $doctorsignup,$id)
    {
        $doctorsignups=Doctorsignup::find($id);
        return view('pages/admin_pages/edit-doctor-type',['doctorsignup'=>$doctorsignups]);
    }
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctorsignup  $doctorsignup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctorsignup $doctorsignup,$id)
    {
        $doctorsignup=Doctorsignup::find($id);
        $doctorsignup->first_name=$request->get('fname');
        $doctorsignup->last_name=$request->get('lname');
        $doctorsignup->Email=$request->get('email');
        $doctorsignup->Mobile_number=$request->get('mobile');
        $doctorsignup->Address=$request->get('address');

        $doctorsignup->save();
        return redirect( url('doctor-side-admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctorsignup  $doctorsignup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctorsignup $doctorsignup,$id)
    {
       $doctorsignup=Doctorsignup::find($id);
       $doctorsignup->delete();
       return redirect('doctor-side-admin');
    }
}
