<html>
    <head>
    <link rel="stylesheet" href="styles/pickup-orders.css">
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
        <span class="title">
        <b>Order</b>
        </span>
        <span class="text">&nbsp;
        you can choose whether you want <br>
        your order to be delivered at your<br>
         doorstep or takeaway
        </span>
        <!-- <div class="footer">
                <img src="Links/Icons/sfenje.png" class="igicon"><span class="bonapetit">home baked with love</span>
                <img src="Links/Icons/ig.png" class="igicon"><span class="bonapetit">bonapetit.lb</span>
                <br>
                
                <img src="Links/Icons/mail.png" class="igicon"><span class="bonapet">bon.a.petit@outlook.com</span>
                <img src="Links/Icons/call.png" class="igicon"><span class="bonapet">+961 3 779651</span>
            </div> -->
            <div class="option">Options</div>
            <div class="option-under">* order three days ahead</div>
            <a href="delivery-order.php"><div class="delivery">&nbsp;&nbsp;Delivery</div></a><br>
            <div class="pickup">&nbsp;&nbsp;Pick up
                <br>
                <span class="places">Places</span><br>

                <form action="" style="margin-bottom: 15%;">

               
               
                <label for="zane" class="labels">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zane / Owner's House
                <input type="radio" value="zane" id="zane" name="places">
                <span class="checkmark"></span>
                </label>
                <br>

                <label for="Batroun" class="labels">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BAtroun / Mankouchet Merchak
                <input type="radio" value="Batroun" id="Batroun" name="places">
                <span class="checkmark"></span>
                </label>
                <br>

                <label for="Chekka" class="labels">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chekka* / Common Cafe 
                <input type="radio" value="Chekka" id="Chekka" name="places">
                <span class="checkmark"></span></label>
                <br>

                <label for="jbeil" class="labels">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jbeil* / Kordahi Center
                <input type="radio" value="Jbeil" id="jbeil" name="places">
                <span class="checkmark"></span></label>
                <br>
                <input type="submit" class="button" value="Checkout">
                </form>
                
                
                <div class="moula7aza">* Pickups fees from Chekka & Jbeil for an extra 15.000 L.L.</div>
                <br><br>
        </div>
    </body>
</html>