@section('top_menu')
    @auth
        <div class="row" >
            <div class="top-bar">
                <ul style="background-color: mediumseagreen;">
                    <li><a href="#" style="color:white">Номер телефона:  {{ config('app.phone_number', '+70123456789') }}</a>
                    </li>
                    <li><a class='dropdown-button' href='#' data-activates='dropdown1' style="color:white"> Мой аккаунт <i
                                    class="fa fa-angle-down"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="all-drop-down">
            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content drop-con-man'>
                @if(Auth::user()->role == "admin")
                    <li>
                        <a href="{{ url('/admin') }}"><img src="{{ asset("front/images/icon/2.png") }}" alt=""> Панель админ</a>
                    </li>
                @endif
                <li>
                    <a href="{{ url('/dashboard') }}"><img src="{{ asset("front/images/icon/15.png") }}" alt=""> Панель мониторинга пользователя</a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/room/booking') }}"><img src="{{ asset("front/images/icon/1.png") }}" alt=""> Бронирование моего комнате</a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/event/booking') }}"><img src="{{ asset("front/images/icon/17.png") }}" alt=""> Мои заказы на мероприятия</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                        <img src="{{ asset("front/images/icon/13.png") }}" alt=""> выйти</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

    @endauth
@show