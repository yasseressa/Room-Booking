<?php

namespace App\Http\Controllers\Admin;

use App\Model\Room;
use App\Model\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RoomController extends AdminController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $room_type = RoomType::find($id);

        return response(view('admin.room.view')
            ->with('room_type', $room_type));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $room_type = RoomType::find($id);

        return view('admin.room.add')
            ->with('room_type', $room_type);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $rules = [
            'room_number' => 'required|numeric|max:99999|unique:rooms,room_number',
            'description' => 'max:200',
            'status' => 'boolean|required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all)
                ->withErrors($validator);
        } else {
            $room_type = RoomType::find($id);
            $room = new Room();
            $room->room_number = $request->input('room_number');
            $room->description = $request->input('description');
            $room->status = $request->input('status');

            $room->room_type()->associate($room_type);
            $room->save();

            Session::flash('flash_title', 'Success');
            Session::flash('flash_message', 'Комната была добавлена. Добавьте еще комнаты.');

            return redirect('/admin/room_type/'.$id.'/room');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $room_id)
    {
        $room_type = RoomType::find($id);
        $room = Room::find($room_id);

        return view('admin.room.edit')
            ->with('room_type', $room_type)
            ->with('room', $room);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id, $room_id, Request $request)
    {
        $rules = [
            'room_number' => 'required|numeric|max:99999|unique:rooms,room_number,'.$room_id,
            'description' => 'max:200',
            'status' => 'boolean|required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all)
                ->withErrors($validator);
        } else {
            $room = Room::find($room_id);
            $room->room_number = $request->input('room_number');
            $room->description = $request->input('description');
            if ($request->has('available')) {
                $room->available = $request->input('available');
            }
            $room->status = $request->input('status');
            $room->save();

            Session::flash('flash_title', 'Success');
            Session::flash('flash_message', 'комната была обновлена.');

            return redirect('/admin/room_type/'.$id.'/room');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $room_id)
    {
        $room = Room::findOrFail($room_id);

        // Delete room bookings
        foreach ($room->room_bookings as $booking) {
            $booking->delete();
        }

        if ($room->delete()) {
            Session::flash('flash_title', 'Success');
            Session::flash('flash_message', 'Комната была удалена');

            return redirect('/admin/room_type/'.$id.'/room');
        }

        return redirect()
            ->back()
            ->withErrors(['message' => 'Извините, комната не удалось удалить.']);
    }
}
