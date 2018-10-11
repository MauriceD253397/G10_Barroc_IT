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
<link rel="stylesheet" href="{{ URL::asset('/css/sales/sales-dashboard.css') }}">



<section class="row">


    <!-- content field, brown part of the screen -->
    <aside class="col s9 push-s3 content-field">
        <h3>All clients</h3>

        <!-- titles of fields, above of main content -->
        <table>
            <thead>
                <tr>
                    <th class="col s2">Contact</th>
                    <th class="col s3">Company</th>
                    <th class="col s2">Status</th>
                    <th class="col s2">Date of Action</th>
                    <th class="col s2">Reason of alert</th>
                </tr>
            </thead>
        </table>
            @foreach($companyData as $data)
        <ul class="collapsible">
            <li>
                <!-- collapsible header, each with it's own data -->
                <div class="collapsible-header">

                    <table>
                        <thead>
                        <tr>
                            <th>{{$data['contactname']}}</th>
                            <th>{{$data['companyname']}}</th>
                            <th>@if($data['creditworthy' == 1])
                                    Creditworthy
                                @else
                                    Not creditworthy
                                @endif
                            </th>
                            <th>{{$data['updated_at']}}</th>
                            <th>Reason of Alert</th>
                        </tr>
                        </thead>
                    </table>
                </div>

                <!-- collapsible body, each with it's own data corresponding to its collapsible header -->
                <div class="col s12 collapsible-body">
                    <section class="col s4 address-content">
                        <h5>Address</h5>
                        <p><b>$company</b></p>
                        <p>Residence: <b>Stijnenberg 15</b></p>
                        <p>Zip: <b>4811 VD</b></p>

                        <h5>Second address</h5>
                        <p>Residence: <b>Voor de korte omme 20</b></p>
                        <p>Zip: <b>4124 AC</b></p>


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
        @endforeach
        <ul class="pagination">
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>

    </aside>


    <!-- the menu field with navigation -->
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

<!-- including jquery and materialize frameworks -->
<script type="text/javascript"
        src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js') }}"></script>
<!-- including custom js file -->
<script type="text/javascript" src="{{ URL::asset('/js/include.js') }}"></script>

</body>
</html>