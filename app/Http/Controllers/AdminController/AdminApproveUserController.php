<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Login;
use Validator;

class AdminApproveUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Login::where('utype','student')->orderBy('id','desc')->get();

        return view('admin.adminApproveStudent', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Login::where('utype','teacher')->orderBy('id','desc')->get();

        return view('admin.adminApproveTeacher', compact('data'));
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
    public function approveStudent($id)
    {
        //

        $user = Login::find($id);
        $user->ustatus = 1;
        $user->save();

        return redirect()->back();
    }

    public function denyStudent($id)
    {
        //

        $user = Login::find($id);
        $user->ustatus = 0;
        $user->save();

        return redirect()->back();
    }

    public function approveTeacher($id)
    {
        //

        $user = Login::find($id);
        $user->ustatus = 1;
        $user->save();

        return redirect()->back();
    }

    public function denyTeacher($id)
    {
        //

        $user = Login::find($id);
        $user->ustatus = 0;
        $user->save();

        return redirect()->back();
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
