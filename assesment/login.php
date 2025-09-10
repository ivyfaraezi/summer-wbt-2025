<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Lab</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
.error {color: #FF0000;}
</style>
  </head>
  <body>
    <?php
// define variables and set to empty values
$usernameErr = $passwordErr =$predefined_usernameErr = $predefined_passwordErr = "";
$username = $password = $predefined_username = $predefined_password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters, numbers, underscores, hyphens, and periods
    if (!preg_match("/^[a-zA-Z0-9._-]*$/",$username)) {
      $usernameErr = "Only letters, numbers, underscores, hyphens, and periods allowed";
    }
  }
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if password is at least 8 characters long and contains at least one letter and one number
    if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[
A-Za-z\d]{8,}$/",$password)) {
      $passwordErr = "Password must be at least 8 characters long and contain at least one letter and one number";
    }
  }
  $predefined_username = "user123";
  $predefined_password = "1234";
  if ($usernameErr == "" && $passwordErr == "") {
    if ($username === $predefined_username && $password === $predefined_password) {
      // Successful login
      echo "<script>alert('Login successful!');</script>";
    } else {
      // Invalid credentials
      echo "<script>alert('Invalid username or password.');</script>";
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <nav class="navbar">
      <span class="logo">
        <img src="x.png" alt="X Company Logo" />
        <span>X Company</span>
      </span>
      <a href="public-home.html">Home</a>
      <a href="login.html">Login</a>
      <a href="registration.html">Registration</a>
    </nav>
    <div class="container">
      <header>
        <h1>Login</h1>
      </header>
      <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <fieldset>
          <legend>Login</legend>
          <div class="form-row">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $username; ?>" />
            <span class="error"><?php echo $usernameErr; ?></span>
          </div>
          <div class="form-row">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>" />
            <span class="error"><?php echo $passwordErr; ?></span>
          </div>
          <div class="form-row">
            <input type="checkbox" id="remember" name="remember" />
            <label for="remember" style="width: auto; margin-left: 4px"
              >Remember Me</label
            >
          </div>
          <div class="form-row">
            <button type="submit">Submit</button>
            <button
              type="button"
              onclick="location.href='forgot-password.html'"
            >
              Forgot Password
            </button>
          </div>
        </fieldset>
      </form>
    </div>
    <footer>Copyright &copy; 2017</footer>
  </body>
</html>
