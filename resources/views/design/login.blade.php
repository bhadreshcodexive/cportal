<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <title>Login</title>
  </head>
  <body class="login-cms">
    <div class="header">
        <div class="row inner">
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="logo">
                    <img src="{{asset('assets/images/logo.png')}}" alt="web">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="site-link">
                    <img src="{{asset('assets/images/web.png')}}" alt="web">
                    <a href="javascript:void(0);">Visit our website</a>
                </div>
            </div>
        </div>
    </div>
    <div class="login-outer">
        <div class="container">
            {{-- sdsd --}}
            <div class="row">
                <div class="login-main">
                    <div class="login-title">No more endless <br/> email threads.</div>
                    <form class="login-form" autocomplete="off">
                        <div class="form-outer">
                            <label class="flabel">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form--input">
                        </div>
                        <div class="form-outer">
                            <label class="flabel">Password</label>
                            <div class="input-pass">
                                <input type="password" name="password" placeholder="Password" class="form--input">
                                <a href="javascript:void(0);" class="lost-pass">Lost your password?</a>
                            </div>
                        </div>
                        <input type="submit" value="Enter" class="btn1 login-submit-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
