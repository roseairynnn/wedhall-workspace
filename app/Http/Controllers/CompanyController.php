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

    public function showCompanyDetails($companyid)
{
    $company = Company::with('halls')->findOrFail($companyid);
    return view('company-details', ['company' => $company]);
}

    

    // Handle company registration
    public function register(Request $request)
    {
        /*Validation (customize this based on your needs)
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
        ]);*/

        $companyData = $request->all();
        // Create a new company record
        Company::create($companyData);
        return redirect()->route('company')->with('success', 'Company registered successfully!');
    }

    public function updateCompany(Request $request, $companyid)
    {
        // Find the company by ID
        $company = Company::findOrFail($companyid);

        // Validation (customize this based on your needs)
        $request->validate([
            'companyname' => 'required|string|max:255',
            'companyregistrationNo' => 'required|string|max:255',
            'companynophone' => 'required|string|max:255',
            'companyemail' => 'required|string|email|max:255',
            'companyaddress' => 'required|string',
            'companyzip' => 'required|string|max:255',
            'companycity' => 'required|string|max:255',
            'companystate' => 'required|string|max:255',
        ]);


        //fetch companyname from company table and update it
        /* ? and : are ternary operators
        $company->companyname = $request->filled('companyname') ? $request->input('companyname') : $company->companyname;
        $company->companyregistrationNo = $request->filled('companyregistrationNo') ? $request->input('companyregistrationNo') : $company->companyregistrationNo;
        $company->companynophone = $request->filled('companynophone') ? $request->input('companynophone') : $company->companynophone;
        $company->companyemail = $request->filled('companyemail') ? $request->input('companyemail') : $company->companyemail;
        $company->companyaddress = $request->filled('companyaddress') ? $request->input('companyaddress') : $company->companyaddress;
        $company->companyzip = $request->filled('companyzip') ? $request->input('companyzip') : $company->companyzip;
        $company->companycity = $request->filled('companycity') ? $request->input('companycity') : $company->companycity;
        $company->companystate = $request->filled('companystate') ? $request->input('companystate') : $company->companystate;*/

        // Update the company record
        $company->update($request->all());

        return redirect()->route('company-details', ['companyid' => $companyid])->with('success', 'Company details updated successfully!');
    }
}