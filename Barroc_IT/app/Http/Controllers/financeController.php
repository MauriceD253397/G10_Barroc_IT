<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class financeController extends Controller
{
    public function ShowFinance()
    {

        $allCompanyData = Company::all();

        return view('finance/dashboard',[
            'companyData' => $allCompanyData
        ]);
    }
}
