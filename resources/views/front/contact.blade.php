@extends('layouts.front')

@section('content')

    <div class="inn-banner">
        <div class="container">
            <div class="row">
                <h4>связаться с нами</h4>
                <p>Свяжитесь с нами любым из следующих способов.</p>
                <p> </p>
                <ul>
                    <li><a href="#">Домашняя страница</a>
                    </li>
                    <li><a href="#">Свяжитесь с нами</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="inn-body-section">
        <div class="container">
            <div class="row">
                <div class="page-head">
                    <h2>Свяжитесь с нами</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Обращайтесь к нам за любыми вопросами и помощью, касающимися нашего отеля и системы.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 new-con">
                    <h2>{{ config('app.name') }} <span>Бронирование</span></h2>
                    <p>Это веб-приложение предоставляет информацию, рейтинги и фотографии нашего отеля. Забронируйте отель недорого.</p>
                    <p>Самые популярные сервисы бронирования отелей.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="{{ asset("front/images/icon/20.png") }}" alt="">
                    <h4>Адрес</h4>
                    <p>{{ config('app.address') }}</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="{{ asset("front/images/icon/22.png") }}" alt="">
                    <h4>КОНТАКТНАЯ ИНФОРМАЦИЯ:</h4>
                    <p> <a href="tel://0099999999" class="contact-icon">Телефон: {{ config('app.phone_number') }}</a>
                        <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">почта: {{ config('app.email') }}</a> </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="{{ asset("front/images/icon/21.png") }}" alt="">
                    <h4>Вебсайт</h4>
                    <p> <a href="{{ config('app.website') }}">Вебсайт: {{ config('app.website') }}</a>
                        <br> <a href="{{ config('app.facebook') }}">Facebook: {{ config('app.facebook') }}</a>
                        <br> <a href="{{ config('app.twitter') }}">Twitter: {{ config('app.twitter') }}</a> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7682.643398767928!2d37.58951687746075!3d55.787115381390855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a1d33c101e9%3A0xcd785c3e7101222a!2z0JzQk9Ci0KMg0KHRgtCw0L3QutC40L0!5e0!3m2!1sen!2sus!4v1702257234228!5m2!1sen!2sus" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
