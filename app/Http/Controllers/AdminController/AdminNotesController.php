<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Course;
use App\Model\Note;
use DB;
use Validator;

class AdminNotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Course::all();
        return view('admin.adminNotesUpload', compact('data'));
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
            'courseId'=>'required',
            'title' => 'required|max:255',
            'file'=>'required',
            'file'=>'mimes:pdf,doc,docx,PDF,DOC,DOCX,zip,ZIP,RAR,rar,txt | max:12000',

        ]);

        if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
        }

        $data = new Note();
        $data->title = $request->title;
        $data->cid = $request->courseId;
        $file = $request->file('fileDetails');

        if($file){

            $file_name = hexdec(uniqid());
            $ext =strtolower($file->getClientOriginalExtension());
            $full_file_name =$file_name.'.'.$ext;
            $upload_path ='public/assets/upload/';
            $file_url = $upload_path.$full_file_name;
            $success =$file->move($upload_path,$full_file_name);
            $data->fileName =$file_url;

            //data insert with file 
            $data->save();

            return redirect()->back();
        }
        else{
            return redirect()->back();
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
