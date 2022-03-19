
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/register18.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 07:53:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synergy</title>
    <link rel="stylesheet" type="text/css" href="log/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="log/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="log/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="log/css/iofrm-theme18.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="log/images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register new account</h3>
                        <p>Create an account begin</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Full Name" required>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="E-mail Address" required>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <input class="form-control" type="text" name="phone" placeholder="Phone" required>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
                             <input class="form-control" type="text" name="referal" placeholder="referral code" />
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form><br>

                        <div class="page-links">
                            <a href="login">Login to account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="log/js/jquery.min.js"></script>
<script src="log/js/popper.min.js"></script>
<script src="log/js/bootstrap.min.js"></script>
<script src="log/js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/register18.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 07:53:19 GMT -->
</html>
