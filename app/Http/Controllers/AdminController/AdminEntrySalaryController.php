<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Salary;
use App\Model\Registration;
use DB;
use Validator;

class AdminEntrySalaryController extends Controller
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
        ->where('logins.utype','=','teacher')
        ->where('registrations.salaryStatus','=',NULL)
        ->get();

        return view('admin.adminEntrySalary', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Salary::all();
        return view('admin.adminViewSalary', compact('data'));
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
            'userId'=>'required',
			'amount'=>'required | integer',
        ]);

        if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
        }

        $reg = Registration::find($request->userId);
        $reg->salaryStatus = 1;
        $reg->save();

        $data = new Salary();
        $data->tid =$request->userId;
        $data->amount =$request->amount;
        $data->save();

        return redirect()->route('admin.entrySalary');
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

        $data = Salary::where('tid', $id)->first();
        return view('admin.adminEditSalary', compact('data'));

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
            'salaryId'=>'required',
			'amount'=>'required | integer',
        ]);

        if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
        }

        $data = Salary::find($id);
        $data->amount =$request->amount;
        $data->save();
        
        return redirect()->route('admin.viewSalary');

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
