<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/style1/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/style1/bootstrap/js/bootstrap.min.js')}}">
    <link rel="stylesheet" href="{{asset('/style1/style.css')}}">
    <title>Document</title>
</head>
<body>
<header>
      <!--Navbar blue-->
      <nav class="navbar navbar-expand-lg navbar-dark primary-color couleur">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offset-1"></div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

              <a class="nav-link waves-effect waves-light" href="#"> <img src="/img/accueil.png" class="icone"  width="20px; "alt=""> Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <div class="offset-3"></div>
            <li class="nav-item">

              <a class="nav-link waves-effect waves-light" href="#">  <img src="/img/rservation.png" class="icone" width="25px; " alt="">
                Reservation</a>
            </li>
            <div class="offset-4"></div>
            <li class="nav-item">
                <div class="col-md-3 " >
                    <h6 class="inner ">Simplon.CO.AUF</h6>
                </div>
            </li>
          </ul>
          <div class="col-md-2">
            <button class="btn btn-bg-danger border border-light"><span style="color: white">Connexion</span></button>
        </div>
        </div>
      </nav>

 <!-- ======= Hero Section ======= -->

 <main class="py-4">
    @yield('contenu')
</main>
<!-- End Hero -->




       <!-- Footer -->
       <div class="pied mt-5">
        <footer class=" bg-danger mt-5">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-1">
              <p class="footer text-light">APPRENANTS DE LA PROMOTIONS 2 A SIMPLON.AUF@OUAGA</p>
            </div>
            <!-- Copyright -->

          </footer>
       </div>

  <!-- Footer -->

</body>
</html>
