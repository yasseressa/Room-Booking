@component('mail::message')

    Мероприятие было недавно забронировано.
    Пожалуйста, перейдите по следующей ссылке, чтобы проверить свои последние бронирования.
    @component('mail::button', ['url' => url('/dashboard/event/booking')])
        Посещать
    @endcomponent

    Спасибо,<br>
    {{ config('app.name') }}
@endcomponent
