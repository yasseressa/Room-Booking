@extends('layouts.front')

@section('content')
    <div class="inn-body-section pad-bot-55">
        <div class="container">
            <div class="row">
                <div class="page-head">
                    <h2>Все мероприятия в отеле</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Ниже перечислены мероприятия, проводимые в нашем отеле.</p>
                </div>
                <!--TYPOGRAPHY SECTION-->
                @if(count($events) > 0)
                    <div class="col-md-12">
                        <div class="head-typo typo-com">
                            <h2>Предстоящие события</h2>
                            <p>Все будущие мероприятия будут проходить в нашем отеле</p>
                            @foreach($events as $event)
                            {!! Form::open(array('url' => 'event/'.$event->id.'/book', 'class' => 'col s12')) !!}
                            {{ Form::hidden('_method', 'POST') }}
                            @csrf
                            @continue($event->date < today()->format('Y-m-d'))
                            <!--EVENT-->

                            <div class="row events">

                                @if ($errors->has('number_of_tickets'))
                                    <div class="col-md-12 alert alert-danger">
                                        <strong>Прости!</strong> {{ $errors->first('number_of_tickets') }}
                                    </div>
                                @endif
                                <div class="col-md-2"> <img src="{{ ('storage/events/'. $event->image) }}" alt="" /> </div>
                                <div class="col-md-8">
                                    <h3>{{ $event->name }}</h3> <span><strong>Дата: </strong> {{ \Carbon\Carbon::parse($event->date)->toFormattedDateString() }}</span>
                                    <p><strong>Цена: </strong>Rs. {{ $event->price }}</p>
                                    <p>{{ $event->description }}</p>
                                </div>
                                <div class="col-md-2"> <span style="font-weight: bold">Количество билетов</span> </div>
                                <div class="input-field col-md-2">
                                   <input style="margin-bottom: 10px; height: 40px;" type="text" name="number_of_tickets">
                                </div>
                                <div class="col-md-2"> <input id="register-button" type="submit" value="Register" class="waves-effect waves-light event-regi"> </div>

                            </div>
                            <!--END EVENT-->
                            {!! Form::close() !!}
                             @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="head-typo typo-com">
                            <h2>Прошлые события</h2>
                            <p>Все прошлые мероприятия, проходившие в нашем отеле</p>
                            @foreach($events as $event)
                            @continue($event->date > today()->format('Y-m-d') || $event->date == today()->format('Y-m-d'))
                            <!--EVENT-->
                                <div class="row events">
                                    <div class="col-md-2"> <img src="{{ ('storage/events/'. $event->image) }}" alt="" /> </div>
                                    <div class="col-md-8">
                                        <h3>{{ $event->name }}</h3> <span><strong>Дата: </strong> {{ \Carbon\Carbon::parse($event->date)->toFormattedDateString() }}</span>
                                        <p><strong>Цена: </strong>Rs. {{ $event->price }}</p>
                                        <p>{{ $event->description }}</p>
                                    </div>
                                </div>
                                <!--END EVENT-->
                            @endforeach
                        </div>
                    </div>
                @else

                    <h3>В настоящее время в нашем отеле не проводится никаких мероприятий.</h3>
                @endif
                <!--END TYPOGRAPHY SECTION-->
            </div>
        </div>
    </div>
@endsection
