<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thanks, Visit Again!</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    }

    p {
      margin-bottom: 20px;
    }

    .text-muted {
      color: #6c757d; /* Gray */
    }

    .btn-primary {
      background-color: #007bff; /* Blue */
      border-color: #007bff; /* Blue */
    }

    .btn-primary:hover {
      background-color: #0056b3; /* Darker Blue on hover */
      border-color: #0056b3; /* Darker Blue on hover */
    }

    .btn-primary:focus {
      box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5); /* Slightly lighter Blue on focus */
    }
  </style>
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <h2 class="mb-4">Thanks for Visiting!</h2>
        <p>We appreciate your time and hope to see you again soon.</p>
        <p class="text-muted">For any inquiries, feel free to contact us.</p>
        <a href="home.php" class="btn btn-primary">Return to Homepage</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (place this at the end of the body to improve page load time) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
