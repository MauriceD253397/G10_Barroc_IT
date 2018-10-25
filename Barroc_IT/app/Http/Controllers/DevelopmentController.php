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
        $projects = \App\Project::all();
        $contacts = \App\Contact::all();
        $companies = \App\Company::all();

        //naar de view te gaan
        return view('Development\index')
            ->with('projects', $projects)
            ->with('contacts', $contacts)
            ->with('companies', $companies);
    }

    public function done ()
    {

        //om de database te updaten zodat er staat dat het programma werkt
            DB::table('projects')
                ->where('project_id', $_POST )
                ->update(['project_status' => 2])
            ;
            // alles uit de database halen om de view opnieuw te laten zien
            $projects = \App\Project::all();
            $contacts = \App\Contact::all();
            $companies = \App\Company::all();

        //terug te gaan naar de view
        return view('Development\index')
            ->with('projects', $projects)
            ->with('contacts', $contacts)
            ->with('companies', $companies);
    }

}
