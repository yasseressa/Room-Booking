@section('main_menu')
    <!--TOP SECTION-->
    <div class="row" style="background-color: mediumseagreen;">
        <div class="logo">
            <a style="color: white;">МГТУ общежитии
            </a>
        </div>
        <div class="menu-bar">
            <ul>
                <li><a href="{{ url('/') }}">Домашняя страница</a>
                </li>
                <li><a href="{{ url('/room_type') }}">Комнаты</a>
                </li>
                <li><a href="{{ url('/event') }}">События</a>
                </li>
                <li><a href="{{ url('/food') }}">Меню блюд</a>
                </li>
                @if(count(\App\Model\Page::where('title', 'About')->where('status', true)->get()) > 0)
                <li><a href="{{ url('/about') }}">О нас</a>
                </li>
                @endif
                <li><a href="{{ url('/contact') }}">связаться с нами</a>
                </li>


                @if (Auth::guest())
                    <li><a href="{{ route('register') }}">Зарегистрировать</a>
                    </li>
                    <li><a href="{{ route('login') }}">вход</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>




    <div class="all-drop-down">
        <!-- Dropdown Structure -->
        <ul id='drop-home' class='dropdown-content drop-con-man'>
            <li><a href="main.html">Главная страница - По умолчанию</a>
            </li>
            <li><a href="index-1.html">Главная страница - Бронирование</a>
            </li>
        </ul>
    </div>
    <!--TOP SECTION-->
@show