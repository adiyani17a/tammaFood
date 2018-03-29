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

<body class="gray-bg">

   <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="ibox-content">
                    <div class="row text-center" style="margin-bottom: 10px;">
                        <img src="{{ asset('assets/img/dboard/logo/logo.jpg') }}" width="130px">
                    </div>
                    <div class="row" style="padding:10px 20px 10px 10px;">
                        <quote><strong>{{ Auth::user()->m_name }}</strong>. kami telah mengirimkan link verikasi di alamat email anda. Silahkan klik link tersebut untuk bisa segera menggunakan DBoard.</quote>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
    </div>
    
</body>

</html>
