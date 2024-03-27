<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //Register new staff with username, phone, email and default password started with S0 and incrementing number and role "staff"
    public function registerStaff(Request $request) {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $staff = new Staff();
        $staff->username = $request->username;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->password = 'S0' . Staff::count();
        $staff->role = 'staff';`
        $staff->save();

        return redirect()->route('staff');
    }
}
