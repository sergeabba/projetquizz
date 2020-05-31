<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Se connecter</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    
</head>
<?php
<body style="">
    <style>
    body {
      background-repeat: no-repeat;
    }
    body{
        padding: 0;
        margin: 0;
        background-image: url('img/img-bg.png');
        background-size: cover;
        background-repeat: no-repeat;
        
    }
    .logo img{
        height: 75px;
        margin:0px -13px 0px 16px;
    }
    .nav{
        background-color: #042425;
        height: 100px;
        
    }
    .nav{
        display: flex;
        padding-left: 0%;
        flex-wrap: wrap;
    }
    .titre{
        text-align: center;
        color: white;
        font-size: 39px;
        margin:6px 0px 0px 361px;
    }
    
    /*Media Query*/
    @media screen and (min-width: 667px) and  (max-width: 1024px){
        body{
            background-size: 190%;
        }
        .titre{
            margin-top: -6%;
        }
    }
    
    @media screen and (min-width: 320px) and  (max-width: 667px){
        body{
            background-size: 20%;
        }
    
        .titre{
            margin-top: -11%;
            font-size: 1.5em;
        }
    }
    #brand-logo {
      font-size: 34px;
    }
    
    #app-navbar {
      background: linear-gradient(120deg, #00e4d0, #5983e8);
      margin-left: 25%;
    }

    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <header>
        <nav class="nav">
    
           <div class="logo"><img src="img/logo-QuizzSA.png"></div>
            <p class="titre">Le plaisir de jouer</p>
    
        </nav>
    </header>
    
    <div style="background-color: #fefefe;width: 484px;height: 400px;margin: 40px -2px 99px 295px;">
        <div class="d-flex" style="background-color: #51BFD0;height: 72px;">
            <p style="width: 387px;margin: 16px 18px;font-size: 24px;color: rgb(248,253,253);">
            Login Form</p><i class="fa fa-close" style="margin: 18px;color: rgb(255,255,255);font-size: 26px;">
        </i></div>
        <div><input class="form-control-lg" type="text"  required="" placeholder="Login" style="height: 80px;margin: 24px 10px -4px 25px;width: 429px;">
            <img src="img/ic-login.png" style="width: 30px;margin: -13px 0px 0px -45px;">
        </div>
        <div>
            <form action="traitement.php" method="POST"></form>
            <input class="form-control-lg" type="password"  required="" placeholder="Password" pattern="Login" style="height: 59px;margin: 27px 0px 0px 25px;width: 429px;">
            <img src="img/lock-security-pad-key.png" style="width: 25px;height: 34px;margin: -17px 0px 0px -41px;">
        </div>
        <div
            class="d-lg-flex align-items-lg-center">
            <button class="btn btn-primary" type="button" style="margin: 27px -21px 0px 24px;height: 43px;background-color: rgb(81,191,208);color: rgb(248,253,253);">
                Connexion
            </button><a href="user.html" style="margin: 25px 0px 0px 69px;font-size: 20px;color: rgb(129,129,129);">
                    S'inscrire pour jouer? 
                </a></div>
</div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
}

</html>    