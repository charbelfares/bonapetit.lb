<html>
    <head>
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <script src="inde.js"></script>
    </head>
    <body>
    <img src="Links/Icons/burger.png" class="burger" onclick="openForm()">
    <div id="myForm">
            <img src="Links\Icons\reject2.png" id="reject" onclick="closeForm()"><br>
            <div class="home">
              <a href ="index.php">  Home </a>
            </div>
            <div class="profile">
            <a href="register.php"> Profile </a>
            </div>
            <div class="designs">
            <a href ="designs.php">Designs</a>
            </div>
            <div class="orders">
            <a href="order.php"> Orders</a>
            </div>
        </div>
    <div class="bro">
        Register
    </div>
    <form method="post" action="XXX" class="form">
        Username<br>
        <input type="text" name="username" class="user" placeholder="&nbsp;&nbsp;&nbsp;Username">
        <br><br>
        Password<br>
        <input type="password" name="password" class="user" placeholder="&nbsp;&nbsp;&nbsp;Password">
        <br><br>
        Mobile Number<br>
        <input type="tel" name="mobile" class="user" placeholder="&nbsp;&nbsp;&nbsp;Mobile Number" pattern="[0-9]{2}[0-9]{6}">
        <br><br>
        <input type="submit" value="Sign Up" class="submit">
    </form><br><br><br><br><br><br>
    <div class="line1"></div> <div class="or">or</div>
    <div class="line2"></div>
    <div class="already">Already a User? <a href="login.php"><u>Login</u></a></div>
    </body>
</html>