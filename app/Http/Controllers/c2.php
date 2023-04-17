<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class c2 extends Controller
{
    public function getDataFromDB(){
        $m = DB::table('module')->paginate(3);
        // $m = DB::table('module')->simplePaginate(3);
        // return $m;
        return view('readGD', ['modules'=> $m]);
    }
}
