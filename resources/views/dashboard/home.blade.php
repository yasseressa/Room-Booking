@extends('layouts.dashboard')

@section('content')
    <div class="db-cent-2">
        <div class="db-2-main-1">
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/dbc5.png") }}" alt=""> <span> Бронирование комната</span>
                <p></p>
                <h2>{{ $total_room_bookings }}</h2> </div>
        </div>
        <div class="db-2-main-1">
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/dbc6.png") }}" alt=""> <span> Бронирование мероприятий</span>
                <p></p>
                <h2>{{ $total_event_bookings }}</h2> </div>
        </div>
        <div class="db-2-main-1">
            <div class="db-2-main-2"> <img src="{{ asset("front/images/icon/dbc3.png") }}" alt=""> <span> Причитающиеся платежи</span>
                <p></p>
                <h2>{{ $total_pending_payments }}</h2> </div>
        </div>
    </div>
    <div class="db-cent-3">
        <div class="db-cent-table db-com-table">
            <div class="db-title">
                <h3><img src="{{ asset("front/images/icon/dbc5.png") }}" alt=""/> Бронирование комната</h3>
                <p>Ознакомьтесь с вашими предстоящими бронированиями отелей здесь</p>
            </div>
            <table class="bordered responsive-table">
                <thead>
                <tr>
                    <th>Номер комнаты</th>
                    <th>Тип</th>
                    <th>Прибытие</th>
                    <th>Отправление</th>
                    <th>Общая стоимость</th>
                    <th>Статус</th>
                    <th>Платеж</th>
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
                                <span class="label label-default">в очереди</span>
                            @elseif($room_booking->status == "checked_in")
                                <span class="label label-primary">Заселение</span>
                            @elseif($room_booking->status == "checked_out")
                                <span class="label label-success">Выезд</span>
                            @else
                                <span class="label label-danger">Отмененный</span>
                            @endif
                        </td>
                        <td>
                            @if($room_booking->payment == true)
                                <span class="db-success">оплачено</span>
                            @else
                                <span class="db-not-success">Не оплачено</span>
                            @endif
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td>Извините, бронирование комнат не найдено.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="db-cent-3">
        <div class="db-cent-table db-com-table">
            <div class="db-title">
                <h3><img src="{{ asset("front/images/icon/dbc6.png") }}" alt=""/> Мои заказы на мероприятия</h3>
                <p>Просмотрите все ваши заказы на мероприятия здесь.</p>
            </div>
            <table class="bordered responsive-table">
                <thead>
                <tr>
                    <th>Номер</th>
                    <th>Событие</th>
                    <th>Место</th>
                    <th>Дата</th>
                    <th>Количество билетов</th>
                    <th>Общая стоимость</th>
                    <th>Статус</th>
                    <th>Платеж</th>
                </tr>
                </thead>
                <tbody>
                @forelse($event_bookings as $index => $event_booking)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $event_booking->event->name}}</td>
                        <td>{{ $event_booking->event->venue}}</td>
                        <td>{{ $event_booking->event->date}}</td>
                        <td>{{ $event_booking->number_of_tickets }}</td>
                        <td>Rs. {{ $event_booking->total_cost }}</td>
                        <td>
                            @if($event_booking->status == true)
                                <span class="db-success">Активный</span>
                            @else
                                <span class="db-not-success">Отмененный</span>
                            @endif
                        </td>
                        <td>
                            @if($event_booking->payment == true)
                                <span class="db-success">оплачено</span>
                            @else
                                <span class="db-not-success">Не оплачено</span>
                            @endif
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td>Sизвините, бронирования мероприятий не найдено.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="db-cent-3">
        <div class="db-cent-acti">
            <div class="db-title">
                <h3><img src="{{ asset("front/images/icon/review.png") }}" alt=""/> Мои отзывы</h3>
                <p>Последние отзывы, представленные мной.</p>
            </div>
            <ul>
                @forelse($room_booking_with_reviews as $room_booking)
                <li>
                    <div class="db-cent-wr-img"> <img src="{{ asset("front/images/users/3.png") }}" alt=""> </div>
                    <div class="db-cent-wr-con">
                        <h6>Бронирование отеля
                            @if($room_booking->status == "cancelled")
                                <span class="label label-danger">Отмененный</span>
                            @elseif($room_booking->status == "checked_in")
                                <span class="label label-primary">Заселение</span>
                            @elseif($room_booking->status == "checked_out")
                                <span class="label label-success">Выезд</span>
                            @endif
                        </h6>
                        <span class="lr-revi-date">Дата рассмотрения: {{ \Carbon\Carbon::parse($room_booking->review->updated_at)->format('Y-m-d') }}</span>
                        <br>
                        <span class="lr-revi-date">Рейтинг: {{ $room_booking->review->rating }}/5</span>

                        <p>
                            {{ $room_booking->review->review }}
                        </p>
                        <a href="{{ url('dashboard/room/booking/'.$room_booking->review->id.'/review') }}" class="btn btn-danger btn-sm">Обзор обновлений</a>

                    </div>
                </li>
                    @empty
                    Извините, вы еще не отправили ни одного отзыва.
                    @endforelse
            </ul>
        </div>
    </div>
@endsection
