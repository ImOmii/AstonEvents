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
            <a class="navbar-brand" href="#">Aston Events</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Contact</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}

                <li><a class="nav-link" href="{{ route('login') }}"><span class="">{{ __('Login') }}</span></a></li><
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/astonlib.jpg" alt="Image">
        </div>

        <div class="item">
            <img src="images/astonlib.jpg" alt="Image">
        </div>

        <div class="item">
            <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
    <h3>What We Do</h3><br>
    <div class="row">

        <form action="something.php" method="POST">
            <input name="blab"/>
        </form>
        <!--<div class="col-sm-4">-->
        <!--<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
        <!--<p>Current Project</p>-->
        <!--</div>-->
        <!--<div class="col-sm-4">-->
        <!--<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
        <!--<p>Project 2</p>-->
    </div>
    <div class="col-lg-6">
        <div class="well">
            <p>Lorem ipsum dolor sit amet, et eius partiendo nec, pro dico dicunt bonorum ea. Dolor incorrupte usu eu, an vim dicam tollit senserit. Probatus neglegentur consectetuer ut vim, ei quodsi saperet mei. At nam semper appetere consectetuer, phaedrum pericula ei eam. Eruditi nominati reprimique id nam, per case nemore maiestatis ne. In vocent nonumes pri.
            </p>
        </div>
        <div class="well">
            <p>Some text..</p>
        </div>
    </div>
</div>
</div><br>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>