<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.04.15
 * Time: 14:51
 */
define('DB_USER', 'root');
define('DB_PASS', '1234');
define('DB_HOST', 'mvc');
define('DB_NAME', 'reg');
$conn = new Mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$conn->set_charset("utf8");
$join=$_POST['word'];
if($join=="inner")
{
    $query ="SELECT * FROM tabname1 INNER JOIN tabname2 ON tabname1.id=tabname2.id";
}
elseif($join=="outer")
{
    $query ="SELECT * FROM tabname1 LEFT JOIN tabname2 ON tabname1.id=tabname2.id
UNION
SELECT * FROM tabname1 RIGHT JOIN tabname2 ON tabname1.id=tabname2.id";
}
elseif($join=="left")
{
    $query ="SELECT * FROM tabname1 LEFT JOIN tabname2 ON tabname1.id=tabname2.id";
}
elseif($join=="right")
{
    $query ="SELECT * FROM tabname1 RIGHT JOIN tabname2 ON tabname1.id=tabname2.id";
}
$res = $conn->query($query) or die($conn->error);
while ($row = mysqli_fetch_assoc($res)) {
    $arr[] = $row;
}
$str ="<table>";
foreach ($arr as $key => $value)
{

    $str.="<tr class='active'>";
    foreach ($value as $key1 => $value2)
    {
        $str.="<td>".$value2."</td>";
    }
    $str.="</tr>";

}

$str.="</table>";
$date =$str;
echo json_encode($date);
die();

