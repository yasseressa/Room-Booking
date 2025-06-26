@section('footer')
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="{{url('/')}}">
                        МГТУ общежитии
                    </a>
                </li>
                <li>
                    <a href="{{url('/')}}">
                        Facebook
                    </a>
                </li>
                <li>
                    <a href="{{url('/')}}">
                        Twitter
                    </a>
                </li>
                <li>
                    <a href="{{url('/')}}">
                        Instagram
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script>, сделано с <i class="fa fa-heart heart"></i>МГТУ
        </div>
    </div>
</footer>
    @show