<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class financeController extends Controller
{
    public function ShowFinance()
    {

//        $allCompanyData = Company::all();

        return view('finance/dashboard',[
//            'companyData' => $allCompanyData
        ]);
    }
}
