<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Body Styling */
    body {
      background-color: #f6d365;
      background-image: linear-gradient(315deg, #f6d365 0%, #fda085 74%);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Form Container Styling */
    .registration-form {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      padding: 60px;
      max-width: 1000px;
      width: 100%;
    }

    /* Form Header Styling */
    .registration-form h3 {
      text-align: center;
      margin-bottom: 50px;
      font-weight: bold;
    }

    /* Input Field Styling */
    .form-control {
      border-radius: 5px;
      border: 1px solid #ced4da;
      box-shadow: none;
      font-size: 14px;
    }

    .form-control:focus {
      border-color: #f6d365;
      box-shadow: none;
    }

    /* Gender Radio Button Styling */
    .custom-control-label {
      font-weight: normal;
    }

    /* Register Button Styling */
    .btn-primary {
      background-color: #fda085;
      border-color: #fda085;
      color: white;
      font-weight: bold;
      border-radius: 30px;
      padding: 10px;
      width: 100%;
    }

    .btn-primary:hover {
      background-color: #f6d365;
      border-color: #f6d365;
    }

    /* Fine-tuning spacing */
    .form-group {
      margin-bottom: 20px;
    }
    .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    /* Responsive design for smaller screens */
    @media (max-width: 768px) {
      .form-row .form-group {
        margin-bottom: 15px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="registration-form">
      <h3>Registration</h3>
      <form method="POST" action="register.php"></form>
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter your name">
          </div>
          <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter your username">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group col-md-6">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter your number">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
          </div>
          <div class="form-group col-md-6">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password">
          </div>
        </div>

        <div class="form-group">
          <label for="gender">Gender</label>
          <div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="male" name="gender" class="custom-control-input">
              <label class="custom-control-label" for="male">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="female" name="gender" class="custom-control-input">
              <label class="custom-control-label" for="female">Female</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="notSay" name="gender" class="custom-control-input">
              <label class="custom-control-label" for="notSay">Prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="login-link">
          <p>Already have an account? <a href="logins.php">Login Now</a></p>

        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
