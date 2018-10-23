<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- Styles -->
<link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
<link rel="stylesheet"
      href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/css/include.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<section class="row">

    <aside class="col s9 push-s3 content-field">

        <h2>Help</h2>

        <h4>All clients</h4>
        <p class="flex-text">An overview of all clients. One page includes 5 clients and initially
            displays the information most useful to sales. Upon expanding a client's row,
            more information about the client will become visible.</p>

        <h4>Add new client</h4>
        <p class="flex-text">Functionality to add a new client to the database.</p>

        <h4>Add new contact</h4>
        <p class="flex-text">Functionality to add a new contact to an already existing company.</p>

    </aside>


    <aside class="col s3 pull-s9 menu-field">

        <h3 class="center-align">BARROC IT</h3>
        <h5 class="center-align">SOFTWARE FOR REAL</h5>

        <ul>
            <li><a href="{{route('dashboard')}}">All clients</a></li>
            <li><a href="{{route('add_client')}}">Add new client</a></li>
            <li><a href="{{route('add_contact')}}">Add new contact</a></li>
            <li><a href="{{route('help')}}"><b>Help</b></a></li>
            <li><a>Logout</a></li>
        </ul>

    </aside>

</section>


<script type="text/javascript"
        src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/js/include.js') }}"></script>

</body>
</html>