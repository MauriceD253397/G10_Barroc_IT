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
        <h3>All Projects</h3>

        <!-- titles of fields, above of main content -->
        <table>
            <thead>
                <tr>
                    <th class="col s2">title</th>
                    <th class="col s2">contact</th>
                    <th class="col s2">Status</th>
                    <th class="col s2">start date</th>
                    <th class="col s2">death line</th>
                    <th class="col s2">press when done</th>
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
                            <th>{{$project->title}}</th>
                            @foreach($contacts as $contact)
                                @if($project['contact_id'] == $contact['contact_id'])
                                <th>{{$contact->contact_name}} {{$contact->last_name}}</th>
                                @endif
                            @endforeach
                            <th>@if($project['project_status'] == 1)
                                    on hold
                                @elseif($project['project_status'] == 0)
                                    project is go
                                @elseif($project['project_status'] == 2)
                                    project is done
                                @endif
                            </th>
                            <th>{{$project['start_time']}}</th>
                            <th>{{$project['death_line']}}</th>
                            <th>
                                @if($project['project_status'] == 0)
                            <form action="{{route('development.done')}}" method="post">
                                <input type="hidden" name="id" value="{{$project->project_id}}">
                                @csrf
                                <input type="submit" value="it is done">
                            </form>
                                @elseif($project['project_status'] == 1)

                                @elseif($project['project_status'] == 2)

                                @endif
                            </th>


                        </tr>
                        </thead>
                    </table>
                </div>

                <!-- collapsible body, each with it's own data corresponding to its collapsible header -->
                <div class="col s12 collapsible-body">
                    @foreach($contacts as $contact)
                        @if($project['contact_id'] == $contact['contact_id'])
                             <section class="col s4 contact-content">
                                <h5>contact</h5>
                                <p>Phone number: <b>{{$contact->telephone_number}}</b></p>
                                <p>Fax number: <b>{{$contact->fax_number}}</b></p>
                                <p>email: <b>{{$contact->email}}</b></p>
                            </section>
                        @endif
                    @endforeach
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
            <li><a href="{{route('development')}}"><b>All Projects</b></a></li>
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