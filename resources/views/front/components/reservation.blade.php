@section('reservation')
<!--TOP SECTION-->
<div class="hom-footer-section" style="background-color: mediumseagreen;">
    <div class="container">
        <div class="row">
            <div class="foot-com foot-1">
                <ul>
                    <li><a href="{{ config('app.facebook') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="{{ config('app.google') }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="{{ config('app.twitter') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="{{ config('app.instagram') }}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <div class="foot-com foot-2">
                <h5>Телефон: {{ config('app.phone_number', '+70123456789') }}</h5> </div>
            <div class="foot-com foot-3"><a class="waves-effect waves-light" href="{{'/room_type'}}">зарезервировать комнату</a> </div>
        </div>
    </div>
</div>
    @show