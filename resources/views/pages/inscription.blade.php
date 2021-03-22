<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Inscription</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="/style/inscription.css">
</head>
<body>



    <form action="{{ route('pages.name')}}" method="post">
        @csrf

        <div class="container">

            <header class="heading"> Inscription</header><hr></hr>
           <div class="row ">
            <div class="results">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xs-4">
                              <label class="firstname">Username :</label> </div>
                        <div class="col-xs-8">
                            <input type="text" name="username" id="fname" placeholder="Entrer votre Username" class="form-control " value="{{ old('username' )}}">
                    </div>
                    <span class="text-danger">@error ('username'){{ $message }} @enderror</span>
                     </div>
                </div>


                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xs-4">
                            <label class="lastname">Email :</label></div>
                       <div class ="col-xs-8">
                            <input type="email" name="email" id="lname" placeholder="Entrer votre mail" class="form-control last" value="{{ old('email') }}">
                       </div>
                       <span class="text-danger">@error ('email'){{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xs-4">
                            <label class="mail" >Password :</label></div>
                        <div class="col-xs-8"	>
                             <input type="password" name="password"  id="email"placeholder="Entrer votre mot de passe" class="form-control" >
                        </div>
                        <span class="text-danger">@error ('password'){{ $message }} @enderror</span>
                    </div>
                </div>
                 <div class="col-sm-12">
                        <div class="row">
                            <div class="col-xs-4">
                                  <label class="pass">Confirm :</label></div>
                         <div class="col-xs-8">
                                <input type="password" name="confirm_password" id="password" placeholder="Confirmer votre mot de passe" class="form-control">
                        </div>
                 </div>
                 <span class="text-danger">@error ('confirm_password'){{ $message }} @enderror</span>
                 </div>
                <div class="col-sm-12">
                       <div class="row">
                           <div class="col-xs-4">
                                 <label class="pass">Role:</label></div>
                        <div class="col-xs-8">
                               <input type="text" name="role" id="role" placeholder="Votre role" class="form-control" value="{{ old('role') }}">
                       </div>
                       <span class="text-danger">@error ('role'){{ $message }} @enderror</span>
                </div>
                    <div class="col-sm-12 form-group">
                        <button type="submit" class="btn btn-block btn-warning"> Inscription</button>
                  </div>
                </div>
                <div id="register-link " class="text-right">
                   <a href="/login" class="text-danger">Connecterz vous</a>
               </div>
            </div>


       </div>
    </form>

</body>
</html>

