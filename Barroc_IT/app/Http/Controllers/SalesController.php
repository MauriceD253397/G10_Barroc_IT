<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Contact;
use phpDocumentor\Reflection\Types\Null_;

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
    public function AddClient(Request $request){

        $client = new Contact();
        $company = new Companies();

        $client->contact_id;
        $client->contact_name = $request->contactName;
        $client->last_name = $request->lastName;
        $client->adress = $request->address;
        $client->zipcode = $request->zipcode;
        $client->residence = $request->residence;
        $client->telephone_number = $request->phoneNumber;
        $client->fax_number= $request->faxNumber;
        $client->email = $request->email;
        $client->bankrekeningnummer = NULL;
        $client->saldo = NULL;
        $client->limiet_rood = NULL;
        $client->grootboeknummer = NULL;
        $client->creditworthy = NULL;
        $client->created_at = time();
        $client->updated_at = time();
        $company->company_name = $request->companyName;
        $client->save();



    return view('sales/add_client',[]);
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
