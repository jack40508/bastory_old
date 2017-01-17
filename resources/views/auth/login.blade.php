<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="card card-container">
                <img class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p class="profile-name-card"></p>

                @if(count($errors)>0)
                   @foreach ($errors->all() as $error)
                      <div class="alert alert-danger form-allert" role="alert">{{ $error }}</div>
                  @endforeach
                @endif

                <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <span class="reauth-email"></span>
                    <input name="email" type="email" class="input form-control" placeholder="Email address" required autofocus>
                    <input name="password" type="password" class="input form-control" placeholder="Password" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                    <a href="{{url('/register')}}" class="btn btn-lg btn-primary btn-block btn-register" type="button">Register</a>
                </form>
            </div>
        </div>
    </body>
</html>
