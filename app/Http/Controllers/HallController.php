<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;
use App\Models\Company;

class HallController extends Controller
{
    public function showAddForm($companyId)
    {
        $company = Company::findOrFail($companyId);
        return view('halls.add', ['companyId' => $companyId, 'company' => $company]);
    }

    public function add(Request $request, $companyId)
    {
        /*  $request->validate([
            'hallname' => 'required|string',
            'halltype' => 'required|string',
            'hallcapacity' => 'required|numeric',
            // Add other validation rules as needed
        ]);*/

        // Create a new Hall instance
        $hall = new Hall([
            // Add other hall attributes based on your form
            'companyid' => $companyId, // Associate the hall with the company

            'hallname' => $request->input('hallname'), 
            'halladdress' => $request->input('halladdress'),
            'hallzip' => $request->input('hallzip'),
            'hallcity' => $request->input('hallcity'),
            'hallstate' => $request->input('hallstate'),
            'halldescription' => $request->input('halldescription'),
            'hallcapacity' => $request->input('hallcapacity'),
            'hallprice' => $request->input('hallprice'),
            'hallimage1' => $request->input('hallimage1'),
            'hallimage2' => $request->input('hallimage2'),
            'hallimage3' => $request->input('hallimage3'),
            'hallstatus' => 'Available',
            'halltype' => $request->input('halltype'), 
       
        ]);

        // Set boolean values based on checkboxes
        $hall->lightingsystem = $request->has('lightingsystem');
        $hall->audiovisualsystem = $request->has('audiovisualsystem');
        $hall->parkingfacilities = $request->has('parkingfacilities');

        // Save the hall
        $hall->save();

        return redirect()->route('company-details', ['companyid' => $companyId])
            ->with('success', 'Hall added successfully');
    }
}