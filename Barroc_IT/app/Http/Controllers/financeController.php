<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Contact;
use App\Invoice;
use Illuminate\Support\Facades\DB;

class financeController extends Controller
{
    public function ShowFinance()
    {
        $projects = \App\Project::all();
        $contacts = \App\Contact::all();
        $companies = \App\Company::all();
        $invoices = \App\Invoice::all();
        $appointments = \App\Appointment::all();
        return view('finance/dashboard')
            ->with('projects', $projects)
            ->with('contacts', $contacts)
            ->with('companies', $companies)
            ->with('invoices', $invoices)
            ->with('appointments', $appointments);
    }

    public function done()
    {
        DB::table('contacts')
            ->where('contact_id', $_POST)
            ->update(['creditworthy' => 1]);
        $projects = \App\Project::all();
        $contacts = \App\Contact::all();
        $companies = \App\Company::all();
        $invoices = \App\Invoice::all();
        $appointments = \App\Appointment::all();
        return view('finance/dashboard')
            ->with('projects', $projects)
            ->with('contacts', $contacts)
            ->with('companies', $companies)
            ->with('invoices', $invoices)
            ->with('appointments', $appointments);
    }

    public function invoices(Request $request)
    {
        $projects = \App\Project::all();
        $invoices = \App\Invoice::all();
        return view('finance/invoice')
            ->with('projects', $projects)
            ->with('request', $request)
            ->with('invoices', $invoices);

    }
}


