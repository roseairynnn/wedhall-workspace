<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Hall;
use App\Models\Company;

class ReservationController extends Controller
{
    public function showAddForm($hallid){
        $hall = Hall::findOrFail($hallid);
        return view('reservation.add', ['hallid' => $hallid, 'hall' => $hall]);
    }

    public function add(Request $request, $hallid){
        // Log the POST data from the form
        Log::info('Request data:', $request->all());
        Log::info('POST data: ', $request->all());
        $user = auth()->user();
        $hall = Hall::findOrFail($hallid);

        //Check if the hall is available for the selected dates
        $existedreservation = Reservation::where('hallid', $hallid)
            ->where('reservationstartdate', '<=', $request->input('reservationenddate'))
            ->where('reservationenddate', '>=', $request->input('reservationstartdate'))
            ->first();

        if ($existedreservation) {
            return redirect()->back()->with('error', 'The hall is not available for the selected dates');
        }

        // Create a new Reservation instance
        $reservation = new Reservation([
            'hallid' => $hallid,
            'id' => $user->id,
            'companyid' => $hall->companyid,
            'reservationstartdate' => $request->input('reservationstartdate'),
            'reservationenddate' => $request->input('reservationenddate'),
            'reservationamount' => $request->input('reservationamount'),    
            'reservationdays' => $request->input('reservationdays'),    
            'reservationstatus' => 'Pending',
        ]);

        // Set boolean values based on checkboxes
        $reservation->reservationstatus = 'Pending';

        // Handle file uploads for hallimage1, hallimage2, and hallimage3
        foreach (['hallimage1', 'hallimage2', 'hallimage3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $image = $request->file($imageField);
                $name = $image->getClientOriginalName();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $reservation->$imageField = $name;
            }
        }

        // Save the reservation
        $reservation->save();

        // Redirect to the company details page
        return redirect()->route('reservation-history-customer', [$user->id,])->with('success', 'Reservation registered successfully!');
    }

    //FETCHING DATA FROM RESERVATION FORM
    public function showReservations(){
        $reservations = Reservation::all();
        return view('reservation-report', ['reservations' => $reservations]);
    }

    public function showReservationDetails($reservationid){
        $reservation = Reservation::with('hall', 'user', 'company')->findOrFail($reservationid);
        return view('reservation-report', ['reservation' => $reservation]);
    }

    public function updateReservation(Request $request, $reservationid){
        Log::info('POST data: ', $request->all());

        // Find the reservation by ID
        $reservations = Reservation::findOrFail($reservationid);

        // Validation (customize this based on your needs)
        $request->validate([
            'reservationstatus' => 'required|string|max:255',
        ]);

        // Pass the reservation data to the view
        $reservations->update($request->all());
        return redirect()->route('reservation-report')->with('success', 'Reservation details updated successfully!');
    }


    public function delete($reservationid) {
        Reservation::find($reservationid)->delete();
    
        // Redirect to the page where you list reservations
        return redirect()->back()->with('success', 'Reservation deleted successfully');
    }

    //FETCHING DATA FROM RESERVATION FORM
    public function showReservationsCustomer(){
        $userId = auth()->id();
        $reservations = Reservation::where('id', $userId)->get();
        return view('reservation-history-customer', ['reservations' => $reservations]);
    }
}
