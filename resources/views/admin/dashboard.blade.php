<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="/style/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="/style/bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/style/dashboard.css">
    <link rel="stylesheet" href="/style/index.css">
</head>
    <body>
        <div class="admin">
            <div class="header">
                <div class="profil">

                </div>
                <h3>Administrateur</h3>
                <nav class="navbar navbar-expand-md ">
                   <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="nav">
                        <ul>
                            <li>
                                <img src="image/accueil.png" alt="" srcset="">
                                <a href="">Accueil</a>
                            </li>
                            <li>
                                <a href=""> Réserver</a>
                            </li>
                            <li class="deroulant">
                                <a href="">Valider</a>
                                <ul class="sous">
                                    <li><a href="{{route('compte')}}">Compte</a></li>
                                    <li><a href="{{route('reservation')}}">Réservation</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                   </div>
                </nav>
            </div>
            <div class="centre">
                <div class="simplon">
                    <h4>SIMPLON.AUF@OUAGA-P2</h4>
                </div>
                <div >
                    <button type="submit" class="deconnexion"><a href="/deconnexion" style="text-decoration:none; color:white;">Deconnexion</a></button>
                </div>

                <div id="tableau">
                    <form action="/reserve" method="post">
                        {{@csrf_field()}}
                        <h3>Salle libre</h3>
                        <div class="labe d-flex ">
                            <label for="username">Username:</label>
                            <input type="text" name="username" placeholder="Username"  value="{{ old('username') }}">
                            <span class="text-danger">@error ('username'){{ $message }} @enderror</span>
                        </div>
                        <div class="labe">
                            <label for="debut_heure">Debut</label>
                            <input type="time" name="debut_heure" placeholder="Debut d'heure"  value="{{ old('debut_heure') }}">
                            {{-- <select type="time" name="debut_heure" id="pet-select">
                                <option value="Time">9h00</option>
                                <option value="Time">18h30</option>
                            </select> --}}
                            <span class="text-danger">@error ('debut_heure'){{ $message }} @enderror</span>
                        </div>
                        <div class="labe">
                            <label for="fin_heur">Fin</label>
                            <input type="time" name="fin_heur" placeholder="Fin d'heur"  value="{{ old('fin_heur') }}">
                            {{-- <select type="time" name="fin_heur" id="pet-select">
                                <option value="Time">18h30</option>
                                <option value="Time">20h30</option>
                            </select> --}}
                            <span class="text-danger">@error ('fin_heur'){{ $message }} @enderror</span>
                        </div>
                        <div class="labe">
                            <label for="jour">Jour</label>
                            <input type="date" name="jour" placeholder="Jour"  value="{{ old('jour') }}">
                            {{-- <select name="jour" id="pet-select">
                                <option value="Text">~~~</option>
                                <option value="Ttex">Lundi</option>
                                <option value="Text">Mardi</option>
                                <option value="Ttex">Mercredi</option>
                                <option value="Text">Jeudi</option>
                                <option value="Ttex">Vendredi</option>
                                <option value="Text">Samedi</option>
                                <option value="Ttex">Dimanche</option>
                            </select> --}}
                            <span class="text-danger">@error ('jour'){{ $message }} @enderror</span>
                        </div>
                        <div class="labe d-flex ">
                            <label for="place">Places:</label>
                            <input type="int" name="place" placeholder="Nombre de places"  value="{{ old('place') }}">
                            <span class="text-danger">@error ('place'){{ $message }} @enderror</span>
                        </div>
                        <input type="hidden" name="reserve">
                        <button class="envoyer btn" type="submit">Envoyer</button>
                    </form>
                </div> <br>





            <div class="footer">
                <h3>APPRENANTS DE LA PROMOTIONS 2 A SIMPLON.AUF@OUAGA</h3>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>
