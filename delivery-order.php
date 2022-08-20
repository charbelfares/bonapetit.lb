<html>
    <head>
    <link rel="stylesheet" href="styles/deliver-order.css">
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
        <div class="option">Options</div>
            <div class="option-under">* order three days ahead</div>
            <div class="delivery-form"><br><br>
                <span class="title-under">Delivery</span>
            <form>
                <label for="fullname" class="font">
                    Full Name
                </label><br>
                <input type="text" class="input" name="fullname" placeholder="Full name">
                <br><br><br>
                <label for="mobile" class="font">
                    Mobile number
                </label><br>
                <input type="tel" class="input" name="mobile" placeholder="Mobile number">
                <br><br><br>
                <label for="Address" class="font">
                    Address
                </label><br>
                <input type="text" class="input" name="city" placeholder="City">
                <br><br><br>
                <input type="text" class="input" name="street" placeholder="Street">
                <br><br><br>
                <label for="date" class="font">Date</label>
                <select class="input">
                    <option disabled selected>Date</option>
                    <option>10/01/2022</option>
                    <option>01/10/2022</option>
                </select>
                <br><br><br><br><br><br>
                <input type="text" class="input1" name="info" placeholder="Note about your order, special notes for delivery">
            </form>
            </div>
    </body>
</html>