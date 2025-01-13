<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration System PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .btn-booking {
      float: right;
      margin-top: -30px;
      background-color: #4CAF50; /* Green */
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      border-radius: 5px;
      font-size: 14px;
    }

    .btn-booking:hover {
      background-color: #45a049;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="header">
    <h2>Login</h2>
    <a href="booking.php" class="btn-booking">Booking</a>
  </div>
  
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>
