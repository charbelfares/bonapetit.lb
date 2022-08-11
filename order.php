<html>
    <head>
    <link rel="stylesheet" href="styles/order.css">
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
        <img src="Links/Icons/sabiye.png" class="sabiye">
        <form class="order">
            <p class="bento">Bento Cake</p><br>
            <span class="fillings">Fillings</span>
            <div class="container">
                <span class="fraise"><img src="Links/Icons/fraise.png">Strawberry</span>
                <span class="fraise"><img src="Links/Icons/vanille.png">Vanille</span>
                <span class="fraise"><img src="Links/Icons/nutella.png">Nutella</span>
                <span class="fraise"><img src="Links/Icons/lemon.png">Lemon</span>
                <span class="fraise"><img src="Links/Icons/chocolate.png">Chocolate</span>
            </div><br><br>
            <span class="fillings">Flavors</span>
            <div class="container">
                <span class="fraise"><img src="Links/Icons/chocolate.png"><br>Chocolate</span>
                <span class="fraise"><img src="Links/Icons/vanille.png"><br>&nbsp;&nbsp;&nbsp;Vanille</span>
            </div><br><br>
            <span class="fillings">Design</span><br><br>
            <label for="inputs" class="input">
            <input type="file" value="Upload Image" id="inputt">
            </label>

        </form>
    </body>
</html>