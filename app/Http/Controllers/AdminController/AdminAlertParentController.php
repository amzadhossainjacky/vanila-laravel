<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Mail;
use Validator;

class AdminAlertParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data=DB::table('registrations')
        ->join('logins', 'registrations.id', '=', 'logins.regid')
        ->select('registrations.*', 'logins.utype')
        ->where('logins.utype','=','student')
        ->get();

        return view('admin.adminAlertParent', compact('data'));
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
        //show mail box


        $data=DB::table('registrations')->where('id', $id)->first();

        return view('admin.adminMailSend', compact('data'));
    }

    public function sendMail(Request $request){

        $validation = Validator::make($request->all(), [
            'recipients'=>'required',
            'subject' => 'required|max:100',
            'message'=>'required |max:500',

        ]);

        if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
        }

        //data
        $to_mail=$request->recipients;
        $to_subject=$request->subject;

        $data = array(
            'email' => 'amzadhossain1922@gmail.com',
            'bodyMessage' => $request->message
        );

        Mail::send('admin.email', $data, function ($message) use($to_mail,$to_subject) {
            $message->from('amzadhossain1922@gmail.com');
            $message->to($to_mail);
            $message->subject($to_subject);
        });

        return redirect()->back();

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
