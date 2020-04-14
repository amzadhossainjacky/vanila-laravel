<?php

namespace App\Http\Controllers\TeacherController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Login;
use App\Model\Registration;
use Validator;

class TeacherRegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('registration.teacherReg');
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


        $validation = Validator::make($request->all(), [
            'name'=>'required',
			'email'=>'required | email |unique:registrations',
            'password'=>'required',
            'phone'=>'required | min:11|numeric',
            'qualification'=>'required',
        ]);

        if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
        }

        $reg = new Registration();
        $reg->name = $request->name;
        $reg->email = $request->email;
        $reg->password = $request->password;
        $reg->phone = $request->phone;
        $reg->qualification = $request->qualification;

        $reg->save();

        $regData = Registration::where('email',$request->email)->first();

        $data = new Login();
        $data->uname = $request->name;
        $data->uemail = $request->email;
        $data->upassword = $request->password;
        $data->utype = 'teacher';
        $data->ustatus=0;
        $data->regid =$regData->id;

        $data->save();

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
