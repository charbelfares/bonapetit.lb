<html>
    <head>
    <link rel="stylesheet" href="styles/order.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <script src="inde.js"></script>
    <?php 
         ini_set('display_errors',0);
         include"database.php";
         $db=connect();
         $qry = mysqli_query($db,"SELECT * FROM fillings");
         $data1=mysqli_fetch_assoc($qry);
         $data2=mysqli_fetch_assoc($qry);
         $data3=mysqli_fetch_assoc($qry);
         $data4=mysqli_fetch_assoc($qry);
         $data5=mysqli_fetch_assoc($qry);

         $qry1 = mysqli_query($db,"SELECT * FROM flavores");
         $data6=mysqli_fetch_assoc($qry1);
         $data7=mysqli_fetch_assoc($qry1);


    ?>
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
                <span class="fraise" onclick=""><?php echo $data1['Image']; ?><?php echo $data1['Flavore']; ?></span>
                <span class="fraise"><?php echo $data2['Image']; ?>&nbsp;&nbsp;&nbsp;<?php echo $data2['Flavore']; ?></span>
                <span class="fraise"><?php echo $data3['Image']; ?>&nbsp;&nbsp;<?php echo $data3['Flavore']; ?></span>
                <span class="fraise"><?php echo $data4['Image']; ?>&nbsp;&nbsp;&nbsp;<?php echo $data4['Flavore']; ?></span>
                <span class="fraise"><?php echo $data5['Image']; ?><?php echo $data5['Flavore']; ?></span>
            </div><br><br>
            <span class="fillings">Flavors</span>
            <div class="container">
                <span class="fraise"><?php echo $data6['Image']; ?><br><?php echo $data6['Flavore']; ?></span>
                <span class="fraise"><?php echo $data7['Image']; ?><br>&nbsp;&nbsp;&nbsp;<?php echo $data7['Flavore']; ?></span>
            </div><br><br>
            <span class="fillings">Design</span><br><br>
            <label for="inputt" class="input">
                <img src="Links/Icons/upload.png" style="margin-top:3%;">
            <input type="file" value="Upload Image" id="inputt"/>
            </label>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <span class="fillings">Comments</span><br>
            <input type="textarea" placeholder="Add extra features for your design"><br><br><br><br>

            <input type="button" value="Next &#8594;" class="buton">

        </form>
    </body>
</html>