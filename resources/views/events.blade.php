<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aston Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        collapse navbar-collapse{
            color: #1e7e34;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        .carousel-inner img {
            width: 100%; /* Set width to 100% */
            margin: auto;
            min-height:200px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption  {
                color: #f4003b;
            }

            .carousel-inner img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 500px;
                max-width: none;
            }
            .card {
                /* Add shadows to create the "card" effect */
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
            }

            /* On mouse-over, add a deeper shadow */
            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            /* Add some padding inside the card container */
            .container {
                padding: 2px 16px;
            }
        }

    </style>
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


<div class="container text-center">
    <h3> Events for Students</h3><br>
    <div class="row">
        <p>Do you want to view stuff?</p>

        @foreach ($events as $event)
            <div class="card" style="width:100px">
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
