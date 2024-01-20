<header class="top-header th-bg" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <div class="list-inline">
                    <a href="tel:+250-781-162-205"><i class="fa fa-phone"></i>+250 781 162 205</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>terrahomes@gmail.com</a>
                    <a href="#" class="mr-0 d-none-992"><i class="fa fa-clock-o"></i>Mon - Sun: 8:00am - 6:00pm</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5">
                <ul class="top-social-media pull-right">
                @if(Auth::check())
                    <li>
                        <a href="/profile" class="sign-in"><i class="fa fa-user"></i> Profile </a>
                    </li>
                    <li>
                        <a href="/logout" class="sign-in"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                @else
                    <li>
                        <a href="/login" class="sign-in"><i class="fa fa-sign-in"></i> Login </a>
                    </li>
                    <li>
                        <a href="/register" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                @endif
                </ul>
            </div>
        </div>
    </div>
</header>