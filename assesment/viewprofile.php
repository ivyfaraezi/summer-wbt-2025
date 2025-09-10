<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Profile | Lab</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
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
        <h1>View Profile</h1>
      </header>
      <form class="profile-form">
        <fieldset>
          <legend>Profile</legend>
          <div class="form-row">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="Bob" readonly />
          </div>
          <div class="form-row">
            <label for="email">Email:</label>
            <input
              type="email"
              id="email"
              name="email"
              value="bob@example.com"
              readonly
            />
          </div>
          <div class="form-row">
            <label for="gender">Gender:</label>
            <input
              type="text"
              id="gender"
              name="gender"
              value="Male"
              readonly
            />
          </div>
          <div class="form-row">
            <label for="dob">Date of Birth:</label>
            <input
              type="text"
              id="dob"
              name="dob"
              value="2000-01-01"
              readonly
            />
          </div>
          <div class="form-row">
            <button type="button" onclick="location.href='editprofile.html'">
              Edit Profile
            </button>
          </div>
        </fieldset>
      </form>
    </div>
    <footer>Copyright &copy; 2017</footer>
  </body>
</html>
