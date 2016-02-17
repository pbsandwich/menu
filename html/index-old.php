<!DOCTYPE html>
<?php
include('arrayinclude.php');

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
switch ($maincat){
    case "":
        foreach($Menu as $value) {
            echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
        }

        break;
    case "twofor":
        echo "<h2>Two For Twenty</h2>";
        $twofor = $Menu[0];

        foreach (array_slice($twofor,3) as $value) {
            echo "<a href='".$value['Link']."'>
                <img class='img-responsive' src='".$value['ImageLoc']."' alt=''>
                <h3>".$value['Title']."</h3>
            </a>";
        }


        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
    case "":
        //code for category goes here;
        break;
}
?>
        </div>
    </div>
</div>
</body>
</html>
