@extends('layouts.front')

@section('content')
    <div class="inn-body-section pad-bot-55">
        <div class="container">
            <div class="row">
                <div class="page-head">
                    <h2>вход</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                </div>
                <!--TYPOGRAPHY SECTION-->
                <div class="col-md-6">
                    <div class="head-typo typo-com collap-expand book-form inn-com-form">
                        <h2>Войдите с почты</h2>
                        <form class="col s12" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="email" type="email"
                                           class="validate {{ $errors->has('email') ? ' invalid' : '' }}" value="{{ old('email') }}" required>
                                    <label>почта</label>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="password" type="password"
                                           class="validate {{ $errors->has('password') ? ' invalid' : '' }}" required>
                                    <label>Пароль</label>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input name="remember" type="checkbox" id="test5" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="test5" style="padding: 1px 33px">Помни меня</label>
                                    @if ($errors->has('remember'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('remember') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-field col s6">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Забыли свой пароль
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" value="login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="head-typo typo-com collap-expand book-form inn-com-form">
                        <h2>Войдите с помощью социальных сетей</h2>
                        <p>Нажмите любую кнопку и авторизуйтесь для входа с помощью следующих социальных сетей.</p>
                        <form class="col s12">
                            <div class="row">
                                <div class="social-btn">
                                    <a class="waves-light" href="{{ url('/social/auth/redirect', ['twitter']) }}" id="twitter">вход с Twitter</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="social-btn">
                                    <a class="waves-light" href="{{ url('/social/auth/redirect', ['google']) }}" id="google">вход с Google</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--END TYPOGRAPHY SECTION-->
            </div>
        </div>
    </div>
@endsection
