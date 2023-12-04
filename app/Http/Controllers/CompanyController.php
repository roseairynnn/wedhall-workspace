<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Company;

class CompanyController extends Controller{

    //FETCHING DATA FROM COMPANY REGISTRATION FORM
    public function showCompanies(){
        $companies = Company::all();
        return view('company', ['companies' => $companies]);
    }

    public function showCompanyDetails($id){
        $company = Company::findOrFail($id);
        return view('company-details', compact('company'));
    }

    // Show the update form - baru tambah
    public function showUpdateForm($id){
        $company = Company::findOrFail($id);
        return view('update-company', compact('company'));
    }

    //Handle company registration
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

    // Handle company update
    public function companyUpdate(Request $request, $id)
    {
        // Validation
        $request->validate([
            'companyname' => 'required|string|max:255',
            'companyregistrationNo' => [
                'required',
                'string',
                'max:255',
                Rule::unique('companies')->ignore($id), // Ignore the current company ID
            ],
            'companynophone' => 'required|string|max:255',
            'companyemail' => 'required|string|email|max:255',
            'companyaddress' => 'required|string',
            'companyzip' => 'required|string|max:255',
            'companycity' => 'required|string|max:255',
            'companystate' => 'required|string|max:255',
            'created_at' => 'required|timestamp',
        ]);

        $companyData = $request->all();

        // Update the company record
        $company = Company::findOrFail($id);
        $company->update($companyData);

        return redirect()->route('company')->with('success', 'Company updated successfully!');
    }
}