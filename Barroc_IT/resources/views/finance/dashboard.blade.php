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
                <th class="col s2">Clients</th>
                <th class="col s2">Company</th>
                <th class="col s2">Status</th>
                <th class="col s2">Date of Action</th>
                <th class="col s2">Creditworthy</th>
                <th class="col s2">Saldo</th>
            </tr>
            </thead>
        </table>
    @foreach($projects as $project)
            <ul class="collapsible">
                <li>
                    <!-- collapsible header, each with it's own data -->
                    <div class="collapsible-header">
                        <table>
                            <thead>
                            <tr>
                            @foreach($contacts as $contact)
                                    @if($contact->contact_id == $project->project_id)
                                        <th>{{$contact->contact_name}}</th>
                                    @endif
                                @endforeach

                                @foreach($companies as $company)
                                    @if($company->company_id == $project->project_id)
                                        <th>{{$company->company_name}}</th>
                                    @endif

                                @endforeach
                                @foreach($contacts as $contact)
                                    @if($contact->contact_id == $project->project_id)
                                <th>{{$contact->creditworthy}}</th>
                                    @endif
                                @endforeach

                                    @foreach($appointments as $appointment)
                                        @if($appointment->project_id == $project->project_id)
                                <th>{{$appointment->date_of_action}}</th>
                                        @endif
                                    @endforeach

                                @foreach($contacts as $contact)
                                    @if($project->contact_id == $contact->contact_id)
                                <th>
                                    @if($contact['creditworthy'] == 0)
                                        <form action="{{route('finance.done')}}" method="post">
                                            <input type="hidden" name="id" value="{{$contact->contact_id}}">
                                            @csrf
                                            <input type="submit" value="is creditworthy">
                                        </form>
                                    @elseif($contact['creditworthy'] == 1)
                                        <th>the contact is already creditworthy</th>
                                    
                                    @endif
                                </th>
                                    @endif
                                    @endforeach

                                    @foreach($invoices as $invoice)
                                        @if($invoice->project_id == $project->project_id)
                                <th>{{$invoice->factuur_saldo}}</th>
                                    @endif
                                    @endforeach
                                    @foreach($contacts as $contact)
                                        @if($project->contact_id == $contact->contact_id)
                                <th>{{$contact->update_time}}</th>
                                    @endif
                                    @endforeach
                                {{--<th>Reason of Alert</th>--}}
                            </tr>
                            </thead>
                        </table>
                    </div>

                    <!-- collapsible body, each with it's own data corresponding to its collapsible header -->
                    <div class="col s12 collapsible-body">
                        <section class="col s4 address-content">
                            <h5>Address</h5>
                            @foreach($contacts as $contact)
                                @if($contact->contact_id == $project->project_id)
                                    <p>Contact name: <b>{{$contact->contact_name}}</b></p>
                                    <p>Residence: <b>{{$contact->residence}}</b></p>
                                    <p>Zip: <b>{{$contact->zipcode}}</b></p>
                                @endif
                            @endforeach
                        </section>
                        <section class="col s4 contact-content">
                            <h5>contact</h5>
                            @foreach($contacts as $contact)
                                @if($contact->contact_id == $project->project_id)
                                    <p>Phone number: <b>{{$contact->telephone_number}}</b></p>
                                    <p>Fax number: <b>{{$contact->fax_number}}</b></p>
                                @endif
                            @endforeach
                        </section>
                        <section class="col s4 offer-content">
                            <h5>Residence</h5>
                            @foreach($contacts as $contact)
                                @if($contact->contact_id == $project->contact_id)
                                    <p>Residence: <b>{{$contact->residence}}</b></p>
                                    <p>Adress: <b>{{$contact->adress}}</b></p>

                                @endif
                            @endforeach
                            @foreach($invoices as $invoice)
                                @if($invoice->project_id == $project->project_id)
                            <form action="{{route('finance.invoice')}}" method="post">
                                <input type="hidden" name="id" value="{{$invoice->project_id}}">
                                @csrf
                                <input type="submit" value="view invoice">
                            </form>
                                @endif
                                @endforeach
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