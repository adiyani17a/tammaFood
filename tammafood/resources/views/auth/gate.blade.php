<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DBoard | Pilih Perusahaan </title>
    
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

<body class="gray-bg" style="background-image: url('{{ asset('assets/img/dboard/background/login.png') }}')">

   <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="ibox-content">
                    <div class="row text-center" style="margin-bottom: 10px;">
                        <img src="{{ asset('assets/img/dboard/logo/logo.jpg') }}" width="130px">
                    </div>
                    <div class="row" style="padding:10px 20px 10px 10px;">
                        <quote>Hai <strong>{{ Auth::user()->m_name }}</strong>, kami menemukan ada {{ count(Auth::user()->company) }} perusahaan yang terkait dengan akun anda. Silahkan pilih perusahaan mana yang akan anda gunakan untuk informasi login anda.</quote>
                    </div>
                    <div class="row">
                        <form class="m-t" role="form" id="login-form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group" style="margin-bottom: 25px;">

                                <select name="mem_comp" class="form-control">
                                    <?php $a = 1; ?>
                                    @foreach($memcomp as $data)
                                        @if($a == 1)
                                            <option selected value="{{ $data->c_id }}">{{ $data->c_name }}</option>
                                        @else
                                            <option value="{{ $data->c_id }}">{{ $data->c_name }}</option>
                                        @endif

                                        <?php $a++ ?>
                                    @endforeach
                                </select>
                                <p style="padding-left:10px;" class="form-control-static">
                                    <small>* Informasi ini juga bisa anda ganti nanti.</small>
                                </p>

                            </div>
                            
                            <div class="col-md-4" style="padding: 0px 5px 0px 0px">
                                <a href="{{ route('login.logout') }}"><button type="button" class="btn btn-default block full-width m-b" data-style="zoom-in"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout</button></a>
                            </div>
                            <div class="col-md-8 no-padding">
                                <button type="button" class="ladda-button ladda-button-demo btn btn-primary block full-width m-b" data-style="zoom-in">Saya Pilih Perusahaan Ini Dulu</button>
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
            buttonLadda.ladda('start');
            $.ajax({
                url         : baseUrl+'/login/comp-gate',
                type        : 'post',
                timeout     : 10000,
                data        : $('#login-form').serialize(),
                dataType    : 'json',
                success     : function(response){
                    if(response.status == 'sukses'){
                        window.location = baseUrl+'/dashboard';
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
        });
    </script>

</body>

</html>
