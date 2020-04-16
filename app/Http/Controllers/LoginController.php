<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Login;
use Validator;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //view login page
        return view('Login.login');
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
        // check user

        $validation = Validator::make($request->all(), [
			'uemail'=>'required | email',
			'upassword'=>'required',
        ]);

        if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
		}

        //database finding
        $find = Login::where('uemail', $request->uemail)
                ->where('upassword', $request->upassword)
                ->first();

        if($find != null){

            if($find->utype == "admin"){

                $request->session()->put('uname', $find->uname);
                $request->session()->put('uemail', $find->uemail);
                $request->session()->put('uid', $find->id);
                $request->session()->put('regid', $find->regid);

                return redirect()->route('admin.home');
            }

            if($find->utype == "student" && $find->ustatus == 1){
                $request->session()->put('uname', $find->uname);
                $request->session()->put('uemail', $find->uemail);
                $request->session()->put('uid', $find->id);
                $request->session()->put('regid', $find->regid);

                 return redirect()->route('student.home');
            }

            if($find->utype == "teacher" && $find->ustatus == 1){
                $request->session()->put('uname', $find->uname);
                $request->session()->put('uemail', $find->uemail);
                $request->session()->put('uid', $find->id);
                $request->session()->put('regid', $find->regid);

                return redirect()->route('teacher.home');
            }

            else{
                $request->session()->flash('msg', 'invalid username/password');
                return redirect()->route('login');
            }

        }else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login');
        }
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
