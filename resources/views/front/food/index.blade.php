@extends('layouts.front')

@section('content')
    <!--TOP BANNER-->
    <div class="inn-banner">
        <div class="container">
            <div class="row">
                <h4>Наше меню</h4>
                <p>Ознакомьтесь со всеми блюдами континентальной кухни, предлагаемыми в нашем отеле шеф-поварами.
                <p>
            </div>
        </div>
    </div>
    @if(count($foods) > 0)
    <!--TOP SECTION-->
    <div class="inn-body-section pad-bot-65">
        <div class="container">
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>Закуски</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                </div>
                <!--SERVICES SECTION-->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($foods as $food)
                            @continue($food->type !== "Закуска")
                        <div class="res-menu"> <img src="{{ ('storage/foods/'.$food->image) }}" alt="" />
                            <h3>{{ $food->name }} <span>₽{{ $food->price }}</span></h3> <span class="menu-item">{{ $food->description }}</span>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>Суп</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p></p>
                </div>
                <!--SERVICES SECTION-->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($foods as $food)
                            @continue($food->type !== "Суп")
                        <div class="res-menu"> <img src="{{ ('storage/foods/'.$food->image) }}" alt="" />
                            <h3>{{ $food->name }} <span>₽{{ $food->price }}</span></h3> <span class="menu-item">{{ $food->description }}</span>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>Салат</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p></p>
                </div>
                <!--SERVICES SECTION-->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($foods as $food)
                            @continue($food->type !== "Салат")
                        <div class="res-menu"> <img src="{{ ('storage/foods/'.$food->image) }}" alt="" />
                            <h3>{{ $food->name }} <span>₽{{ $food->price }}</span></h3> <span class="menu-item">{{ $food->description }}</span>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>основное блюдо</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p></p>
                </div>
                <!--SERVICES SECTION-->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($foods as $food)
                            @continue($food->type !== "основное блюдо")
                        <div class="res-menu"> <img src="{{ ('storage/foods/'.$food->image) }}" alt="" />
                            <h3>{{ $food->name }} <span>₽{{ $food->price }}</span></h3> <span class="menu-item">{{ $food->description }}</span>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="row inn-page-com">
                <div class="page-head">
                    <h2>Десерт</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p></p>
                </div>
                <!--SERVICES SECTION-->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($foods as $food)
                            @continue($food->type !== "Десерт")
                        <div class="res-menu"> <img src="{{ ('storage/foods/'.$food->image) }}" alt="" />
                            <h3>{{ $food->name }} <span>₽{{ $food->price }}</span></h3> <span class="menu-item">{{ $food->description }}</span>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--TOP SECTION-->
    @else
        Нет доступных продуктов
    @endif
@endsection
