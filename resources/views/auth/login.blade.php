
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/register18.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 07:53:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synergy Portal</title>
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
                        <h3>Login to account</h3>
                        <p>Sign in to start your session</p>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="E-mail Address" required>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>

                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="{{ route('password.request') }}">Forget password?</a>
                            </div>
                        </form>

                        <div class="page-links"><br>
                            <a href="register">Register new account</a>
                        </div>
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
