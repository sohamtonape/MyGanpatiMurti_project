<!DOCTYPE html>
<html>
    <head>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <title>Online Ganpati Saler Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#reg").validate({
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

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #007bff; /* Blue */
    }

    .form-group label {
      font-weight: bold;
      color: #343a40; /* Dark Gray */
    }

    .form-control {
      border-radius: 3px;
    }

    .btn-primary {
      background-color: #007bff; /* Blue */
      border-color: #007bff; /* Blue */
    }

    .btn-secondary {
      background-color: #6c757d; /* Gray */
      border-color: #6c757d; /* Gray */
    }

    .btn-primary,
    .btn-secondary {
      width: 150px;
    }

    /* Custom styling for the form */
    #place {
      background-color: #f0f0f0; /* Light Gray */
    }

    /* Styling for the form fields */
    input[type="text"],
    input[type="date"],
    select {
      border: 1px solid #ced4da; /* Gray */
      padding: 10px;
      width: 100%;
      margin-bottom: 15px;
    }

    /* Custom styling for the Submit and Reset buttons */
    .form-group input[type="submit"],
    .form-group input[type="reset"] {
      margin-top: 10px;
      font-size: 16px;
    }

    /* Styling for the error messages (if you use them) */
    .error-message {
      color: #dc3545; /* Red */
      font-size: 14px;
      margin-top: 5px;
    }
    /* CSS for the button */
button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff; /* Blue */
  color: #ffffff;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3; /* Darker Blue on hover */
}

/* CSS for the link inside the button */
button a {
  color: #ffffff;
  text-decoration: none;
}

button a:hover {
  color: #ffffff;
  text-decoration: none;
}
  </style>

    </head>
    <body>
        <center>
            <form id="reg" action="insert.php" method="POST">
                <img src="logo.png" width="10%" height="10%">
                <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Online Ganpati Saler Form</h2>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="" required>
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age" name="age" required>
          </div>
          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
          </div>
          <div class="form-group">
            <label for="place">Place</label>
            <select class="form-control" id="dropdown" name="dropdown" required>
              <option value="">Select a place</option>
              <option value="Pune">Pune</option>
              <option value="Solapur">Solapur</option>
              <option value="Goa">Goa</option>
              <!-- Add more options as needed -->
            </select>
          </div>
          <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" class="form-control" id="cont" name="cont" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="pass" name="pass" required>
          </div>
          <div class="form-group">
            <input type="reset" class="btn btn-secondary" value="Reset">
            <input type="submit" class="btn btn-primary" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (place this at the end of the body to improve page load time) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


                <button><a href="customer.php">For Customer</a></button>
                <!-- <button><a href="search.php">search</a></button> -->



            </form>
        </center>

    </body>
</html>