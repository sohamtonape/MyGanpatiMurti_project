<!DOCTYPE html>
<html>
    <head>
    <title>Ganesha's Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#reg").validate({
                rules:{
                    name:"required",
                    hight:"required",
                    weight:"required",
                    colour:"required",
                    price:"required",
                    
                },
                    messages:{
                        name:"Please Enter Full Name",
                        hight:"Please Enter the hight",
                        weight:"Please Enter the weight",
                        colour:"Please Enter the colour",
                        price:{
                            required:"Please Enter the price",
                        },
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
      color: #6c757d; /* Gray */
      margin-bottom: 30px;
    }

    /* Custom styling for the form fields */
    .form-control {
      border-radius: 5px;
      border: 1px solid #ced4da; /* Gray */
      padding: 10px;
      width: 100%;
      margin-bottom: 15px;
    }

    /* Custom styling for the file input */
    .form-control-file {
      border: none;
    }

    /* Custom styling for the Submit button */
    .btn-primary {
      display: block;
      width: 100%;
      background-color: #007bff; /* Blue */
      border-color: #007bff; /* Blue */
    }
  </style>
    </head>
    <body>
        <center>
            
            
            <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1 class="text-center mb-4"><b>Ganesha's Details</b></h1>
        <p class="text-center"><i><b>Enter the Details below</b></i></p>
        <form id="reg" action="insert3.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="hight" name="hight" placeholder="Enter the height">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter the weight">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="colour" name="colour" placeholder="Enter the colour">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter the price">
          </div>
          <div class="form-group">
            <label for="g_image">Upload Image:</label>
            <input type="file" class="form-control-file" id="g_image" name="g_image">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

        </center>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
</html>