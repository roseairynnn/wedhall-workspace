<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Hall;
use App\Models\Company;

class ReservationController extends Controller
{
    public function showAddForm($reservationid){
        $reservation = Reservation::findOrFail($reservationid);
        return view('reservation.add', ['reservationid' => $reservationid, 'reservation' => $reservation]);
    }

    public function add(Request $request, $reservationid){
        $request->validate([
            'hallid' => 'required|string|max:255',
            'id' => 'required|string|max:255',
            'companyid' => 'required|string|max:255',
            'reservationstartdate' => 'required|string|max:255',
            'reservationenddate' => 'required|string|max:255',
            'reservationstarttime' => 'string|max:255',
            'reservationendtime' => 'string|max:255',
            // Add other validation rules as needed
        ]);

        // Create a new Reservation instance
        $reservation = new Reservation([
            'hallid' => $reservationid,
            'id' => $request->input('id'),
            'companyid' => $request->input('companyid'),
            'reservationstartdate' => $request->input('reservationstartdate'),
            'reservationenddate' => $request->input('reservationenddate'),
            'reservationstarttime' => $request->input('reservationstarttime'),
            'reservationendtime' => $request->input('reservationendtime'),
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
        return redirect()->route('reservation-history-customer', ['reservationid' => $reservationid])->with('success', 'Reservation registered successfully!');
    }

    //FETCHING DATA FROM RESERVATION FORM
    public function showReservations(){
        $reservations = Reservation::all();
        return view('reservation-report', ['reservations' => $reservations]);
    }

    public function showReservationDetails($reservationid){
        $reservation = Reservation::findOrFail($reservationid);
        return view('reservation-report', ['reservation' => $reservation]);
    }

    public function updateReservation(Request $request, $reservationid)
    {
        // Find the reservation by ID
        $reservation = Reservation::findOrFail($reservationid);

        // Validation (customize this based on your needs)
        $request->validate([
            'hallid' => 'required|string|max:255',
            'id' => 'required|string|max:255',
            'companyid' => 'required|string|max:255',
            'reservationstartdate' => 'required|string|max:255',
            'reservationenddate' => 'required|string|max:255',
            'reservationstarttime' => 'required|string|max:255',
            'reservationendtime' => 'required|string|max:255',
        ]);

        // Update the reservation record
        $reservation->update($request->all());

        return redirect()->route('reservation-history-customer', ['reservationid' => $reservationid])->with('success', 'Reservation details updated successfully!');
    }

    public function delete($reservationid) {
        Reservation::find($reservationid)->delete();
    
        // Redirect to the page where you list reservations
        return redirect()->back()->with('success', 'Reservation deleted successfully');
    }

    //FETCHING DATA FROM RESERVATION FORM
    public function showReservationsCustomer(){
        $reservations = Reservation::all();
        return view('reservation-history-customer', ['reservations' => $reservations]);
    }
}
