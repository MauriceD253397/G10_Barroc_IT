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
<link rel="stylesheet" href="{{ URL::asset('/css/sales/sales-dashboard.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<section class="row">

    <aside class="col s9 push-s3 content-field">

        <h3>All clients</h3>
        <table>
            <thead>
            <tr>
                <th>Contact</th>
                <th>Company</th>
                <th>Status</th>
                <th>Date of Action</th>
                <th>Reason of Alert</th>
            </tr>
            </thead>
        </table>


        <ul class="collapsible">
            <li>
                <div class="collapsible-header">

                    <table>
                        <tbody>
                        <tr>
                            <td>$contact</td>
                            <td>$company</td>
                            <td>$status</td>
                            <td>$date_of_action</td>
                            <td>$reason_of_alert</td>
                        </tr>
                        </tbody>
                    </table>

                </div>

                <div class="col s12 collapsible-body">

                    <section class="col s4 address-content">

                        <h5>Address</h5>
                        <p><b>$company</b></p>
                        <p>Residence: <b>Stijnenberg 15</b></p>
                        <p>Zip: <b>4811 VD</b></p>

                        <h5>Second address</h5>
                        <p><b>$company</b></p>
                        <p>Residence: <b>Stijnenberg 15</b></p>
                        <p>Zip: <b>4811 VD</b></p>


                    </section>


                    <section class="col s4 contact-content">


                        <h5>contact</h5>
                        <p>Phone number: <b>06-78476313</b></p>
                        <p>Fax number: <b>+44 161 999 8888</b></p>
                        <p>Last contact date: <b>10-10-1990</b></p>

                    </section>


                    <section class="col s4 offer-content">

                        <h5>Issue</h5>
                        <p>Offer number: <b>0676313</b></p>
                        <p>Offer status: <b>Failure to pay moneys</b></p>

                    </section>

                </div>
            </li>
        </ul>



        <ul class="pagination">
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_left</i></a></li>

            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>

    </aside>


    <aside class="col s3 pull-s9 menu-field">

        <h3 class="center-align">BARROC IT</h3>
        <h5 class="center-align">SOFTWARE FOR REAL</h5>

        <ul>
            <li><b>All clients</b></li>
            <li>Add new client</li>
            <li>Add new contact</li>
            <li>Help</li>
            <li>Logout</li>
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