@extends('layouts.front')

@section('content')

    <!--TOP SECTION-->
    <div class="hp-banner"> <img src="{{ asset('front/images/detailed-banner.jpg') }}" alt=""> </div>
    <!--END HOTEL ROOMS-->
    <!--CHECK AVAILABILITY FORM-->
    <div class="check-available">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inn-com-form">
                        <form class="col s12">
                            <div class="row">
                                <div class="col s12 avail-title">
                                    <h4>Проверьте наличие свободных номеров</h4> </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m4 l2">
                                    <select>
                                        <option value="" disabled selected>Выберите комната</option>
                                        <option value="1">Главная спальня</option>
                                        <option value="2">Мини-люкс</option>
                                        <option value="3">Ультра Люкс</option>
                                        <option value="4">Роскошь</option>
                                        <option value="5">Высший сорт </option>
                                        <option value="6">Обычный</option>
                                    </select>
                                </div>
                                <div class="input-field col s12 m4 l2">
                                    <select>
                                        <option value="" disabled selected>Нет взрослых</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="1">4</option>
                                    </select>
                                </div>
                                <div class="input-field col s12 m4 l2">
                                    <select>
                                        <option value="" disabled selected>Нет детей</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="1">4</option>
                                    </select>
                                </div>
                                <div class="input-field col s12 m4 l2">
                                    <input type="text" id="from" name="from">
                                    <label for="from">Дата прибытия</label>
                                </div>
                                <div class="input-field col s12 m4 l2">
                                    <input type="text" id="to" name="to">
                                    <label for="to">Дата отправления</label>
                                </div>
                                <div class="input-field col s12 m4 l2">
                                    <input type="submit" value="submit" class="form-btn"> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END CHECK AVAILABILITY FORM-->
    <div class="hom-com">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="hp-section">
                            <div class="hp-sub-tit">
                                <h4><span>{{ $room_type->name }}</span> Комната</h4>
                            </div>
                            <div class="hp-amini">
                                <p>{{ $room_type->description }}</p>
                            </div>
                        </div>
                        @if(count($room_type->facilities) > 0)
                        <div class="hp-section">
                            <div class="hp-sub-tit">
                                <h4><span>Средства</span></h4>
                                <p>Все перечисленные ниже удобства входят в стоимость проживания в номере.</p>
                            </div>
                            <div class="hp-amini">
                                <ul>
                                    @foreach($room_type->facilities as $facility)
                                    <li><img src="{{('/storage/facilities/'.$facility->icon)}}" alt="">{{ $facility->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                        <div class="hp-section">
                            <div class="hp-sub-tit">
                                <h4><span>Обзор</span></h4>
                                <p>Следуя основным особенностям помещения</p>
                            </div>
                            <div class="hp-over">
                                <ul class="nav nav-tabs hp-over-nav">
                                    <li class="active">
                                        <a data-toggle="tab" href="#home"><img src="{{ asset("front/images/icon/a8.png") }}" alt=""> <span class="tab-hide">Обзор</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#menu"><img src="{{ asset("front/images/icon/a10.png") }}" alt=""> <span class="tab-hide">Другие функции</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active tab-space">
                                        <div class="hp-main-overview">
                                            <ul>
                                                <li>Занятость: <span>Макс {{ $room_type->max_adult + $room_type->max_child }} люди</span>
                                                </li>
                                                <li>Размер : <span>{{ $room_type->size }} sq. feet</span>
                                                </li>
                                                <li>Обслуживание Комнат : <span>{{  $room_type->room_service==true ? "Available" : "Not Available" }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="menu" class="tab-pane fade tab-space">
                                        <p>Maecenas erat lorem, vulputate sed ex at, vehicula dignissim risus. Nullam non nisi congue elit cursus tempus. Nunc vel ante nec libero semper maximus. Donec cursus sed massa eget commodo. Phasellus semper neque id iaculis malesuada. Nulla efficitur dui vitae orci blandit tempor. Mauris sed venenatis nibh, sed sodales risus.</p>
                                        <p>Nam sit amet tortor in elit fermentum consectetur et sit amet eros. Sed varius velit at eros tempor sodales. Fusce at enim at lectus sollicitudin pharetra at in risus. Donec ut semper turpis. Maecenas lobortis ante ut eros scelerisque, at semper augue ullamcorper.</p>
                                        <p>Maecenas erat lorem, vulputate sed ex at, vehicula dignissim risus. Nullam non nisi congue elit cursus tempus. Nunc vel ante nec libero semper maximus. Donec cursus sed massa eget commodo. Phasellus semper neque id iaculis malesuada. Nulla efficitur dui vitae orci blandit tempor. Mauris sed venenatis nibh, sed sodales risus.</p>
                                        <p>Nam sit amet tortor in elit fermentum consectetur et sit amet eros. Sed varius velit at eros tempor sodales. Fusce at enim at lectus sollicitudin pharetra at in risus. Donec ut semper turpis. Maecenas lobortis ante ut eros scelerisque, at semper augue ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(count($room_type->images) > 0)
                        <div class="hp-section">
                            <div class="hp-sub-tit">
                                <h4><span>Фотогалерея</span></h4>
                                <p>Просмотрите фактическую комнату по следующим изображениям.</p>
                            </div>
                            <div class="">
                                <div class="h-gal">
                                    <ul>
                                        @foreach($room_type->images as $image)
                                        <li><img class="materialboxed" data-caption="{{ $image->caption }}" src="{{('/storage/room_types/'.$image->name)}}" alt="">
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="hp-section">
                            <div class="hp-sub-tit">
                                <h4><span>Рейтинги</span></h4>
                                <p>текст здесь</p>
                            </div>
                            <div class="hp-review">
                                <div class="hp-review-left">
                                    <div class="hp-review-left-1">
                                        <div class="hp-review-left-11">Отлично</div>
                                        <div class="hp-review-left-12">
                                            <div class="hp-review-left-13"></div>
                                        </div>
                                    </div>
                                    <div class="hp-review-left-1">
                                        <div class="hp-review-left-11">Хорошо</div>
                                        <div class="hp-review-left-12">
                                            <div class="hp-review-left-13 hp-review-left-Good"></div>
                                        </div>
                                    </div>
                                    <div class="hp-review-left-1">
                                        <div class="hp-review-left-11">Удовлетворительный</div>
                                        <div class="hp-review-left-12">
                                            <div class="hp-review-left-13 hp-review-left-satis"></div>
                                        </div>
                                    </div>
                                    <div class="hp-review-left-1">
                                        <div class="hp-review-left-11">Ниже среднего</div>
                                        <div class="hp-review-left-12">
                                            <div class="hp-review-left-13 hp-review-left-below"></div>
                                        </div>
                                    </div>
                                    <div class="hp-review-left-1">
                                        <div class="hp-review-left-11">Ниже среднего</div>
                                        <div class="hp-review-left-12">
                                            <div class="hp-review-left-13 hp-review-left-poor"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hp-review-right">
                                    <h5>Общие оценки</h5>
                                    <p><span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span> основано на 242 отзывах</p>
                                </div>
                            </div>
                        </div>
                        <div class="hp-section">
                            <div class="hp-sub-tit">
                                <h4><span>пользователь</span> обзоры</h4>
                                <p>Текст здесь</p>
                            </div>
                            <div class="lp-ur-all-rat">
                                <ul>
                                    <li>
                                        <div class="lr-user-wr-img"> <img src="images/users/2.png" alt=""> </div>
                                        <div class="lr-user-wr-con">
                                            <h6>Майкл <span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span></h6> <span class="lr-revi-date">19 января 2017 года</span>
                                            <p>Хорошее обслуживание... красивые и чистые номера... очень разнообразный шведский стол и дружелюбный персонал. Отель расположен в самом центре города, отсюда легко добраться до любых мест на небольшом расстоянии. </p>
                                            <ul>
                                                <li><a href="#!"><span>Нравится</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><span>Не нравится</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><span>Отчет</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><span>Комментарии</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><span>Поделись сейчас</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lr-user-wr-img"> <img src="images/users/3.png" alt=""> </div>
                                        <div class="lr-user-wr-con">
                                            <h6>Габриэль <span>5.0 <i class="fa fa-star" aria-hidden="true"></i></span></h6> <span class="lr-revi-date">21 июля 2016 года</span>
                                            <p>Отель чистый, удобный и с хорошим соотношением цены и качества. Персонал вежливый и услужливый. Однако для эффективной работы им требуется дополнительная подготовка.</p>
                                            <ul>
                                                <li><a href="#!"><span>Нравится</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><span>Не нравится</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><span>Отчет</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><span>Комментарии</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><span>Поделись сейчас</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul> <a class="waves-effect waves-light wr-re-btn" href="%21.html#" data-toggle="modal" data-target="#commend"><i class="fa fa-edit"></i> Написать отзыв</a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--=========================================-->
                    <div class="hp-call hp-right-com">
                        <div class="hp-call-in"> <img src="images/icon/dbc4.png" alt="">
                            <h3><span>Уточняйте наличие свободных мест. Звоните нам!</span> +70123456789</h3> <small>Мы доступны 24/7 с понедельника по воскресенье</small> <a href="#">Звони сейчас</a> </div>
                    </div>
                    <!--=========================================-->
                    <!--=========================================-->
                    <div class="hp-book hp-right-com">
                        <div class="hp-book-in">
                            <button class="like-button"><i class="fa fa-heart-o"></i> Добавьте этот список в закладки</button> <span>1000 человек отметили это место в закладках</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i> Делиться</a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i> Чирикать</a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> Делиться</a>
                                </li>
                                <!-- <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <!--=========================================-->
                    <!--=========================================-->
                    <div class="hp-card hp-right-com">
                        <div class="hp-card-in">
                            <h3>Мы принимаем</h3> <span>1000 человек отметили это место в закладках</span> <img src="images/card.png" alt=""> </div>
                    </div>
                    <!--=========================================-->
                </div>
            </div>
        </div>
    </div>
@endsection
