<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Course;

//use Maatwebsite\Excel\Facades\Excel;
use DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminReportController extends Controller
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
        ->join('choose_courses', 'registrations.id', '=', 'choose_courses.uid')
        ->select('registrations.id','registrations.name', 'choose_courses.fees','choose_courses.paid')
        ->whereColumn('choose_courses.fees','>','choose_courses.paid')
        ->get();

        return view('admin.adminReport',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        /* $data=DB::table('registrations')
        ->join('choose_courses', 'registrations.id', '=', 'choose_courses.uid')
        ->select('registrations.id','registrations.name', 'choose_courses.fees','choose_courses.paid')
        ->whereColumn('choose_courses.fees','>','choose_courses.paid')
        ->get(); */

        /* Excel::download('paymenthistory', function($excel) use($data){
            $excel->sheet('Sheet 1', function($sheet) use($data){
                $sheet->FromArray($data);
            });
        }); */

        return Excel::download(new UsersExport, 'data.xlsx');
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
