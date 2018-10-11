<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Development;
use Illuminate\Support\Facades\DB;

class DevelopmentController extends Controller
{
    public function index ()
    {
        $projects = \App\Development::all();

        //dd($projects);

        return view('test_development')
            ->with('projects', $projects);
    }

    public function done ()
    {

        $id = $_POST;
            DB::table('tbl_projects')
                ->where('id', $id )
                ->update(['status' => 'done'])
            ;

            $projects = \App\Development::all();





        return view('test_development')
            ->with('projects', $projects);
    }

}
// heb nog database nodig. en hier komt de data om te laten zien van daan
//$projects