<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $a=$_POST['name'];
    $b=$_POST['age'];
    $c=$_POST['date'];
    $d=$_POST['dropdown'];
    $e=$_POST['cont'];
    $f=md5($_POST['pass']);


$qry=mysql_query("INSERT into ganpati.data(d_name , d_age , d_date , d_dropdown , d_cont , d_pass) values('$a', '$b' , '$c', '$d' , '$e' , '$f' )");
if ($qry== true)
{
    // echo "<center>"."inserted"."<center>";
    header("location:saler.php");
}
else{
    echo "not".mysql_error();
}

}
else{
    echo "Request method is not POST";
}

?>