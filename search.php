<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Ganesh Saler</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#search").validate({
                rules:{
                    searchname:"required",
                    searchname1:"required",
                },
                    messages:{
                        searchname:"Please Enter the Ganesh saler name",
                        searchname1:"Please Enter the Ganesh price",
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
            margin: 20px auto;
        }

        form {
            text-align: center;
        }

        input[type="text"] {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ced4da; /* Gray */
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff; /* Blue */
            color: #ffffff;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker Blue on hover */
        }

        button {
            display: block;
            margin-top: 15px;
            background-color: #6c757d; /* Gray */
            color: #ffffff;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

        button a {
            color: #ffffff;
            text-decoration: none;
        }

        button:hover {
            background-color: #5a6268; /* Darker Gray on hover */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 5px solid #000000;
            background-color: #e1f1ff; /* Light Blue */
        }

        th, td {
            border: 2px solid #000000;
            padding: 15px;
        }

        th {
            background-color: #a0c9ff; /* Light Blue */
        }

        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="search" action="" method="POST">
            <h2 class="heading">Search Ganesh Saler</h2>
            <input type="text" name="searchname" placeholder="Enter the Ganesh saler name">
            <input type="text" name="searchname1" placeholder="Enter the Ganesh price">
            <input type="submit" class="btn btn-primary" name="search" value="Search">
            <button class="btn btn-secondary"><a href="home.php">Back to Homepage</a></button>
        </form>
    </div>
</body>
</html>

<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $search = $_POST['searchname'];
    $search1 = $_POST['searchname1'];
    $qry = mysql_query("SELECT * FROM ganesh_details WHERE g_name LIKE '%$search%' AND g_price LIKE '%$search1%'");


    while($row = mysql_fetch_array($qry))
    {
        echo "<table border='1'>
        
        <tr>
        <th>Id</th>
        <th>name</th>
        <th>hight</th>
        <th>weight</th>
        <th>colour</th>
        <th>price</th>
        <th>image</th>

        
        </tr>";
        ?>


     <tr>
        
        

        <td><?php echo$row['g_id'];?></td>
        <td><?php echo$row['g_name'];?></td>
        <td><?php echo$row['g_hight'];?></td>
        <td><?php echo$row['g_weight'];?></td>
        <td><?php echo$row['g_colour'];?></td>
        <td><?php echo$row['g_price'];?></td>
        <td><?php $img=$row['g_image'];?></td>
        <td><iframe  src="uploads/<?php echo $img; ?>" height="200"  width="100%"> </iframe></td>
        <td><button><a href="order.php">by now</a></button></td>

        
    </tr>


        
<?php
    }
    
    echo  "</table>";
    print_r($row);


}


?>