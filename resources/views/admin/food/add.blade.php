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
                            <h4 class="title">Добавить блюдо в меню</h4>
                        </div>
                        <div class="content">
                            {!! Form::open(array('url' => 'admin/food/', 'id' => 'food-add-form', 'files' => true)) !!}
                            {{ Form::hidden('_method', 'POST') }}
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Название еды<star>*</star></label>
                                        <input type="text" name="name" class="form-control border-input"
                                               placeholder="Ex: Royal Suite" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Тип<star>*</star></label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="Закуска"
                                                    @if (Input::old('type') == 'Закуска') selected="selected" @endif>Закуска
                                            </option>
                                            <option value="Суп"
                                                    @if (Input::old('type') == 'Суп') selected="selected" @endif>
                                                Суп
                                            </option>
                                            <option value="Салат"
                                                    @if (Input::old('type') == 'Салат') selected="selected" @endif>
                                                Салат
                                            </option>
                                            <option value="основное блюдо"
                                                    @if (Input::old('type') == 'основное блюдо') selected="selected" @endif>
                                                основное блюдо
                                            </option>
                                            <option value="Десерт"
                                                    @if (Input::old('type') == 'Десерт') selected="selected" @endif>
                                                Десерт
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Изображение<star>*</star></label>
                                        <input type="file" name="image" class="form-control border-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Цена<star>*</star></label>
                                        <input type="text" name="price" class="form-control border-input"
                                               placeholder="Ex: 500" value="{{ old('price') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Описание</label>
                                        <textarea name="description" rows="5" class="form-control border-input"
                                                  placeholder="Ex: The Royal Suite are the luxurious hotel rooms you can book.">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Статус</label>
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
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Добавить меню блюд
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

            var $validator = $("#food-add-form").validate({
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

