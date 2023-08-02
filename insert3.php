<?php
include("config.php");
$path = "uploads/";
$valid_formats = array("jpg", "png", "gif", "bmp", "JPG", "jfif","jpeg");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    $a=$_POST['name'];
    $b=$_POST['hight'];
    $c=$_POST['weight'];
    $d=$_POST['colour'];
    $e=$_POST['price'];
    $time=time();
    $actual_image_name = $_FILES['g_image'] ['name'];
    $reimg= $time.$actual_image_name;
    $size= $_FILES['g_image']['size'];
    $tmp= $_FILES['g_image']['tmp_name'];
    $ext= explode("." , $actual_image_name);
    
   
    if(in_array($ext[1],$valid_formats))
    {
        if(move_uploaded_file($tmp,$path.$reimg))
        {

            $qry=mysql_query("INSERT INTO ganpati.ganesh_details(g_name, g_hight, g_weight , g_colour , g_price, g_image) VALUES('$a', '$b', '$c', '$d', '$e','$reimg' )");

            if($qry == true)
            {

                // echo "<center>"."  inserted "."</center>";
                header("location:thanks.php");

            }
            else
            {
                echo "not".mysql_error();
            }
        }
    }
    

}    
?>