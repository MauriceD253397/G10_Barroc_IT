<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class SalesController extends Controller
{

    public function ShowSales(){

        $allCompanyData = Company::all();

        return view('sales/dashboard',[
            'companyData' => $allCompanyData
        ]);
    }

    public function ShowAddClient(){
        return view ('sales/add_client', [

        ]);
    }

}
