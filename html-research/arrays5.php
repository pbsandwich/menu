<!--// http://webcheatsheet.com/php/multidimensional_arrays.php-->

<?php
$shop = array(array(array("side salad text", "side salad url"),
    array("daisy", 0.75, 25),
    array("orchid", 1.15, 7)
),
    array(array("rose", 1.25, 15),
        array("daisy", 0.75, 25),
        array("orchid", 1.15, 7)
    ),
    array(array("rose", 1.25, 15),
        array("daisy", 0.75, 25),
        array("orchid", 1.15, 7)
    )
);
?>

<?php
echo "<ul>";
for ( $layer = 0; $layer < 11; $layer++ )
{
    echo "<li>2 for Twenty $layer";
    echo "<ul>";

    for ( $row = 0; $row < 3; $row++ )
    {
        echo "<li>The row number $row";
        echo "<ul>";

        for ( $col = 0; $col < 3; $col++ )
        {
            echo "<li>".$shop[$layer][$row][$col]."</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";
?>
