<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
.error {color: #FF0000;}
</style>
  </head>

  <body>
    
<?php
// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = $confirmPasswordErr = $genderErr = $dobErr = "";
$name = $email = $username = $password = $confirmPassword = $gender = $dob = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {   
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}
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
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if password is at least 8 characters long and contains at least one letter and one number
    if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$password)) {
      $passwordErr = "Password must be at least 8 characters long and contain at least one letter and one number";
    }
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["confirm_password"])) {
    $confirmPasswordErr = "Confirm Password is required";
  } else {
    $confirmPassword = test_input($_POST["confirm_password"]);
    // check if confirm password matches password
    if ($confirmPassword != $password) {
      $confirmPasswordErr = "Passwords do not match";
    }
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["dob"])) {
    $dobErr = "Date of Birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
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
  <div class="logo-container">
    <img src="x.png" alt="" />
    <h1>Company</h1>
  </div>
      <div class="nav-links">
        <a href="index.html">Home</a> | <a href="about.html">Login</a> |
        <a href="contact.html">Registration</a>
      </div>
    </nav>
    <main>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h2>Registration</h2>
        <div class="form-row">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" value="<?php echo $name; ?>" />
          <span class="error"><?php echo $nameErr; ?></span>
        </div>
        <div class="form-row">
          <label for="email">Email</label>
          <input type="email" id="email" name="email"  value= "<?php echo $email; ?>" />
          <span class="error"><?php echo $emailErr; ?></span>
        </div>
        <div class="form-row">
          <label for="username">Username</label>
          <input type="text" id="username" name="username"  value= "<?php echo $username; ?>" />
          <span class="error"><?php echo $usernameErr; ?></span>
        </div>
        <div class="form-row">
          <label for="password">Password</label>
          <input type="password" id="password" name="password"  value= "<?php echo $password; ?>" />
          <span class="error"><?php echo $passwordErr; ?></span>
        </div>
        <div class="form-row">
          <label for="confirm_password">Confirm Password</label>
          <input
            type="password"
            id="confirm_password"
            name="confirm_password"
            value= "<?php echo $confirmPassword; ?>"
          />
          <span class="error"><?php echo $confirmPasswordErr; ?></span>
        </div>
        <div class="form-row">
          <label for="gender">Gender</label>
          <input type="radio" id="male" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?> />
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?> />
          <label for="female">Female</label>
          <input type="radio" id="other" name="gender" value="other" <?php if (isset($gender) && $gender=="other") echo "checked";?> />
          <label for="other">Other</label>
          <span class="error"><?php echo $genderErr; ?></span>
        </div>
        <div class="form-row">
          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" />
          <span class="error"><?php echo $dobErr; ?></span>
        </div>
        <div class="form-row">
          <button type="submit">Register</button>
          <button type="reset">Reset</button>
        </div>
      </form>
    </main>
    <footer>
      <div>
        <p>Copyright &copy; 2017</p>
      </div>
    </footer>
  </body>
</html>
