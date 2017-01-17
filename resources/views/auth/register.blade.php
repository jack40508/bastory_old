<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="card card-container">
                <img class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p class="profile-name-card"></p>
                <form class="form-signin" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <span class="reauth-email"></span>
                    <input name="email" type="email" class="input form-control" placeholder="Email address" required>
                    <input name="name" type="name" class="input form-control" placeholder="Name" style="margin-bottom:10px" required>
                    <input name="password" type="password" class="input form-control" placeholder="Password" required>

                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign up</button>
                </form>
            </div>
        </div>
    </body>
</html>
