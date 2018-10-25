<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $error = null;
        return view('auth\login')->with('error', $error);
    }
    public function login(Request $request)
    {
        $users = \App\Users::all();
        $error = null;
        foreach ($users as $user)
        {
            if ($user->username == $request->username)
            {
                if ($user->password == $request->password)
                {
                    if ($user->department_id == 1)
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
                    }elseif ($user->department_id == 2)
                    {
                        $projects = \App\Project::all();
                        $contacts = \App\Contact::all();
                        $companies = \App\Company::all();
                        $appointments = \App\Appointment::all();
                        return view('sales/dashboard')
                            ->with('projects', $projects)
                            ->with('contacts', $contacts)
                            ->with('companies', $companies)
                            ->with('appointments', $appointments);
                    }elseif ($user->department_id == 3)
                    {

                    }

                }
                else
                {
                    $error = 'the password is wrong';

                }
            }
            else
            {
                $error = 'the username is wrong';

            }
        }

        return view('auth\login')->with('error', $error);
    }

}
