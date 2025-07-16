<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Team;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::first();
        $teams = Team::all();
        return view('company.index', compact('company', 'teams'));
    }
}
