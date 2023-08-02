<!DOCTYPE html>
<html>
    <head>
    <title>Ganpati Customer Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#customer").validate({
                rules:{
                    name:"required",
                    age:"required",
                    date:"required",
                    dropdown:"required",
                    cont:{
                        required:true,
                        minlength:10,
                        number:true
                    },
                    pass:"required",
                },
                    messages:{
                        name:"Please Enter Full Name",
                        age:"Please Enter Your Age",
                        date:"Please Select Date",
                        dropdown:"Please Select Your location",
                        cont:{
                            required:"Please Enter contact",
                            minlength:"Contact should be 10 digit",
                            number:"Please Enter Valid Number"
                        },
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

    h1 {
      text-align: center;
      color: #007bff; /* Blue */
      margin-bottom: 20px;
    }

    p {
      text-align: center;
      margin-bottom: 30px;
      color: #6c757d; /* Gray */
    }

    .form-control {
      border-radius: 5px;
      border: 1px solid #ced4da; /* Gray */
      padding: 10px;
      margin-bottom: 15px;
    }

    .form-control:focus {
      border-color: #80bdff; /* Light Blue on focus */
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Lighter Blue on focus */
    }

    select.form-control {
      -webkit-appearance: none; /* Remove default select arrow in Safari */
      -moz-appearance: none; /* Remove default select arrow in Firefox */
      appearance: none; /* Remove default select arrow in other browsers */
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Cpath fill='%236c757d' d='M1.25 0L0 2h8L6.75 0h-5.5zM3 8l3-4H0l3 4z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 8px 8px;
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

    .btn-primary:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); /* Lighter Blue on focus */
    }
  </style>
    </head>
    <body>
        <center>
            <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1 class="text-center">Ganpati Customer Form</h1>
        <p class="text-center"><i><b>Enter Your Personal Details Below</b></i></p>
        <form id="customer" action="insert4.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="age" name="age" placeholder="Enter your age">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="date" name="date" placeholder="Enter today's date">
          </div>
          <div class="form-group">
            <select class="form-control" id="dropdown" name="dropdown">
              <option value="Solapur">Solapur</option>
              <option value="Pune">Pune</option>
              <option value="Goa">Goa</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="cont" name="cont" placeholder="Enter your contact">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter the password">
          </div>
          <div class="text-center">
            <input type="reset" class="btn btn-secondary" value="Reset">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (place this at the end of the body to improve page load time) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
                <!-- <button><a href="form.php">Form</a></button>
                <button><a href="search.php">search</a></button> -->



            
        </center>

    </body>
</html>