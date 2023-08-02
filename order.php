<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganpati Order Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#order").validate({
                rules:{
                    name:"required",
                    date:"required",
                    dropdown:"required",
                },
                    messages:{
                        name:"Please Enter Full Name",
                        date:"Please Select Date",
                        dropdown:"Please Select Your location",
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
            background-color: lightskyblue;
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

        h1 {
            color: #007bff; /* Blue */
        }

        p {
            color: #6c757d; /* Gray */
            margin-bottom: 30px;
        }

        input[type="text"], input[type="date"], select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ced4da; /* Gray */
            border-radius: 5px;
        }

        input[type="reset"], button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff; /* Blue */
            color: #ffffff;
            border: none;
            border-radius: 5px;
        }

        input[type="reset"]:hover, button[type="submit"]:hover {
            background-color: #0056b3; /* Darker Blue on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <form  id="order" action="insert5.php" method="POST">
                <h1>Ganpati Order Form</h1>
                <p><i><b>Enter Your Personal Details Below</b></i></p>
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="date" name="date" id="date" placeholder="Enter today's date">
                <select name="dropdown">
                    <option value="Solapur">Solapur</option>
                    <option value="Pune">Pune</option>
                    <option value="Goa">Goa</option>
                </select>
                <input type="reset" class="btn btn-secondary" value="Reset"><br></br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- <button><a href="customer.php">For Customer</a></button> -->
                <!-- <button><a href="search.php">search</a></button> -->
            </form>
        </center>
    </div>
    <!-- Bootstrap JS (place this at the end of the body to improve page load time) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>