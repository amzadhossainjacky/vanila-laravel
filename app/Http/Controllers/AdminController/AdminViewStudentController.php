<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Registration;
use App\Model\Login;
use DB;
use Yajra\Datatables\Datatables;
use Validator;

class AdminViewStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        /* $data = DB::table('registrations')
            ->join('logins', 'registrations.id', '=', 'logins.regid')
            ->select('registrations.*', 'logins.utype')
            ->where('logins.utype','=','student')
            ->get(); */
      //  $data = Registration::all();
       return view('admin.adminViewStudent');


    }

    public function getData(){

        $data=DB::table('registrations')
        ->join('logins', 'registrations.id', '=', 'logins.regid')
        ->select('registrations.*', 'logins.utype')
        ->where('logins.utype','=','student')
        ->get();

        return Datatables::of($data)->addColumn('action', function($data){

            return  '<a onclick ="showData('.$data->id.')" class="btn btn-success">Show</a>'.' '.
            '<a onclick ="editForm('.$data->id.')" class="btn btn-info">Edit</a>'.' '.'<a onclick ="deleteData('.$data->id.')" class="btn btn-danger">Delete</a>';
        })->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /*  public function search(Request $request)
    {
        //

            $data = DB::table('registrations')
            ->join('logins', 'registrations.id', '=', 'logins.regid')
            ->select('registrations.*', 'logins.utype')
            ->where('logins.utype','=','student')
            ->where('name','like','%'.$request->search.'%')
            ->get();

        if($data){
            foreach ($data as $key => $value) {
                echo '<tr><td>'.$value->id.'</td>
                <td>'.$value->name.'</td>
                <td>'.$value->utype.'</td>
                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
                </tr>';
            }
        }

    } */

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
        $delete= Registration::destroy($id);
        DB::table('logins')->where('regid', $id)->delete();

        return response()->json(['success'=>'Record is successfully deleted.']);
    }
}
