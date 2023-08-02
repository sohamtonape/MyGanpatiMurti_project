<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $a=$_POST['name'];
    $b=$_POST['date'];
    $c=$_POST['dropdown'];

$qry=mysql_query("INSERT into ganpati.order(o_name , o_date , o_dropdown ) values('$a', '$b' , '$c' )");
if ($qry== true)
{
    // echo "<center>"."inserted"."<center>";
    header("location:thanks.php");
}
else{
    echo "not".mysql_error();
}

}
else{
    echo "Request method is not POST";
}

?>