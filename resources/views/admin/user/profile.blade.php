@extends('layouts.admin')
@section('style')
    @parent
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Обновить профиль</h4>
                        </div>
                        <div class="content">
                            {!! Form::open(array('url' => 'admin/user/'.Auth::user()->id.'/profile', 'files' => true)) !!}
                            {{ Form::hidden('_method', 'PUT') }}
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>имя</label>
                                        <input type="text" name="first_name" class="form-control border-input"
                                               placeholder="ex: Leonardo" value="{{$user->first_name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>фамилия</label>
                                        <input type="text" name="last_name" class="form-control border-input"
                                               placeholder="ex: Vinci" value="{{$user->last_name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Пол</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option selected="" disabled="">- Выберите пол -</option>
                                            <option value="М"
                                                    @if($user->gender == "М")
                                                    selected="selected"
                                                    @endif
                                            >М
                                            </option>
                                            <option value="Ж"
                                                    @if($user->gender == "Ж")
                                                    selected="selected"
                                                    @endif
                                            >Ж
                                            </option>
                                            <option value="другие"
                                                    @if($user->gender == "другие")
                                                    selected="selected"
                                                    @endif
                                            >другие
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Телефон</label>
                                        <input type="text" name="phone" class="form-control border-input"
                                               placeholder="Phone Number" value="{{$user->phone}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Адрес</label>
                                        <input type="text" name="address" class="form-control border-input"
                                               placeholder="Home Address" value="{{$user->address}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Аватар</label>
                                        <input type="file" name="avatar" class="form-control border-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>почта</label>
                                        <input type="email" name="email" class="form-control border-input"
                                               placeholder="ex: hari@gmail.com" value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>обо мне</label>
                                        <textarea name="about" rows="5" class="form-control border-input"
                                                  placeholder="Here can be your description">{{$user->about}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Обновить профиль</button>
                            </div>
                            <div class="clearfix"></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{asset("backend/js/moment.min.js")}}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{asset('/backend/js/bootstrap-datetimepicker.js')}}"></script>
    <script>
        // Init DatetimePicker
        demo.initFormExtendedDatetimepickers();
    </script>
@endsection

