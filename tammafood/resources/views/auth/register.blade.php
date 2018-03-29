@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset ('assets/login-css/style.css') }}">
<!-- <link rel="stylesheet" type="text/css" href="{{ asset ('../assets/login-css/form-elements.css') }}"> -->
<body style="background:url('assets/img/intro-bg.jpg') center center fixed;">
<!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>TammaFood</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Register</h3>
                                    <p><!-- Enter your username and password to log on: -->
                                        Isi data dibawah ini:
                                    </p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                               <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                    {{ csrf_field() }}
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        
                                            <label class="sr-only" for="form-username">Name</label>
                                            <input placeholder="Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                        
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input id="username" placeholder="Username" type="username" class="form-control" name="username" value="{{ old('username') }}">
                                        
                                            @if ($errors->has('username'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        
                                            <label class="sr-only" for="form-username">E-mail</label>
                                             <input placeholder="E-mail" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        
                                            <label class="sr-only" for="form-password">Password</label>
                                             <input placeholder="Password" id="password" type="password" class="form-control" name="password">
                                        
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        
                                            <label class="sr-only" for="form-password">Confirm Password</label>
                                             <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                    
                                    <button type="submit" class="btn btn-danger" style="margin-top: 10px;">Register</button>
                                    
                                    <a class="btn btn-block btn-warning" style="margin-top: 15px;"  href="{{ url('/login') }}">Login</a>
                                    

                                </form>
                            </div>
                        </div>
                    </div>
                    
                    

                </div>
            </div>
            
        </div>
</body>        
@endsection
