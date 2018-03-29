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
                                    <h3>Login</h3>
                                    <p><!-- Enter your username and password to log on: -->
                                        Masukkan username dan password untuk login:
                                    </p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                               <form class="form-horizontal" role="form" id="login-form">
                                    {{ csrf_field() }}
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input name="username" id="username" placeholder="Username" type="text" class="form-control" value="{{ old('username') }}">
                                        
                                          <span style="padding-left: 12px;color:#fff;" class="help-block m-b-none hidden" id="username-error"><small>Inputan username ini wajib diisi !</small></span>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group ">
                                        
                                            <label class="sr-only" for="form-password">Password</label>
                                             <input placeholder="Password" type="password" class="form-control" name="password" id="password">
                                        
                                           <span style="padding-left: 12px;color:#fff;" class="help-block m-b-none hidden" id="password-error"><small>Inputan password ini wajib diisi !</small></span>
                                    </div>
                                </div>
                            

                                    
                 
                                     <button  type="button" onclick="login()" class="btn btn-danger">Sign in!</button> 
                                    

                                </form>
                                


 <p class="m-t text-center error-load hidden" style="color:#fff;">
        <small>..</small>
    </p>
                            </div>




                        </div>
                    </div>
                    
                    

                </div>
            </div>
            
        </div>


   <script type="text/javascript">
   function login(){
          
            if(validateForm()){
                 
                $.ajax({
                    url         : baseUrl+'/login',
                    type        : 'get',
                    timeout     : 10000,
                    data        : $('#login-form').serialize(),
                    dataType    : 'JSON',
                    success     : function(response){
                        
                        //alert(response.content);
                        //console.log(response);
                          if(response.status == 'sukses'){


                            window.location = baseUrl+'/home';

                        }
                        else if(response.status == 'gagal'){
                            $('.error-load').removeClass('hidden');
                            $('.error-load small').text(response.data);
                            
                            
                        }
                    },
                    error       : function(xhr, status){
                        if(status == 'timeout'){
                            $('.error-load').removeClass('hidden');
                            $('.error-load small').text('Ups. Terjadi Kesalahan, Coba Lagi Nanti');
                        }
                        else if(xhr.status == 0){
                            $('.error-load').removeClass('hidden');
                            $('.error-load small').text('Ups. Koneksi Internet Bemasalah, Coba Lagi Nanti');
                        }
                        else if(xhr.status == 500){
                           $('.error-load').removeClass('hidden');
                            $('.error-load small').text('Ups. Server Bemasalah, Coba Lagi Nanti');
                        }

                       
                    }
                });

            }
    }

    
        var baseUrl = '{{ url('/') }}';
        
     

        function validateForm(){
            
            var username = document.getElementById('username');
            var password = document.getElementById('password');

            //alert(username.value);

            if(username.validity.valueMissing){
                $('#username-error').removeClass('hidden');
                return false;
            }
            else if(password.validity.valueMissing){
                $('#password-error').removeClass('hidden');
                return false;
            }

            return true;
        }


    </script>






</body>        

@endsection
@section('extra_scripts')

@endsection
