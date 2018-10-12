<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Development;
use Illuminate\Support\Facades\DB;

class DevelopmentController extends Controller
{
    public function index ()
    {
        //alles uit de database te halen
        $projects = \App\Development::all();


        //naar de view te gaan
        return view('test_development')
            ->with('projects', $projects);
    }

    public function done ()
    {

        //om de database te updaten zodat er staat dat het programma werkt
            DB::table('tbl_projects')
                ->where('id', $_POST )
                ->update(['status' => 'done'])
            ;
            // alles uit de database halen om de view opnieuw te laten zien
            $projects = \App\Development::all();

        //terug te gaan naar de view
        return view('test_development')
            ->with('projects', $projects);
    }

}
