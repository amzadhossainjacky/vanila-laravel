<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Course;

use Validator;

class AdminCreateCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.adminCreateCourse');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        $data = Course::all();
        return view('admin.adminViewCourse', compact('data'));
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

			'courseType'=>'required',
			'batchType'=>'required',
			'day'=>'required',
			'time'=>'required',
			'fees'=>'required | integer',
        ]);

        if($validation->fails()){

            return response()->json(['errors'=>$validation->errors()->all()]);
        }

        $data = new Course();
        $data->courseType = $request->courseType;
        $data->batch = $request->batchType;
        $data->classDay = $request->day;
        $data->classTime = $request->time;
        $data->fees= $request->fees;
        $data->status= 1;
        $data->uid= $request->session()->get('regid');
        $data->save();

        return response()->json(['success'=>'Record is successfully added']);

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

        $data = Course::find($id);
        return view('admin.adminEditCourse', compact('data'));
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

			'courseType'=>'required',
			'batchType'=>'required',
			'day'=>'required',
			'time'=>'required',
			'fees'=>'required | integer',
        ]);

        if($validation->fails()){

            return response()->json(['errors'=>$validation->errors()->all()]);
        }

        $data = Course::find($id);

        $data->courseType = $request->courseType;
        $data->batch = $request->batchType;
        $data->classDay = $request->day;
        $data->classTime = $request->time;
        $data->fees= $request->fees;
        $data->save();

        return response()->json(['success'=>'Record is successfully added']);
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

        $delete = Course::destroy($id);

        return redirect()->back();
    }
}
