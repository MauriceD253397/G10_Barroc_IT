    @extends('layouts.app')

    @section('content')

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/vw_login.css') }}">


        <section class="row">
            <aside class="col s8 push-s4 content-field">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button class="btn waves-effect waves-light grey" type="submit" name="action">Submit
                            </button>
                        </div>
                    </div>
                </form>

            </aside>




            <aside class="col s4 pull-s8 menu-field">

                <h3 class="center-align">BARROC IT</h3>
                <h5 class="center-align">SOFTWARE FOR REAL</h5>

            </aside>

        </section>



        <script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('/js/include.js') }}"></script>

    @endsection