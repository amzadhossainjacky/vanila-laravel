<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Login;
use App\Model\Registration;
use Validator;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //dashboard return
        $id = $req->session()->get('uid');
        $data = Login::Where('id', $id )->first();

        if($req->session()->has('uname')){
			return view('admin.adminHome', compact('data'));
		}else{
			return redirect()->route('login');
        }
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

        //  $regid = Login::where('id', $id)->first();

        $data =Registration::where('id', $id)->first();
        return view('admin.adminProfileEdit',compact('data'));
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

        $validation = Validator::make($request->all(), [
			'name'=>'required',
            'email'=>'required | email | unique:registrations,email,'.$id,
			'password'=>'required',
        ]);

        if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
        }

        $data = Registration::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();

        $login =Login::where('regid', $id)->first();
        $login->uname = $request->name;
        $login->uemail = $request->email;
        $login->upassword = $request->password;
        $login->save();

        return redirect()->route('login');
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
