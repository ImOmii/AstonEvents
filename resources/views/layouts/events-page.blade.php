<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Aston Events</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/categories/culture">Culture</a></li>
                <li><a href="/categories/sports">Sports</a></li>
                <li><a href="/categories/other">Other</a></li>
                <li><a href="/events/likes">Most Liked</a></li>
                <li><a href="/events">All events</a></li>
                @auth
                <li><a href="/events/create">Create Event</a></li>
                @endauth
                {{--<li><a href="#">Events</a></li>--}}
                {{--<li><a href="#">Contact</a></li>--}}

            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}

                <li><a class="nav-link" href="{{ route('login') }}"><span class="">{{ __('Login') }}</span></a></li><
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            </ul>
        </div>
    </div>
</nav>
