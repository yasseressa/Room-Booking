<?php

namespace App\Http\Controllers\Dashboard;

use App\Model\EventBooking;
use Illuminate\Support\Facades\Auth;

use Session;


class EventBookingController extends DashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event_bookings = EventBooking::with('event')
            ->where('user_id', Auth::user()->id)
            ->paginate(10);

        return view('dashboard.booking.event_booking')->with([
            'event_bookings' => $event_bookings
        ]);
    }

    public function cancel($id)
    {
        $event_booking = EventBooking::findOrFail($id);

        // If the payment is already made
        if($event_booking->payment == true){
            return back()->withErrors('К сожалению, вы не можете отменить бронирование, которое уже было оплачено. Пожалуйста, свяжитесь с персоналом отеля.');
        }
        if($event_booking->status == false){
            return back()->withErrors('К сожалению, вы не можете отменить бронирование, которое уже отменено. Пожалуйста, свяжитесь с персоналом отеля.');
        }
        $event_booking->status = false;
        $event_booking->save();

        Session::flash('flash_title', 'Success');
        Session::flash('flash_message', 'Бронирование мероприятия было успешно отменено');
        return redirect('dashboard/event/booking');
    }

}
