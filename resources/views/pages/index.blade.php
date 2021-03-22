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
                <div class="nav">
                    <ul>
                        <li>
                            <a href="">Accueil</a>
                        </li>
                        <li>
                            <a href=""> Réserver</a>
                        </li>
                        <li class="deroulant">
                            <a href="">Valider</a>
                            <ul class="sous">
                                <li><a href="">Compte</a></li>
                                <li><a href="">Réservation</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="centre">
                <div class="simplon">
                    <h4>SIMPLON.AUF@OUAGA-P2</h4>
                </div>
                <div >
                    <button type="submit" class="deconnexion">Deconnexion</button>
                </div>
                <form action="{{route('admin.name')}}" method="post">
                    <h3>Salle libre</h3>
                    <div class="labe">
                        <label for="">Debut</label>
                        <select id="pet-select">
                            <option value="Time">9h00</option>
                            <option value="Time">18h30</option>
                        </select>
                    </div>
                    <div class="labe">
                        <label for="">Fin</label>
                        <select id="pet-select">
                            <option value="Time">18h30</option>
                            <option value="Time">20h30</option>
                        </select>
                    </div>
                    <button class="envoyer" type="submit">Envoyer</button>
                </form>
            </div>

            <div class="container">
                <div class="row" style="margin-top: 45px">
                    <div class="col-md-6 col-md-offset-3">
                        <h4>Dashboard Admin</h4>
                        <hr>
                        <table class="table table-hover">
                            <thead>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $LoggedUsersInfo ?? 'username'}}</td>
                                <td>{{ $LoggedUsersInfo ?? 'email'}}</td>
                                <td>{{ $LoggedUsersInfo ?? 'role'}}</td>



                                    <td><a href="logout"><button class="btn btn-success" type="submit">Valider</button></a></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="footer">
                <h3>APPRENANTS DE LA PROMOTIONS 2 A SIMPLON.AUF@OUAGA</h3>
            </div>
        </div>
    </body>
</html>
