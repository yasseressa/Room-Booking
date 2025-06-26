@section('footer')
    <footer class="site-footer clearfix">
        <div class="sidebar-container">
            <div class="sidebar-inner">
                <div class="widget-area clearfix">
                    <div class="widget widget_azh_widget">
                        <div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3 foot-logo"><h4>МГТУ</h4>
                                        <p class="hasimg">МГТУ общежитии предоставляет услугу бронирования недорогих отелей.</p>
                                        <p class="hasimg">Самый популярный сервис бронирования общежития</p>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <h4>Поддержка &amp; Помогите</h4>
                                        <ul class="two-columns">
                                            <li><a href="{{ '/room_type' }}">Комнаты</a>
                                            </li>
                                            <li><a href="{{ '/event' }}">События</a>
                                            </li>
                                            <li><a href="{{ url('/food') }}">Меню блюд</a>
                                            </li>
                                            <li><a href="{{ url('/contact') }}">связаться с нами</a>
                                            </li>
                                            <li><a href="{{ url('/about') }}">о нас</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <h4>Типы комнат</h4>
                                        <ul class="two-columns">
                                            @foreach(\App\Model\RoomType::where('status', true)->orderBy('updated_at','desc')->limit('8')->get() as $room_type)
                                            <li><a href="{{ url('/room_type/'.$room_type->id) }}">{{ $room_type->name }}</a>
                                            </li>
                                                @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <h4>Адрес</h4>
                                        <p>{{ config('app.address', "Kathmandu") }}</p>
                                        <p> <span class="foot-phone">Телефон: </span> <span class="foot-phone">{{ config('app.phone_number', '+79998080') }}</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="foot-sec2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <h4>Способы оплаты</h4>
                                        <p class="hasimg"> <img src="{{ asset("front/images/payment.png") }}" alt="payment"> </p>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <h4>Подпишитесь сейчас</h4>

                                        {!! Form::open(array('url' => '/subscribe')) !!}
                                        {{ Form::hidden('_method', 'POST') }}
                                        @csrf
                                            <ul class="foot-subsc">
                                                <li>
                                                    <input name="email" type="email" placeholder="Введите свой почтовый"> </li>
                                                <li>
                                                    <input type="submit" value="представить">
                                                </li>
                                            </ul>
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-sm-12 col-md-5 foot-social">
                                        <h4>Следуйте за нами</h4>
                                        <p>Присоединяйтесь к тысячам других людей.</p>
                                        <ul>
                                            <li><a href="{{ config('app.facebook') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                            <li><a href="{{ config('app.google') }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                            <li><a href="{{ config('app.twitter') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                            <li><a href="{{ config('app.instagram') }}"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .widget-area -->
            </div>
            <!-- .sidebar-inner -->
        </div>
        <!-- #quaternary -->
    </footer>
    <section class="copy" style="background-color: black;">
        <div class="container">
            <p>авторские права © 2023 {{ config('app.name', "Online Hotel Booking System") }}. &nbsp;&nbsp;Все права защищены. </p>
        </div>
    </section>
    @show