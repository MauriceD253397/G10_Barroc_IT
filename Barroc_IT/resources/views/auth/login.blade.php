    @extends('layouts.app')

    @section('content')

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/vw_login.css') }}">


        <section class="row">
            <aside class="col s8 push-s4 blue">

                <form method="POST" action="{{ route('login') }}">
                    @if(session()->has('login_error'))
                        <div class="alert alert-success">
                            {{ session()->get('login_error') }}
                        </div>
                    @endif

                        <div class="input-field col s6">
                            

                            <label for="identity" class="col-md-4 control-label">First Name</label>

                            <input id="identity" type="text" class="validate" name="identity">

                            <!-- IDENTITY kan hieronder ook op type vatten ipv ID -->
                            @if ($errors->has('identity'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('identity') }}</strong>
                                        </span>
                            @endif


                        </div>


                    <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }}">
                        <label for="identity" class="col-md-4 control-label">Username</label>

                        <div class="col-md-6">
                            <input id="identity" type="identity" class="form-control" name="identity"
                                   value="{{ old('identity') }}" autofocus>

                            @if ($errors->has('identity'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('identity') }}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                    </div>
                </form>

            </aside>




            <aside class="col s4 pull-s8">

                <h3>TEST TEXT</h3>

            </aside>

        </section>



        <script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('/js/include.js') }}"></script>

    @endsection