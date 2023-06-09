<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="css/stle.css" />
    <link
      rel="stylesheet"
      href="/icons/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <button class="humberger" onclick="showMeMenu()">menu</button>
    <div class="imgs">
      <img src="pictures/bglog.jpg" alt="" />
      <img src="pictures/bglog.jpg" alt="" />
    </div>
    <div class="container">
      <div>
        <div class="header">
          <h1>XCEPTIONAL TECH</h1>

          <div class="header-items">
            <i
              style="margin-left: 1rem; padding-right: 0; font-size: 35px"
              class="fa fa-globe"
              aria-hidden="true"
            ></i>
            <select name="language">
              <option value="English">En</option>
              <option value="English">French</option>
              <option value="English">Kinya</option>
              <option value="English">English</option>
            </select>
            <a href="html_codes/signUp.php" class="signup">sign up</a>
          </div>
          <div class="header-items2">
            <i
              style="margin-left: 1rem; padding-right: 0; font-size: 35px"
              class="fa fa-globe"
              aria-hidden="true"
            ></i>
            <select name="language">
              <option value="English">En</option>
              <option value="English">French</option>
              <option value="English">Kinya</option>
              <option value="English">English</option>
            </select>
            <a href="/html_codes/signUp.html" class="signup">sign up</a>
          </div>
        </div>
        <div class="form">
          <h3>Already have an account?</h3>
          <form action="html_codes/home.php" method="get">
            <input type="text" class="input" placeholder="User name" />
            <input type="password" class="input" placeholder="Password" />
            <input type="submit" class="login" value="Login" />
            <a href="html_codes/reset.php">forgot your password?</a>
          </form>
        </div>
      </div>
    </div>
    <div id="root">
      <p></p>
    </div>
  </body>

  <script src="/script.js"></script>
</html>
