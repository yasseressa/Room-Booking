@component('mail::message')

    Номер был забронирован недавно.
    Пожалуйста, перейдите по следующей ссылке, чтобы проверить свои последние бронирования.
    @component('mail::button', ['url' => url('/dashboard/room/booking')])
        Посещать
    @endcomponent

    Спасибо,
    {{ config('app.name') }}
@endcomponent
