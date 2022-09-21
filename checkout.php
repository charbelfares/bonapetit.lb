<html>
    <head>
    <link rel="stylesheet" href="styles/checkout.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <script src="inde.js"></script>
    </head>
    <body>
    <button onclick="history.back()" class="arrow"><img src="Links/Icons/left.png"></button>
    <img src="Links/Icons/burger.png" class="burger" onclick="openForm()">
    <div id="myForm">
            <img src="Links\Icons\reject2.png" id="reject" onclick="closeForm()"><br>
            <div class="home">
                Home
            </div>
            <div class="profile">
               <a href="register.php"> Profile </a>
            </div>
            <div class="designs">
                <a href ="designs.php">Designs</a>
            </div>
            <div class="orders">
               <a href="order.php"> Orders </a>
            </div>  
        </div>
        <span class="title">Checkout</span>

            <div class="your">Your Order</div><br>
            <div class="product"><b>Product</b></div>
            <div class="line"></div>
            <div class="cake">Bento Cake &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <b>USD05</b>
            </div>
            <div class="line1"></div>
            <div class="product1"><b>Filling & Flavor</b></div>
            <div class="line2"></div>
            <div class="cake1"> Strawberry, Vanilla
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
             
            <b>USD00</b>
            </div>
            <div class="line3"></div>
            <div class="product1"><b>Subtotal</b>
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
            <b>USD05</b>
            </div>
            <div class="line4"></div><br><br>
            <div class="product1"><b>Shipping</b>
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
            <b>USD01</b>
            </div>
            <div class="line5"></div><br><br>
            <div class="product1"><b>Total</b>
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp &nbsp
            <b>USD06</b></div>
            <div class="line5"></div><br><br>
            <span class="note">* can be paid in USD or LBP (market rate)</span>
            <br><br>
            <span class="cash">Cash on Delivery</span><br><br><br>
            <div class="line5"></div>
            <span class="cash1">Pay with cash upon delivery.</span>

            <span><input type="submit" class="button" value="Complete Order"></span>
    </body>
</html>