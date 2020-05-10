<?php

namespace App\Exports;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //

        $data=DB::table('registrations')
        ->join('choose_courses', 'registrations.id', '=', 'choose_courses.uid')
        ->select('registrations.id','registrations.name', 'choose_courses.fees','choose_courses.paid')
        ->whereColumn('choose_courses.fees','>','choose_courses.paid')
        ->get();

        return $data;
    }
}
