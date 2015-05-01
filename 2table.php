<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29.04.15
 * Time: 20:17
 */
function generate_table($query)
{

    $conn = new Mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $conn->set_charset("utf8");
    $res = $conn->query($query) or die($conn->error);
    while ($row = mysqli_fetch_assoc($res)) {
        $arr[] = $row;
    }
    $str ='<table class="table table-bordered">';
    $str.="<tr><td>id</td><td>val</td></tr>";
    foreach ($arr as $key => $value)
    {

        $str.="<tr>";
        foreach ($value as $key1 => $value2)
        {
            $str.="<td>".$value2."</td>";
        }

        $str.="</tr>";

    }

    $str.="</table>";
    return $str;
}

define('DB_USER', 'root');
define('DB_PASS', '1234');
define('DB_HOST', 'mvc');
define('DB_NAME', 'reg');


$newstable='tabname1';
$query ="SELECT * FROM $newstable";
$table1=generate_table($query);
$newstable='tabname1';
$query ="SELECT * FROM $newstable";
$table2=generate_table($query);
