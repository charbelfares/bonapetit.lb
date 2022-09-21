<html>
    <head>
    <link rel="stylesheet" href="styles/orders.css">
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
            &nbsp;<select name="fillingsId" class="inputt">
                <option disabled selected>Fillings</option>
                <option value="1">Strawberry</option>
                <option value="2">Vanille</option>
                <option value="3">Nutella</option>
                <option value="4">Chocolate</option>
            </select>
            <br><br><br><br><br><br><br>
            <span class="fillings">Flavors</span>
            <select name ="flavorsId"class="inputt">
                
                <option disabled selected>Flavors</option>
                <option value="1">Chocolate</option>
                <option value="2">Vanille</option>
            </select>

            <br><br><br><br><br><br><br>
            <span class="fillings">Design</span><br><br>
            <label for="inputt" class="input">
                <img src="Links/Icons/upload.png" style="margin-top:3%;">
            <input type="file" value="Upload Image" id="inputt" name="image /">
            </label>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <span class="fillings">Comments</span><br>
            <input type="textarea" placeholder="Add extra features for your design" name="text"><br><br><br><br>
            <input type="submit" value="next" class="buton" name="next">
            <?php
                require_once"database.php";
                $db=connect();
                ini_set('display_errors',0);
                $fillings=$_POST['fillingsId'];
                $flavors=$_POST['flavorsId'];
                $text=$_POST['text'];

                
                if(isset($_POST['next'])){// when click on Update button
                    echo "Hello world!<br>";
                mysqli_query($db,"INSERT INTO `cart` (`Fillings`, `Flavore`, `img`, `Text`) VALUES ('$fillings;', '$flavors;', '', '$text;'); ");
                }
                
                    ?>

</form>       
    </body>
</html>