<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

    //FETCHING DATA FROM COMPANY REGISTRATION FORM
    public function showCompanies(){
        $companies = Company::all();
        return view('company', ['companies' => $companies]);
    }

    public function showCompanyDetails($id){
        $company = Company::findOrFail($id);
        return view('company-details', compact('company'));
    }

    // Handle company registration
    public function register(Request $request)
    {
        //Validation (customize this based on your needs)
        $request->validate([
            'companyname' => 'required|string|max:255',
            'companyregistrationNo' => 'required|string|max:255',
            'companynophone' => 'required|string|max:255',
            'companyemail' => 'required|string|email|max:255',
            'companyaddress' => 'required|string',
            'companyzip' => 'required|string|max:255',
            'companycity' => 'required|string|max:255',
            'companystate' => 'required|string|max:255',
            'created_at' => 'required|timestamp',
        ]);

        $companyData = $request->all();

        // Create a new company record
        Company::create($companyData);

        return redirect()->route('company')->with('success', 'Company registered successfully!');
    }
}