<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use App\Company;
class SalesController extends Controller
{

    public function ShowSales()
    {

        $allCompanyData = Company::all();
        $projects = \App\Project::all();
        $contacts = \App\Contact::all();
        $companies = \App\Company::all();
        $appointments = \App\Appointment::all();
        return view('sales/dashboard')
            ->with('projects', $projects)
            ->with('contacts', $contacts)
            ->with('companies', $companies)
            ->with('appointments', $appointments);
    }

    public function ShowAddClient()
    {
        return view('sales/add_client', [

        ]);
    }

    public function ShowAddContact()
    {
        return view('sales/add_contact', [

        ]);
    }

    public function ShowManageContacts()
    {
        return view('sales/manage_contacts', [

        ]);
    }

    public function ShowEditClient()
    {
        return view('sales/edit_client', [

        ]);
    }

    public function ShowSalesHelp()
    {
        return view('sales/help', [

        ]);
    }
    public function DeleteAppointment($appointment_number){

        // Appointment::find($appointment_number)->delete();
    }

}
