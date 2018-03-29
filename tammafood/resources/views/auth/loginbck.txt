<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DBoard | Login </title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/dboard/logo/faveicon.png') }}"/>
    <link href="{{ asset('assets/vendors/toastr/toastr.min.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/inspiniaStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/inspiniaAnimate.css') }}" rel="stylesheet">

    <link href="{{asset('assets/vendors/ladda/ladda-themeless.min.css')}}" rel="stylesheet">

</head>

<body class="gray-bg" style="background-image: url('{{ asset('assets/img/dboard/background/login.png') }}')">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            
            <div class="col-md-12">
                <div class="ibox-content" style="margin-top: 0px; padding: 25px;">
                    <div class="row text-center">
                        
                    </div>
                    <div class="row">
                        <form class="m-t" role="form" id="login-form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="Username" required name="username" id="username" value="shitta">
                                <span style="padding-left: 5px;color:#ed5565;visibility: hidden;" class="help-block m-b-none" id="username-error"><small>Inputan username ini wajib diisi !</small></span>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" required name="password" id="password" value="123456">
                                <span style="padding-left: 5px;color:#ed5565;visibility: hidden;" class="help-block m-b-none" id="password-error"><small>Inputan password ini wajib diisi !</small></span>
                            </div>

                            <button type="button" class="ladda-button ladda-button-demo btn btn-primary block full-width m-b" data-style="zoom-in">Masuk</button>

                            {{-- <a href="#">
                                <small>Forgot password?</small>
                            </a> --}}

                            {{-- <p class="text-muted text-center">
                                <small>Do not have an account?</small>
                            </p>
                            <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> --}}
                        </form>
                        <p class="m-t text-center error-load" style="color:#ed5565; visibility: hidden;">
                            <small>..</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright DBoard
            </div>
            <div class="col-md-6 text-right">
               <small>© 2017</small> {{ Session::get('comp_year')}}
            </div>
        </div>
    </div>


    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-1.12.3.min.js') }}"></script>

    <!-- Ladda -->
    <script src="{{ asset('assets/vendors/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/ladda/ladda.jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/toastr/toastr.min.js') }}"></script>


    <script type="text/javascript">
        var buttonLadda = $('.ladda-button-demo').ladda();
        var baseUrl = '{{ url('/') }}';
        $('.ladda-button').click(function(){
            if(validateForm()){
                buttonLadda.ladda('start');
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

toastr.options.onShown = function() { window.location = baseUrl+'/dashboard';
}
				toastr.success(response.nama);


                             //window.location = baseUrl+'/dashboard';
                            ///alert('1');
                           /* if(response.content == 'authenticate'){
                               // alert('1');
                                window.location = baseUrl+'/dashboard';
                            }else if(response.content == 'gate 2'){
                                //alert('2');
                                window.location = baseUrl+'/login/comp-gate';
                            }*/
                        }
                        else if(response.status == 'gagal'){
                            $('.error-load').css('visibility', 'visible');
                            $('.error-load small').text(response.content);
                            buttonLadda.ladda('stop');
                        }
                    },
                    error       : function(xhr, status){
                        if(status == 'timeout'){
                            $('.error-load').css('visibility', 'visible');
                            $('.error-load small').text('Ups. Terjadi Kesalahan, Coba Lagi Nanti');
                        }
                        else if(xhr.status == 0){
                            $('.error-load').css('visibility', 'visible');
                            $('.error-load small').text('Ups. Koneksi Internet Bemasalah, Coba Lagi Nanti');
                        }
                        else if(xhr.status == 500){
                            $('.error-load').css('visibility', 'visible');
                            $('.error-load small').text('Ups. Server Bemasalah, Coba Lagi Nanti');
                        }

                        buttonLadda.ladda('stop');
                    }
                });

            }
        });

        function validateForm(){
            var username = document.getElementById('username');
            var password = document.getElementById('password');

            //alert(username.value);

            if(username.validity.valueMissing){
                $('#username-error').css('visibility', 'visible');
                return false;
            }
            else if(password.validity.valueMissing){
                $('#password-error').css('visibility', 'visible');
                return false;
            }

            return true;
        }

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-full-width",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "30000",
  "hideDuration": "100000",
  "timeOut": "50000",
  "extendedTimeOut": "10000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
    </script>

</body>

</html>
