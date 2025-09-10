<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password | Lab</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
      .dashboard-layout {
        display: flex;
        max-width: 700px;
        margin: 40px auto 0 auto;
        background: #fff;
        border: none;
        min-height: 320px;
      }
      .account-bar {
        width: 180px;
        border-right: 2px solid #444;
        padding: 32px 0 32px 0;
        background: #f9f9f9;
        display: flex;
        flex-direction: column;
        align-items: stretch;
      }
      .account-bar button {
        background: #fff;
        color: #222;
        border: 1px solid #444;
        padding: 8px 12px;
        border-radius: 2px;
        font-family: "Times New Roman", Times, serif;
        font-size: 1em;
        margin: 8px 16px;
        cursor: pointer;
        box-shadow: none;
        transition: background 0.2s;
        text-align: left;
      }
      .account-bar button:hover {
        background: #eee;
      }
      .dashboard-content {
        flex: 1;
        padding: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .change-pass-form {
        width: 100%;
        max-width: 340px;
        border: 2px solid #444;
        padding: 24px 24px 16px 24px;
        background: #fff;
        font-family: "Times New Roman", Times, serif;
      }
      .change-pass-form legend {
        font-weight: bold;
        font-size: 1.1em;
        color: #222;
      }
      .form-row {
        margin-bottom: 14px;
        display: flex;
        align-items: center;
      }
      .form-row label {
        width: 120px;
        font-size: 1em;
        color: #222;
      }
      .form-row input[type="password"] {
        flex: 1;
        padding: 4px 8px;
        border: 1px solid #444;
        font-size: 1em;
        font-family: "Times New Roman", Times, serif;
        margin-left: 12px;
        box-sizing: border-box;
      }
      .form-row button[type="submit"] {
        background: #fff;
        color: #222;
        border: 1px solid #444;
        padding: 4px 18px;
        border-radius: 2px;
        font-family: "Times New Roman", Times, serif;
        font-size: 1em;
        cursor: pointer;
        box-shadow: none;
        transition: background 0.2s;
      }
      .form-row button[type="submit"]:hover {
        background: #eee;
      }
    </style>
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
        <h1>Change Password</h1>
      </header>
      <div class="dashboard-layout">
        <div class="account-bar">
          <button type="button">Dashboard</button>
          <button type="button">View Profile</button>
          <button type="button">Edit Profile</button>
          <button type="button">Change Profile Pic</button>
          <button type="button">Change Pass</button>
          <button type="button">Logout</button>
        </div>
        <div class="dashboard-content">
          <form class="change-pass-form" action="chngpass.html" method="POST">
            <fieldset>
              <legend>Change Password</legend>
              <div class="form-row">
                <label for="newpass">New Password:</label>
                <input type="password" id="newpass" name="newpass" required />
              </div>
              <div class="form-row">
                <label for="retypepass">Retype Password:</label>
                <input
                  type="password"
                  id="retypepass"
                  name="retypepass"
                  required
                />
              </div>
              <div class="form-row">
                <button type="submit">Submit</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <footer>Copyright &copy; 2017</footer>
  </body>
</html>
