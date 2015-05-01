<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29.04.15
 * Time: 20:18
 */
include "2table.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <style type="text/css">
        table, th, td {
            border: 1px solid black;
        }
        #tab{height: 150px;}
        #tab1 {margin-top:5px;width: 100px; float: left;}
        #tab2 {margin-top:5px;width: 100px; float: left; }
        #tab3 {margin:20px 0 0 25px; width: 100px; }
    </style>
</head>
<body>
<p><b> Выберите тип join:</b><Br>
    <input type="radio" name="join" value="left"> LEFT JOIN
    <input type="radio" name="join" value="right">RIGHT JOIN
    <input type="radio" name="join" value="inner">INNER JOIN
    <input type="radio" name="join" value="outer">OUTER JOIN
</p>

<div id="tab">

    <div id="tab1">
         <?php echo $table1;?>
    </div>

    <div id="tab2">
          <?php echo $table2;?>
    </div>

</div>

<div id="tab3">
</div>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/myscript.js"></script>
 </body>
</html>

