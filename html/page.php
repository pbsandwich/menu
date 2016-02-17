<!DOCTYPE html>
<?php
include('arrayinclude-kids.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applebee's Menu</title>
</head>
<body>

    <?php
        $maincat = filter_var($_REQUEST['category'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

        switch ($maincat){
            case "twofor":
                echo 'cake';
                

                //code for category goes here;
                //i.e. $header= print arrayName[0];
                //i.e. $subcat= print arrayName[0][0];
                //i.e. $subcat1= print arrayName[0][1];
                //i.e. $subcat2= print arrayName[0][2];
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
</body>
</html>
