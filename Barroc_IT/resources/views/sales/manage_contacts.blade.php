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
<link rel="stylesheet" href="{{ URL::asset('/css/sales/sales-manage-clients.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<section class="row">

    <aside class="col s9 push-s3 content-field">

        <h3>Manage contacts</h3>

        <table class="responsive-table">
            <thead>
            <tr>
                <th>Contact</th>
                <th>Initials</th>
                <th>E-mail</th>
                <th>Phone number</th>
                <th>Fax number</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>$contact</td>
                <td>$initials</td>
                <td>$email</td>
                <td>$phone</td>
                <td>$fax</td>
                <td>
                    <a class="modal-trigger" href="#modal-edit-contact"><i class="material-icons">edit</i></a>

                    <a><i class="material-icons">delete</i></a>
                </td>
            </tr>
            </tbody>
        </table>


        <ul class="pagination">
            <li class="waves-effect"><a href="#"><i class="material-icons">chevron_left</i></a></li>

            <li class="waves-effect"><a href="#"><i class="material-icons">chevron_right</i></a></li>
        </ul>


        <!-- Modal Edit Contact Structure -->
        <div id="modal-edit-contact" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Edit contact</h4>
                <p>
                <form class="row" action="#">
                    <div class="input-field col s6">
                        <input id="contactName" type="text" class="validate">
                        <label for="contactName">Contact person</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="contactInitials" type="text" class="validate">
                        <label for="contactInitials">Contact initials</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">E-mail</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="phoneNumber" type="tel" class="validate">
                        <label for="phoneNumber">Telephone number</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="faxNumber" type="tel" class="validate">
                        <label for="faxNumber">Fax number</label>
                    </div>
                </form>
                </p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Submit</a>
            </div>
        </div>

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