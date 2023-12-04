<?php

// app/Http/Controllers/CompanyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function registerCompany(Request $request)
    {
        // Validate the form data
        $request->validate([
            'companyname' => 'required|string',
            'companyregistrationNo' => 'required|string',
            'companynophone' => 'required|string', // Adjust the validation as needed
            'companyemail' => 'required|email',
            'companyaddress' => 'required|string',
            // Add other fields as needed
        ]);

        // Create a new Company instance and save it to the database
        Company::create($request->all());

        // Redirect back or to a specific page
        return redirect()->back()->with('success', 'Company registered successfully!');
    }
}

