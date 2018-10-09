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
<!-- including the CSS part of the materialize framework -->
<link rel="stylesheet"
      href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- including custom CSS files -->
<link rel="stylesheet" href="{{ URL::asset('/css/sales/include.css') }}">


<section class="row">

    <!-- content field, brown part of the screen -->
    <aside class="col s9 push-s3 content-field">

        <h3>Add new contact</h3>

        <!-- form used to add a contact to an existing company -->
        <section class="col s6 company-form">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <!-- input search field, need to find and select a company before being able to push a contact -->
                        <div class="input-field col s12">
                            <i class="material-icons prefix">textsms</i>
                            <input type="text" id="autocomplete-company" class="autocomplete">
                            <label for="autocomplete-company">Select a client..</label>
                        </div>
                    </div>
                </form>
            </div>

        </section>

        <!-- the form for the contact information -->
        <section class="col s6 contact-form">

            <form class="row" action="#">
                <div class="input-field col s12">
                    <input id="contactName" type="text" class="validate">
                    <label for="contactName">Contact person</label>
                </div>
                <div class="input-field col s12">
                    <input id="contactInitials" type="text" class="validate">
                    <label for="contactInitials">Contact initials</label>
                </div>

                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">E-mail</label>
                </div>

                <div class="input-field col s12">
                    <input id="phoneNumber" type="tel" class="validate">
                    <label for="phoneNumber">Telephone number</label>
                </div>

                <div class="input-field col s12">
                    <input id="faxNumber" type="tel" class="validate">
                    <label for="faxNumber">Fax number</label>
                </div>
                <button class="btn waves-effect waves-light grey darken-1" type="submit" name="action">
                    Submit
                </button>
            </form>


        </section>


    </aside>

    <!-- the menu field with navigation -->
    <aside class="col s3 pull-s9 menu-field">

        <h3 class="center-align">BARROC IT</h3>
        <h5 class="center-align">SOFTWARE FOR REAL</h5>

        <ul>
            <li><a href="{{route('dashboard')}}">All clients</a></li>
            <li><a href="{{route('add_client')}}">Add new client</a></li>
            <li><a href="{{route('add_contact')}}"><b>Add new contact</b></a></li>
            <li><a href="{{route('help')}}">Help</a></li>
            <li><a>Logout</a></li>
        </ul>

    </aside>

</section>


<!-- including jquery and materialize frameworks -->
<script type="text/javascript"
        src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js') }}"></script>
<!-- including custom js file -->
<script type="text/javascript" src="{{ URL::asset('/js/include.js') }}"></script>

</body>
</html>