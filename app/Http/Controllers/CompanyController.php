<?php

// app/Http/Controllers/YourController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Company; // Replace with your Company model namespace

class CompanyController extends Controller
{
    public function registerCompany(Request $request)
    {
        // Validate the form data
        $request->validate([
            'companyname' => 'required|string',
            'companyregistrationNo' => 'required|string|unique:company,companyregistrationNo',
            'companynophone' => 'required|string',
            'companyemail' => 'required|string|email',
            'alt_1' => 'required|string',
            'alt_2' => 'required|string',
            'companyzip' => 'required|string',
            'companycity' => 'required|string',
            'companystate' => 'required|string',
        ]);
        Log::info('Input Data:', $request->all());
        
        // Create a new Company instance
        $company = new Company();
        $company->companyname = $request->input('companyname');
        $company->companyregistrationNo = $request->input('companyregistrationNo');
        $company->companyNophone = $request->input('companynophone');
        $company->companyEmail = $request->input('companyemail');
        $company->companyAddress = $request->input('alt_1') . ', ' . $request->input('alt_2') . ', ' . $request->input('companyzip') . ', ' . $request->input('companycity') . ', ' . $request->input('companystate');

        // Save the company to the database
        $company->save();
        Log::info('Company registered successfully!');

        // Redirect back or to a specific page
        return redirect()->back()->with('success', 'Company registered successfully!');
    }
}
