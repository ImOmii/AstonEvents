<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aston Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

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
                <li ><a href="/">Home</a></li>
                <li><a href="/categories/culture">Culture</a></li>
                <li><a href="/categories/sports">Sports</a></li>
                <li><a href="/categories/other">Other</a></li>
                <li class="active"><a href="/events/likes">Most Liked</a></li>
                <li class="active"><a href="/events">All events</a></li>
                @auth
                <li><a href="/events/create">Create Event</a></li>
                @endauth
                {{--<li><a href="#">Events</a></li>--}}
                {{--<li><a href="#">Contact</a></li>--}}

            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}


                    {{--<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}
                @auth
                <p style="color: #0000F0">You are logged in</p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="Logout"/>
                </form>
                    @else
                        <li><a class="nav-link" href="{{ route('login') }}"><span class="">{{ __('Login') }}</span></a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endauth
                </ul>
        </div>
    </div>
</nav>


<div class="container text-center">
    <h3> Most Liked Events!</h3><br>
    <div class="row">
        <p>Have a look at our most liked events! Simply click on "Most Liked" to view what has been liked the most, and "All Events" to view every event that has been made.</p>


        @foreach ($events as $event)
            <div class="card col-sm" style="width:20%">
                <img class="card-img-top" src="/images/{{ $event->image }}" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">{{ $event->name }}</h4>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">View</a>
                </div>
            </div>
            <br>
        @endforeach

        {{--<div class="well">--}}
            {{--<p>Some text..</p>--}}
        {{--</div>--}}
    </div>

</div>
</div><br>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
