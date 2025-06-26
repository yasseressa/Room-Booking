@section('dashboard_left')
    <div class="db-left">
        <div class="db-left-1" style="
                                                padding: 116px 50px 30px 50px;
                                                background: url({{'/storage/avatars/'.Auth::user()->avatar}}) no-repeat center center;
                                                background-size: cover;
                                                position: relative;">
            <h4>{{ Auth::user()->first_name }}</h4>
            <p>{{ Auth::user()->address }}</p>
        </div>



        <div class="db-left-2">
            <ul>
                <li>
                    <a href="{{ url('/dashboard') }}"><img src="{{ asset("front/images/icon/db1.png") }}" alt="" /> All</a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/room/booking') }}"><img src="{{ asset("front/images/icon/db2.png") }}" alt="" /> Комнаты</a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/event/booking') }}"><img src="{{ asset("front/images/icon/db4.png") }}" alt="" /> События</a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/profile') }}"><img src="{{ asset("front/images/icon/db7.png") }}" alt="" /> Профиль</a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/setting') }}" alt="Change Password"><img src="{{ asset("front/images/icon/key.png") }}" alt="Change Password" /> Пароль</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-dash-form').submit();"><img src="{{ asset("front/images/icon/db8.png") }}" alt=""> Выход</a>
                </li>
            </ul>
        </div>
    </div>



    <form id="logout-dash-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @show