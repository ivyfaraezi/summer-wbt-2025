<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | Lab</title>
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
        font-size: 1.3em;
        font-family: "Times New Roman", Times, serif;
        color: #222;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <nav class="navbar">
      <span class="logo">
        <img src="x.png" alt="X Company Logo" />
        <span>X Company</span>
      </span>
      <span
        style="
          margin-left: 24px;
          font-size: 1em;
          color: #222;
          font-family: 'Times New Roman', Times, serif;
        "
        >Logged in as Bob</span
      >
      <button
        type="button"
        onclick="location.href='login.html'"
        style="
          margin-left: 16px;
          color: #222;
          background: #fff;
          border: 1px solid #444;
          padding: 4px 18px;
          border-radius: 2px;
          font-family: 'Times New Roman', Times, serif;
          font-size: 1em;
          cursor: pointer;
        "
      >
        Logout
      </button>
    </nav>
    <div class="container">
      <header>
        <h1>Dashboard</h1>
      </header>
      <form class="dashboard-form">
        <fieldset>
          <legend>Dashboard</legend>
          <div class="dashboard-layout">
            <div class="account-bar">
              <button type="button">Dashboard</button>
              <button type="button">View Profile</button>
              <button type="button">Edit Profile</button>
              <button type="button">Change Profile Pic</button>
              <button type="button">Change Pass</button>
              <button type="button">Logout</button>
            </div>
            <div class="dashboard-content">Welcome Bob</div>
          </div>
        </fieldset>
      </form>
    </div>
    <footer>Copyright &copy; 2017</footer>
  </body>
</html>
