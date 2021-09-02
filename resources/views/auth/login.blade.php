<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your Business Digitaly with E-wallet.">
    <meta name="author" content="Creative Tim">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- Title -->
    <title>Apollotyres</title>

    <!-- Favicon -->
    <link href="{{ url('/assets') }}/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ url('/assets') }}/css/icons.css" rel="stylesheet">

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{ url('/assets') }}/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Ansta CSS -->
    <link href="{{ url('/assets') }}/css/dashboard.css" rel="stylesheet" type="text/css">

    <!-- Single-page CSS -->
    <link href="{{ url('/assets') }}/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

</head>

<body class="bg-gradient-primary">
    <div class="limiter">
        <div class="container-login100">

            <div class="wrap-login100 p-5">

                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                     @csrf
                    <span class="login100-form-title" >
                         Login
                    </span>
          
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                       
                         <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email">
                              <span class="symbol-input100">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                        </span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                          <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
                              <span class="symbol-input100">
                            <i class="fas fa-lock" aria-hidden="true"></i>
                        </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn btn-primary">
                            Login
                        </button>
                    </div>

                 
                   
                </form>
              <!--    <button id="btn-nft-enable" onclick="initFirebaseMessagingRegistration()" class="btn btn-danger btn-xs btn-flat">Allow for Notification</button> -->
            </div>
        </div>
    </div>

    <!-- Ansta Scripts -->
    <!-- Core -->
    <script src="{{ url('/assets') }}/plugins/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('/assets') }}/js/popper.js"></script>
    <script src="{{ url('/assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript"> setTimeout(function(){$('#final_msg').fadeOut();}, 2000);</script>

</body>

</html>