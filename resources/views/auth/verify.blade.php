
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/register18.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 07:53:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Support Portal</title>
    <link rel="stylesheet" type="text/css" href="../log/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../log/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../log/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="../log/css/iofrm-theme18.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="../log/images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="../log/images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Verify Email</h3>
              <p>Hi {{Auth::User()->name}}, we have sent a verification email. Please verify to login.</p><br>
              @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
              {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login18.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 07:53:10 GMT -->
</html>