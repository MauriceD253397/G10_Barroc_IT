<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Contact;

class SalesController extends Controller
{

    public function ShowSales()
    {

        $allCompanyData = Company::all();

        return view('sales/dashboard',[
            'companyData' => $allCompanyData
        ]);
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

}
