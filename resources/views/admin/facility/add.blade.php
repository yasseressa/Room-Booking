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
                            <h4 class="title">Добавить объект</h4>
                        </div>
                        <div class="content">
                            {!! Form::open(array('url' => 'admin/facility/', 'id' => 'facility-add-form')) !!}
                            {{ Form::hidden('_method', 'POST') }}
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Название объекта<star>*</star></label>
                                        <input type="text" name="name" class="form-control border-input"
                                               placeholder="Ex: объекта" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <select name="icon" id="icon" class="form-control">
                                            <option selected="" disabled="">- Выберите режим перемещения -</option>
                                            <option value="AIR"
                                                    @if (Input::old('icon') == 'AIR ') selected="selected" @endif>
                                                    Авиация
                                            </option>
                                            <option value="DRIVING"
                                                    @if (Input::old('icon') == 'DRIVING ') selected="selected" @endif>
                                                    вождение
                                            </option>
                                            <option value="TRANSIT"
                                                    @if (Input::old('icon') == 'TRANSIT') selected="selected" @endif>
                                                    ОБЩЕСТВЕННЫЙ ТРАНСПОРТ
                                            </option>
                                            <option value="BICYCLING"
                                                    @if (Input::old('icon') == 'BICYCLING ') selected="selected" @endif>
                                                    ЕЗДА НА ВЕЛОСИПЕДЕ
                                            </option>
                                            <option value="WALKING"
                                                    @if (Input::old('icon') == 'WALKING') selected="selected" @endif>
                                                    пешком
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Описание</label>
                                        <textarea name="description" rows="5" class="form-control border-input"
                                                  placeholder="">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1"
                                                    @if (Input::old('status') == '1') selected="selected" @endif>Активный
                                            </option>
                                            <option value="0"
                                                    @if (Input::old('status') == '0') selected="selected" @endif>
                                                    Неактивный
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Добавить объект
                                </button>
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

    <!--  Forms Validations Plugin -->
    <script src="{{asset("backend/js/jquery.validate.min.js")}}"></script>

    <!--  Select Picker Plugin -->
    <script src="{{asset('backend/js/bootstrap-selectpicker.js')}}"></script>

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{asset("backend/js/moment.min.js")}}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{asset('/backend/js/bootstrap-datetimepicker.js')}}"></script>
    <script>
        // Init DatetimePicker
        demo.initFormExtendedDatetimepickers();
    </script>

    <script>
        $().ready(function () {

            var $validator = $("#facility-add-form").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 5,
                        maxlength: 50
                    },
                    description: {
                        maxlength: 200
                    },
                    gender: {
                        required: true
                    }
                }
            });
        });
    </script>
@endsection

