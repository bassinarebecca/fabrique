<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
    <link href="/style/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="/style/bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/style/authentification.css">
</head>


<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Authentification</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ route('pages.check')}}" method="post">
                            @csrf

                            <div class="results">
                                @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ session::get('success') }}
                                    </div>

                                @endif
                                @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ session::get('fail') }}
                                </div>

                            @endif
                        </div>

                            <h3 class="text-center text-danger">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-danger">Email:</label><br>
                                <input type="email" name="email" id="username" class="form-control" value="{{ old('email') }}">
                                <span class="text-danger">@error ('email'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-danger">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                <span class="text-danger">@error ('password'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group"> <br>
                                <input type="submit" name="submit" class="btn btn-danger btn-md" value="Connecter">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="register" class="text-danger">Inscription</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
