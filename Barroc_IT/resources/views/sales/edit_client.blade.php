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
<link rel="stylesheet" href="{{ URL::asset('/css/include.css') }}">


<section class="row">

    <!-- content field, brown part of the screen -->
    <aside class="col s9 push-s3 content-field">

        <h3>Add new client</h3>

        <section class="col s6 company-form">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="companyName" type="text" class="validate">
                            <label for="companyName">Company name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="address" type="text" class="validate">
                            <label for="address">Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="zipcode" type="text" class="validate">
                            <label for="zipcode">Zipcode</label>
                        </div>
                    </div>

                    <label>
                        <input type="checkbox" class="filled-in"/>
                        <span>Add a second address</span>
                    </label>


                    <section class="secondAddress">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="companyName" type="text" class="validate">
                                <label for="companyName">Company name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="address" type="text" class="validate">
                                <label for="address">Address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="zipcode" type="text" class="validate">
                                <label for="zipcode">Zipcode</label>
                            </div>
                        </div>
                    </section>


                </form>
            </div>

        </section>

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


    <aside class="col s3 pull-s9 menu-field">

        <h3 class="center-align">BARROC IT</h3>
        <h5 class="center-align">SOFTWARE FOR REAL</h5>

        <ul>
            <li><a href="{{route('dashboard')}}"><b>All clients</b></a></li>
            <li><a href="{{route('add_client')}}">Add new client</a></li>
            <li><a href="{{route('add_contact')}}">Add new contact</a></li>
            <li><a href="{{route('help')}}">Help</a></li>
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