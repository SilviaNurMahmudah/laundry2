<html lang="en">
<head>
  <title>Aya Laundry</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="page/images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="page/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="page/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="page/fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="page/vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="page/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="page/vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="page/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="page/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="page/css/util.css">
  <link rel="stylesheet" type="text/css" href="page/css/main.css">
</head>
<body>

  <div class="container-login100" style="background-image: url('page/images/bg-02.webp');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
      @if(\Session::has('alert'))
        <div class="alert alert-danger">
          <div>{{Session::get('alert')}}</div>
        </div>
      @endif
      <form action="{{ route('actionlogin') }}" method="post" class="login100-form validate-form">
        @csrf
        <span class="login100-form-title p-b-37">
          <b>AYA LAUNDRY</b></a>
        </span>

        <div class="wrap-input100 validate-input m-b-20" data-validate="Masukan No.telp">
          <input class="input100" id="nohp" type="text" name="nohp" placeholder="No.telp" required autocomplete="nohp" autofocus>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-25" data-validate = "Masukan password">
          <input class="input100" id="password" type="password" name="password" placeholder="password" required autocomplete="current-password">
          <span class="focus-input100"></span>
        </div>

        <div class="text-nowrap" style="width: 8rem;">
          <strong >
            &nbsp;&nbsp;&nbsp;
          </strong>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn" type="submit">
            Log In
          </button>
        </div>

        <div class="text-nowrap" style="width: 8rem;">
          <strong >
            &nbsp;&nbsp;&nbsp;
          </strong>
        </div>

      </form>
      </div>
    </div>
  </div>

  <div id="dropDownSelect1"></div>
  
  <script src="page/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="page/vendor/animsition/js/animsition.min.js"></script>
  <script src="page/vendor/bootstrap/js/popper.js"></script>
  <script src="page/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="page/vendor/select2/select2.min.js"></script>
  <script src="page/vendor/daterangepicker/moment.min.js"></script>
  <script src="page/vendor/daterangepicker/daterangepicker.js"></script>
  <script src="page/vendor/countdowntime/countdowntime.js"></script>
  <script src="page/js/main.js"></script>
</body>
</html>