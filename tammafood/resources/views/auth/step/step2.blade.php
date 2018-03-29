<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DBoard | Tambah Perusahaan </title>
    
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/dboard/logo/faveicon.png') }}"/>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/inspiniaStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/inspiniaAnimate.css') }}" rel="stylesheet">

    <link href="{{asset('assets/vendors/ladda/ladda-themeless.min.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">
   <div class="loginColumns animated fadeInDown" style="margin-top: -50px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="col-md-12 text-center" style="color: #555; margin-bottom: 20px; font-size: 12px;">
                    <div>
                        <span style="padding: 10px; border-radius: 5px; background: #23c6c8; color: #fff">2</span>
                    </div>
                    <br/>
                    Menambahkan Perusahaan
                </div>
                <div class="ibox-content">
                    <div class="row text-center" style="margin-bottom: 15px;">
                        <img src="{{ asset('assets/img/dboard/logo/logo.jpg') }}" width="130px">
                    </div>
                    <div class="row" style="padding: 0px 10px 0px 10px; margin-bottom: 20px;">
                        <div class="col-md-12" style="border: 1px solid #eee; border-left: 3px solid #23c6c8; padding: 10px; font-weight: bold;">
                            Tambahkan Perusahaan Pertama Anda
                        </div>
                    </div>
                    <div class="row" style="padding:10px 20px 10px 10px;">
                        <quote><strong>{{ Auth::user()->m_name }}</strong>, Saatnya meanmbahkan perusahaan yang akan anda monitor dengan DBoard. Masukkan informasi perusahaan anda tersebut dengan mengisi form dibawah ini.</quote>
                    </div>
                    <div class="row">
                        <form class="m-t" role="form" id="email-form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">

                                <input required type="text" class="form-control col-md-6" placeholder="Nama Perusahaan" name="c_name" id="c_name">
                                <span class="help-block m-b-none" style="margin-bottom: 10px; padding-left: 10px; color: #ed5565; visibility: hidden;" id="c_name_error"><small>.</small></span>

                                <input required type="text" class="form-control" placeholder="Masukkan Alamat Perusahaan" name="c_address" id="c_address">
                                <span class="help-block m-b-none" style="padding-left: 10px; color: #ed5565; visibility: hidden;" id="c_address_error"><small>.</small></span>

                            </div>
                            
                            <div class="col-md-4" style="padding: 0px 5px 0px 0px">
                                <a href="{{ route('login.logout') }}"><button type="button" class="btn btn-default block full-width m-b" data-style="zoom-in"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout</button></a>
                            </div>
                            <div class="col-md-8 no-padding">
                                <button type="button" class="ladda-button ladda-button-demo btn btn-primary block full-width m-b" data-style="zoom-in">Tambah Perusahaan</button>
                            </div>

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
    </div>
    

    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-1.12.3.min.js') }}"></script>

    <!-- Ladda -->
    <script src="{{ asset('assets/vendors/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/ladda/ladda.jquery.min.js') }}"></script>

    <script type="text/javascript">
        var buttonLadda = $('.ladda-button-demo').ladda();
        var baseUrl = '{{ url('/') }}';
        $('.ladda-button').click(function(){
            if(validation()){
                buttonLadda.ladda('start');
                $.ajax({
                    url         : baseUrl+'/gate/step2',
                    type        : 'post',
                    timeout     : 10000,
                    data        : $('#email-form').serialize(),
                    dataType    : 'json',
                    success     : function(response){
                        console.log(response.content);
                        if(response.status == 'sukses'){
                            //alert('okee');
                            window.location = baseUrl+'/data-master/master-akun/generate_akun/dashboard/'+response.content;
                        }else if(response.status == 'gagal'){
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

        function validation(){
            var c_name = document.getElementById('c_name');
            var c_address = document.getElementById('c_address');

            // if(me_email.validity.typeMismatch){
            //     $('#mail_error').css('visibility', 'visible');
            //     $('#mail_error small').text('* Tampaknya Email Tidak Valid');
            //     return false;
            // }
            if(c_name.validity.valueMissing){
                $('#c_name_error').css('visibility', 'visible');
                $('#c_name_error small').text('* Nama Perusahaan Tidak Boleh Kosong');
                return false;
            }else if(c_address.validity.valueMissing){
                $('#c_address_error').css('visibility', 'visible');
                $('#c_address_error small').text('* Alamat Perusahaan Tidak Boleh Kosong');
                return false;
            }

            return true;
        }
    </script>

</body>

</html>
