<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class SalesController extends Controller
{

    public function ShowSales(){

        $allCompanyData = Company::all();

        // Making a base query to get all data. Will optimise later if needed.

        return view('sales/sales',[
            'companyData' => $allCompanyData
        ]);
    }

}
