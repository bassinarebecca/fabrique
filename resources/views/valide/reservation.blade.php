<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation</title>
    <link href="/style/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="/style/bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/style/dashboard.css">
    <link rel="stylesheet" href="/style/index.css">
</head>
<body>
    <div class="container">
        <div class="text-center mt-4">
            <a class="btn btn-success" href="{{route('admin')}}">Retour</a>
        </div>
    </div>

    <div class="container text-center tableau">
        <div class="text-center">
            <div class="row m-auto tableau" style="">
                <div class="col-md-6 col-md-offset-3 mx-auto">
                    <h4 class="text-danger valide">Les Réservations</h4>
                    <hr>
                    <table class="table table-hover table-danger">
                        <thead>
                            <th>Username</th>
                            <th>Debut heure</th>
                            <th>Fin heure</th>
                            <th>Jour</th>
                            <th>Place</th>
                            <th>Reserve</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $LoggedUsersInfo ?? 'username'}}</td>
                                <td>{{ $LoggedUsersInfo ?? 'debut_heure'}}</td>
                                <td>{{ $LoggedUsersInfo ?? 'fin_heur'}}</td>
                                <td>{{ $LoggedUsersInfo ?? 'jour'}}</td>
                                <td>{{ $LoggedUsersInfo ?? 'place'}}</td>


                                <td><a href="logout"><button class="btn btn-success" type="submit">Valider</button></a></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
