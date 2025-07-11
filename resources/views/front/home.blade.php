@extends('layouts.front')

@section('content')
    <!--Check Availability SECTION-->
    <div>
        <div class="slider fullscreen">
            <ul class="slides">
                @forelse($slider_images as $image)
                <li> <img src="{{'/storage/slider/'.$image->name}}" alt="">
                    <!-- random image -->
                    <div class="caption center-align slid-cap">
                        <h5 class="light grey-text text-lighten-3">{{ $image->small_title }}</h5>
                        <h2>{{ $image->big_title }}</h2>
                        <p>{{ $image->description }}</p>
                        <a href="{{ $image->link }}" class="waves-effect waves-light">{{ $image->link_text }}</a></div>
                </li>
                    @empty
                    <li> <img src="{{ asset("front/images/slider/1.jpg") }}" alt="">
                    <!-- random image -->
                    <div class="caption center-align slid-cap">
                        <h5 class="light grey-text text-lighten-3">Вот наш небольшой слоган.</h5>
                        <h2>Это наш главный слоган!</h2>
                        <p>Эта жизнь должна продолжаться</p> <a href="#" class="waves-effect waves-light">Бронирование</a></div>
                </li>
                    @endforelse
            </ul>
        </div>
    </div>
    <!--End Check Availability SECTION-->
    <!--HOTEL ROOMS SECTION-->

    @if(count($room_types) > 0)
    <div class="hom1 hom-com pad-bot-40">
        <div class="container">
            <div class="row">
                <div class="hom1-title">
                    <h2>Наши гостиничные комнаты</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Каждое пребывание в отеле дарит вам незабываемые впечатления и гостеприимство.</p>
                </div>
            </div>
            <div class="row">
                <div class="to-ho-hotel">
                    @foreach($room_types as $room_type)
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hom-hot-av-tic"> Свободные комнаты: {{ count($room_type->rooms) }} </div> <img src="{{'/storage/room_types/'.$room_type->images->first()->name}}" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2"> <a href="{{url('/room_type/'.$room_type->id)}}"><h4>{{ $room_type->name }}</h4></a> </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>
                                            <div class="dir-rat-star ho-hot-rat-star"> Рейтинг: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                        </li>
                                        <li>
                                            @if($room_type->cost_per_day !== $room_type->discountedPrice)
                                            <span class="ho-hot-pri-dis">{{ config('app.currency').$room_type->cost_per_day }}</span>
                                            @endif
                                            <span class="ho-hot-pri">{{ config('app.currency').$room_type->discountedPrice}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
    <!--END HOTEL ROOMS-->

    @if(count($events) > 0)
    <div class="blog hom-com pad-bot-0">
        <div class="container">
            <div class="row">
                <div class="hom1-title">
                    <h2>События</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Присоединяйтесь к мероприятиям и конференциям, организуемым в нашем отеле.</p>
                </div>
            </div>
            <div class="row">
                <div>
                    @foreach($events as $event)
                    <div class="col-md-3 n2-event">
                        <!--event IMAGE-->
                        <div class="n21-event hovereffect"> <img src="{{'/storage/events/'.$event->image}}" alt="">
                            <div class="overlay"> <a href="{{ url('/event/') }}"><span class="ev-book">Закажите прямо сейчас</span></a> </div>
                        </div>
                        <!--event DETAILS-->
                        <div class="n22-event"> <a href="{{ url('/event/') }}"><h4>{{ $event->name }}</h4></a> <span class="event-date">Дата: {{ $event->date }},</span> <span class="event-by"> Цена: {{ $event->price > 0? config('app.currency').$event->price : 'Free'}}</span>
                            <p>{{ $event->description }}</p>
                            <!--event SHARE-->
                            <div class="event-share">
                                <ul>
                                    <li><a href="https://www.facebook.com/sharer.php?u={{ Request::url() }}" rel="me" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="https://plus.google.com/share?url={{ Request::url() }}" rel="me" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li><a href="https://twitter.com/share?url={{ Request::url() }}&text={{ $event->name }}" rel="me" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://pinterest.com/pin/create/button/?url={{ Request::url() }}&media={{ $event->image }}&description={{ $event->name }}" rel="me" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="blog hom-com pad-bot-0">
        <div class="container">
            <div class="row">
                <div class="hom1-title">
                    <h2>Фотогалерея</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Просматривайте фотографии гостиничных номеров, меню блюд и мероприятий</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="inn-services head-typo typo-com mar-bot-0">
                        <ul id="filters" class="clearfix">
                            <li><span class="filter active" data-filter=".room, .facilities, .food, .event">All</span>
                            </li>
                            <li><span class="filter" data-filter=".room">Комнаты</span>
                            </li>
                            <li><span class="filter" data-filter=".food">Меню блюд</span>
                            </li>
                            <li><span class="filter" data-filter=".event">События</span>
                            </li>
                        </ul>
                        <div id="portfoliolist">
                            <!-- Room Types -->
                            @foreach($room_types as $room_type)
                                <div class="portfolio room" data-cat="room">
                                    <div class="portfolio-wrapper"> <img src="{{'/storage/room_types/'.$room_type->images->last()->name}}" alt="" />
                                        <div class="label">
                                            <div class="label-text"> <a class="text-title">{{ $room_type->name }}</a></div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Event Events -->
                            @foreach($events as $event)
                                <div class="portfolio event" data-cat="event">
                                    <div class="portfolio-wrapper"> <img src="{{ '/storage/events/'.$event->image }}" alt="" />
                                        <div class="label">
                                            <div class="label-text"> <a class="text-title">{{ $event->name }}</a></div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        <!-- Food Photos -->
                            @foreach($foods as $food)
                                <div class="portfolio food" data-cat="food">
                                    <div class="portfolio-wrapper"> <img src="{{ '/storage/foods/'.$food->image }}" alt="" />
                                        <div class="label">
                                            <div class="label-text"> <a class="text-title">{{ $food->name }}</a></div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog hom-com">
        <div class="container">
            <div class="row">
                <div class="hom1-title">
                    <h2>подробнее</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(count($slider_images)> 0)
                <div class="col-md-4">
                    <div class="bot-gal h-gal">
                        <h4>Фотогалерея</h4>
                        <ul>
                            @foreach($slider_images as $image)
                            <li><img class="materialboxed" data-caption="{{ $image->big_title }}" src="{{ '/storage/slider/'.$image->name }}" alt="">
                            </li>
                                @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                <div class="col-md-4">
                    <div class="bot-gal h-vid">
                        <h4>Видеогалерея</h4>
                        <iframe src="{{config('app.video')}}?autoplay=0&amp;showinfo=0&amp;controls=0" allowfullscreen></iframe>
                        <h5>Вводное видео</h5>
                        <p>Посмотрите это видео, чтобы узнать больше об удобствах нашего отеля, роскоши и окружающей среде</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-blog">
                        <h4>Последние отзывы</h4>
                        <ul>
                            @if(count($reviews) > 0)
                                @foreach($reviews as $review)
                            <li>
                                <a href="#!"> <img src="{{'/storage/avatars/'.$review->room_booking->user->avatar}}" alt="">
                                    <h5>{{ $review->room_booking->user->first_name }}@if($review->rating > 0), {{ $review->rating }} <i class="fa fa-star" aria-hidden="true"></i>@endif</h5> <span>{{ \Carbon\Carbon::parse($review->updated_at)->diffForHumans() }}</span>
                                    <p>{{ $review->review }}</p>
                                </a>
                            </li>
                           @endforeach
                                @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
