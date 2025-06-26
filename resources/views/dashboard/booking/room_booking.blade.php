@extends('layouts.dashboard')

@section('content')

    <div class="db-cent-3">
        <div class="db-cent-table db-com-table">
            <div class="db-title">
                <h3><img src="{{ asset("front/images/icon/dbc5.png") }}" alt=""/> Бронирование моего комнаты</h3>
                <p>Просмотрите все ваши бронирования комнат в отеле здесь.</p>
            </div>
            <div class="db-title">
                @foreach ($errors->all() as $error)
                    <p style="color:red">{{ $error }}</p>
                @endforeach

                    @if(Session::has('flash_message'))
                        <p style="color:forestgreen">{{ Session::get('flash_title') }}, {{ Session::get('flash_message') }}</p>
                    @endif
            </div>
            <table class="bordered responsive-table">
                <thead>
                <tr>
                    <th>номер</th>
                    <th>Тип</th>
                    <th>Прибытие</th>
                    <th>Отправление</th>
                    <th>Общая стоимость</th>
                    <th>Статус</th>
                    <th>Платеж</th>
                    <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                @forelse($room_bookings as $index => $room_booking)
                <tr>
                    <td>{{ $room_booking->room->room_number}}</td>
                    <td>{{ $room_booking->room->room_type->name}}</td>
                    <td>{{ $room_booking->arrival_date }}</td>
                    <td>{{ $room_booking->departure_date }}</td>
                    <td>Rs. {{ $room_booking->room_cost }}</td>
                    <td>
                        @if($room_booking->status == "pending")
                            <span class="label label-default">Pending</span>
                        @elseif($room_booking->status == "checked_in")
                            <span class="label label-primary">Checked In</span>
                        @elseif($room_booking->status == "checked_out")
                            <span class="label label-success">Checked Out</span>
                        @else
                            <span class="label label-danger">Cancelled</span>
                        @endif
                    </td>
                    <td>
                        @if($room_booking->payment == true)
                            <span class="db-success">оплачено</span>
                        @else
                            <span class="db-not-success">Не оплачено</span>
                        @endif

                    </td>
                    <td>@if($room_booking->status !== "pending")
                        <a href="{{url('dashboard/room/booking/'.$room_booking->id.'/review')}}"><span class="label label-primary">Обзор</span></a>
                        @endif
                        @if($room_booking->status !== "cancelled")
                            <a href="{{url('dashboard/room/booking/'.$room_booking->id.'/cancel')}}"><span class="label label-danger">Отменить</span></a>
                        @endif
                    </td>

                </tr>
                    @empty
                    <tr>
                        <td>Извините, бронирования не найдено.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        {{ $room_bookings->links() }}
    </div>
@endsection
