<?php

namespace App\Http\Controllers\Dashboard;

use App\Model\RoomBooking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class RoomBookingController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room_bookings = RoomBooking::with('room')
            ->where('user_id', Auth::user()->id)
            ->paginate(10);

        return view('dashboard.booking.room_booking')->with([
            'room_bookings' => $room_bookings
        ]);
    }

    public function cancel($id)
    {
        $room_booking = RoomBooking::findOrFail($id);


        // If the payment is already made
        if($room_booking->payment == true){
            return back()->withErrors('К сожалению, вы не можете отменить бронирование, которое уже было оплачено. Пожалуйста, свяжитесь с персоналом отеля.');
        }

        // If the user is already checked_in
        if($room_booking->status == "checked_in"){
            return back()->withErrors('К сожалению, вы не можете отменить бронирование, которое уже зарегистрировано, без разрешения персонала. Пожалуйста, свяжитесь с персоналом отеля.');
        }
        if($room_booking->status == "checked_out"){
            return back()->withErrors('К сожалению, вы не можете отменить бронирование, которое уже оформлено, без разрешения персонала. Пожалуйста, свяжитесь с персоналом отеля.');
        }
        if($room_booking->status == "cancelled"){
            return back()->withErrors('К сожалению, вы не можете отменить бронирование, которое уже отменено. Пожалуйста, свяжитесь с персоналом отеля.');
        }

        $room_booking->status = "cancelled";
        $room_booking->save();

        Session::flash('flash_title', 'Success');
        Session::flash('flash_message', 'Бронирование номера было успешно отменено.');
        return redirect('dashboard/room/booking');
    }

}
