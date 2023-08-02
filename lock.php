<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("Location: login.php");

}
include('config.php');
$user_check = $_SESSION['login_user'];

$ses_sql = mysql_query("select * from data where d_name='$user_check' ");
$row = mysql_fetch_array($ses_sql);

echo $login_session = $row['d_name']."</br>"."<center>";
// echo $login_session = $row['r_writer']."</br>"."</center>";


?>