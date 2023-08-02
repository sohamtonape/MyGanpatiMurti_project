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


$qry=mysql_query("INSERT into ganpati.customer(c_name , c_age , c_date , c_dropdown , c_cont , c_pass) values('$a', '$b' , '$c', '$d' , '$e' , '$f' )");
if ($qry== true)
{
    // echo "<center>"."inserted"."<center>";
    header("location:login.php");
}
else{
    echo "not".mysql_error();
}

}
else{
    echo "Request method is not POST";
}

?>