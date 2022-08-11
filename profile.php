<html>
    <head>
    <link rel="stylesheet" href="styles/profile.css">
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
            <a href="order.php">  Orders</a>
            </div>
        </div>
    <div class="bro">
       <b> Profile</b>
    </div>
    <div>
        <img src="Links/Icons/male.png" class="img" > 
        <img src="Links/Icons/female.png" class="img">
        <img src="Links/Icons/next.png" onclick="plusDivs(-1)" class="left">
        <img src="Links/Icons/next.png" onclick="plusDivs(1)" class="right">
    </div>
    <script>
             var slideIndex = 2;

            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("img");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            
            x[slideIndex-1].style.display = "block"; 
            }

            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }
    </script>
    <form method="post" action="XXX" class="form">
        Username<br>
        <input type="text" name="username" class="user" placeholder="&nbsp;&nbsp;&nbsp;Username">
        <br><br>
        Mobile Number<br>
        <input type="tel" name="mobile" class="user" placeholder="&nbsp;&nbsp;&nbsp;Mobile Number" pattern="[0-9]{2}[0-9]{6}">
        <br><br> 

        Password<br>
        <input type="password" name="password" class="user" placeholder="&nbsp;&nbsp;&nbsp;Password">
        <br><br>
        <input type="submit" value="Edit" class="submit">
    </form>
    </body>
</html>