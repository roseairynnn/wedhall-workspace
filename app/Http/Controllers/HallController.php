<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;
use App\Models\Company;
use Illuminate\Support\Facades\Log;

class HallController extends Controller
{
    public function showHalls(){
        $halls = Hall::all();
        return view('typehall-customer', ['halls' => $halls]);
    }
    
    public function showHallsDetails($hallid){
        $hall = Hall::where('hallid', $hallid)->firstOrFail();
        
        return view('typehall', ['hall' => $hall]);
    }

    public function showAddForm($companyId){
        $company = Company::findOrFail($companyId);
        return view('halls.add', ['companyId' => $companyId, 'company' => $company]);
    }

    public function add(Request $request, $companyId){
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

    public function updateHall(Request $request, $hallid){
        Log::info('POST data:', $request->all());

        // Find the hall
        $hall = Hall::findOrFail($hallid);
        
        $request->validate([
            'hallimage1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hallimage2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hallimage3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hallname' => 'required|string|max:255',
            'halladdress' => 'required|string|max:255',
            'hallzip' => 'required|string|max:255',
            'hallcity' => 'required|string|max:255',
            'hallstate' => 'required|string|max:255',
            'halldescription' => 'required|string|max:1000',
            'hallcapacity' => 'required|numeric',
            'hallprice' => 'required|numeric',
            'hallstatus' => 'Available',
            'halltype' => 'required|string|max:255',
            'lightingsystem' => 'boolean|required|in:0,1',
            'audiovisualsystem' => 'boolean|required|in:0,1',
        ]);

        // Set boolean values based on checkboxes
        $hall->lightingsystem = $request->has('lightingsystem');
        $hall->audiovisualsystem = $request->has('audiovisualsystem');
        $hall->parkingfacilities = $request->has('parkingfacilities');

        //handle file uploads for hallimage1, hallimage2, and hallimage3
        foreach (['hallimage1', 'hallimage2', 'hallimage3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $image = $request->file($imageField);
                $imageName = time() . '_' . $imageField . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/hall_images', $imageName); // Adjust the path as needed

                // Save $imageName to the corresponding column in the database
                $request->{$imageField} = $imageName;
            }
        }

        // Update the hall record
        $hall->update($request->all());

        return redirect()->route('typehall',['hallid' => $hallid] )->with('success', 'Hall details updated successfully');
    }

    

    public function delete($hallid) {
        Hall::find($hallid)->delete();
    
        // Redirect to the page where you list halls
        return redirect()->back()->with('success', 'Hall deleted successfully');
    }
    
}
