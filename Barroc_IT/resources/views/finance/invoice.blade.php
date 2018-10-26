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
                <th class="col s2">Factuurnummer</th>
                <th class="col s2">Description</th>
                <th class="col s2">Date</th>
                <th class="col s2">Status</th>
                <th class="col s2">Amount</th>
            </tr>
            </thead>
        </table>
        @foreach($invoices as $invoice)
            @if($invoice->project_id == $request->id)
            <ul class="collapsible">
                <li>
                    <!-- collapsible header, each with it's own data -->
                    <div class="collapsible-header">
                        <table>
                            <thead>
                            <tr>
                                        <th>{{$invoice->invoice_id}}</th>

                                        @foreach($projects as$project)
                                            @if($invoice->project_id == $project->project_id)
                                        <th>{{$project->title}}</th>
                                            @endif
                                        @endforeach

                                        <th>{{$invoice->created_at}}</th>

                                        @if($invoice->factuur_status == 0)
                                            <th>Invoice not payed</th>
                                        @elseif($invoice->factuur_status == 1)
                                            <th>Invoice is payed</th>
                                        @endif

                                        <th>{{$invoice->factuur_saldo}}</th>

                            </tr>
                            </thead>
                        </table>
                    </div>
                </li>
            </ul>
            @endif
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