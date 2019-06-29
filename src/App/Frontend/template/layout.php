<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Questrial|Quicksand|Raleway&display=swap" rel="stylesheet">
    <!--<link href='http://fonts.googleapis.com/css?family=Roboto|Open+Sans' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Acme|Black+Han+Sans|Nunito|Aladin|Josefin+Sans|Marcellus|Fredericka+the+Great|Raleway+Dots|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Rochester|Bree+Serif|Aref+Ruqaa:400,700|Cinzel:400,700,900|Comfortaa:300,400,700|Dancing+Script:400,700|Lobster|Muli:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Nanum+Gothic:400,700,800|Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|PT+Sans:400,400i,700,700i|Pacifico|Patrick+Hand|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Materialize: Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $fileCss; ?>">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Mon Blog</title>
</head>

<body class="amber lighten-4">
<nav id="navbar" class="navbar full" role="navigation">
    <div class="nav-wrapper">
        <ul class="nav right hide-on-med-and-down">
            <li>
                <a href="/" class="nav-btn grey-text link">
                    <span style="margin-right: 0.7em;"><i class="fas fa-home"></i></span>
                    accueil
                </a>
            </li>
            <li>
                <a href="/infos" class="nav-btn grey-text link">
                    <span style="margin-right: 0.7em;"><i class="fas fa-address-card"></i></span>
                    Auteur
                </a>
            </li>
            <li>
                <a href="/chapitres" class="nav-btn grey-text link">
                    <span style="margin-right: 0.7em;"><i class="fas fa-book-open"></i></span>
                    espace lecture
                </a>
            </li>
            <li>
                <a href="/connexion" class="btn grey-text indigo nav-btn">
                    <i class="material-icons left">
                        account_circle
                    </i>
                    se connecter
                </a>
            </li>
        </ul>

        <!-- Nav mobile -->
        <ul id="nav-mobile" class="sidenav">
            <li>
                <a href="#">Accueil</a>
            </li>
            <li>
                <a href="#">Chapitres</a>
            </li>
            <li>
                <a href="#">Qui suis-je ?</a>
            </li>
            <li>
                <a class="text-grey text-lighten-4" href="#">Se connecter</a>
            </li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="container mt-10 mb-3">
    <?= $content ?>
</div>
<footer class="blue-grey darken-4 text-align-center">
    <a href="https://github.com/julienweb/php-crud-mvc">Github</a>
</footer>

<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="<?= $fileJs; ?>"></script>
</body>
</html>
