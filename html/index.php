<!DOCTYPE html>
<?php
include('array.php');
$maincat = filter_var($_REQUEST['category'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applebee's Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<h1>AppleBee's Menu</h1>
<div class='container'>
    <div class='row'>
        <div class='col-md-4 portfolio-item'>
            <?php
            switch ($maincat) {
                case "":
                    foreach ($Menu as $value) {
                        echo "<a href='" . $value['Link'] . "'>
                <img class='img-responsive' src='" . $value['ImageLoc'] . "' alt=''>
                <h3>" . $value['Title'] . "</h3>
            </a>";
                    }
                    break;
                case "twofor":
                    echo "<h2>Two For Twenty</h2>";
                    $twofor = $Menu[0];
                    foreach (array_slice($twofor, 3) as $value) {
                        echo "<a href='" . $value['Link'] . "'>
                <img class='img-responsive' src='" . $value['ImageLoc'] . "' alt=''>
                <h3>" . $value['Title'] . "</h3>
            </a>";
                    }
                    break;
                case "better":
                    echo "<h2>Better For You</h2>";
                    $better = $Menu[1];
                    foreach (array_slice($better, 3) as $value) {
                        echo "<a href='" . $value['Link'] . "'>
                <img class='img-responsive' src='" . $value['ImageLoc'] . "' alt=''>
                <h3>" . $value['Title'] . "</h3>
            </a>";
                    }
                    break;
            case "Drinks":
                    echo "<h2>Beverages</h2>";
                    $Drinks = $Menu[2];
                    foreach (array_slice($Drinks,3) as $value) {
                        echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
                    }
                    break;
                case "Burgers":
                    echo "<h2>Burgers</h2>";
                    $Burgers = $Menu[3];
                    foreach (array_slice($Burgers,3) as $value) {
                        echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
                    }
                    break;
                case "Desserts":
                    echo "<h2>Desserts</h2>";
                    $Desserts = $Menu[4];
                    foreach (array_slice($Desserts,3) as $value) {
                        echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
                    }
                    break;
                case "MainEntree":
                    echo "<h2>Main Entree</h2>";
                    $MainEntree = $Menu[5];
                    foreach (array_slice($MainEntree,3) as $value) {
                        echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
                    }
                    break;
                case "Lunch":
                    echo "<h2>Lunch Combos</h2>";
                    $Lunch = $Menu[6];
                    foreach (array_slice($Lunch,3) as $value) {
                        echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
                    }
                    break;
                case "Salads":
                    echo "<h2>Salads</h2>";
                    $Salads = $Menu[7];
                    foreach (array_slice($Salads,3) as $value) {
                        echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
                    }
                    break;
                case "Pub":
                    echo "<h2>Pub Diet</h2>";
                    $Pub = $Menu[8];
                    foreach (array_slice($Pub,3) as $value) {
                        echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
                    }
                    break;
                case "Handhelds":
                    echo "<h2>Handhelds</h2>";
                    $Handhelds = $Menu[9];
                    foreach (array_slice($Handhelds,3) as $value) {
                        echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
                    }
                    break;
                case "kids":
                    echo "<h2>Kids</h2>";
                    $kids = $Menu[10];
                    foreach (array_slice($kids,3) as $value) {
                        echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
                    }
                    break;
                case "Bar":
                    echo "<h2>Bar Snacks</h2>";
                    $Bar = $Menu[11];
                    foreach (array_slice($Bar,3) as $value) {
                        echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
                    }
                    break;
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
