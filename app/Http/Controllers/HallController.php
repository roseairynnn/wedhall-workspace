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
        $request->validate([
            'hallname' => 'required|string',
            'halltype' => 'required|string',
            'hallcapacity' => 'required|numeric',
            'hallimage1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hallimage2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hallimage3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // Add other validation rules as needed
        ]);

        // Create a new Hall instance
        $hall = new Hall([
            'companyid' => $companyId,
            'hallname' => $request->input('hallname'),
            'halladdress' => $request->input('halladdress'),
            'hallzip' => $request->input('hallzip'),
            'hallcity' => $request->input('hallcity'),
            'hallstate' => $request->input('hallstate'),
            'halldescription' => $request->input('halldescription'),
            'hallcapacity' => $request->input('hallcapacity'),
            'hallprice' => $request->input('hallprice'),
            'hallstatus' => 'Available',
            'halltype' => $request->input('halltype'),
        ]);

        // Set boolean values based on checkboxes
        $hall->lightingsystem = $request->has('lightingsystem');
        $hall->audiovisualsystem = $request->has('audiovisualsystem');
        $hall->parkingfacilities = $request->has('parkingfacilities');

        // Handle file uploads for hallimage1, hallimage2, and hallimage3
        foreach (['hallimage1', 'hallimage2', 'hallimage3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $image = $request->file($imageField);
                $imageName = time() . '_' . $imageField . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/hall_images', $imageName); // Adjust the path as needed

                // Save $imageName to the corresponding column in the database
                $hall->{$imageField} = $imageName;
            }
        }

        // Save the hall
        $hall->save();

        return redirect()->route('company-details', ['companyid' => $companyId])
            ->with('success', 'Hall added successfully');
    }
}