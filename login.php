<?php

session_start();

include("config.php");
if(isset($_SESSION['login_user']))
{
    header("location:home1.php");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $a=$_POST['name'];
    $b=$_POST['pass'];
    $pass=md5($b);
    

    

    $sql="SELECT c_id FROM customer WHERE c_name='$a'  and c_pass='$pass'";
    $result=mysql_query($sql);
    $row=mysql_fetch_array($result);

    $count=mysql_num_rows($result); 

    if($count==1){
        $_SESSION['login_user']=$a;
        header("location:home1.php");
    }
    else{
        $error="Your Login Name or Password is Invalid";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#log").validate({
                rules:{
                    name:"required",
                    pass:"required",
                },
                    messages:{
                        name:"Please Enter Full Name",
                        pass:"Please Enter The Password",
                    },
                    submitHandler: function(form){
                        alert("Date is correct..!!");
                        form.submit();
                    



                }
            });
        });
    </script>


    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            padding: 20px;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff; /* Blue */
            margin-bottom: 20px;
        }

        p {
            color: #6c757d; /* Gray */
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da; /* Gray */
            padding: 10px;
        }

        .form-control:focus {
            border-color: #80bdff; /* Light Blue on focus */
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Lighter Blue on focus */
        }

        .btn-primary {
            width: 100%;
            background-color: #007bff; /* Blue */
            border-color: #007bff; /* Blue */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker Blue on hover */
            border-color: #0056b3; /* Darker Blue on hover */
        }

        .btn-secondary {
            width: 100%;
            background-color: #6c757d; /* Gray */
            border-color: #6c757d; /* Gray */
        }

        .btn-secondary:hover {
            background-color: #5a6268; /* Darker Gray on hover */
            border-color: #5a6268; /* Darker Gray on hover */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <center>
                    <form id="log" action="" method="POST">
                        <h2> Login </h2>
                        <p><i><b>Enter the information below</b></i></p>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter password">
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary" value="Log In">
                        </div>
                        <p class="mt-3">For New User Register Here</p>
                        <button class="btn btn-secondary"><a class="text-white" href="home.php">Back to Login</a></button>
                        <!-- <button><a class="" href="forgot.php">forgot</a></button>
                        <button><a class="" href="update.php">edit</a></button> -->
                    </form>
                </center>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (place this at the end of the body to improve page load time) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

