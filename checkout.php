<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout E-books</title>
    <link rel="stylesheet" href="Components/CSS/checkout/checkoutStyle.css">
</head>

<body>
    <!--Start of Navigation Bar-->
    <div class="navbar">
        <a href = "index.php"><div class="logo">
            <img src="Components/icons/logo.png" alt="logo" width="64px">
        </div>
        </a>
        <div class="navtitle">
            <a href = "index.php?page=products" style = "text-decoration:none;"><h1>BOOK LIBRARY</h1></a>
        </div>
        
    </div>

    <!--End of Navigation Bar-->

    <!--Start of Order Details section-->
    <main>
    <form action="index.php?page=placeorder" method = "POST">
        <div class="form_container">
            <div class="order_container">
                <div class="order_details border_effect">
                        <h2>Delivery Details</h2>
                        <h4>Contact</h4>
                            <div class="contact_container">
                                <div class="name_container">
                                    <label for="customerName">Name</label>
                                    <input type="text" id="customerName" class="effect" placeholder="Name">
                                </div>
                                <div class="mobile_container">
                                    <label  for="customerMobile">Mobile No.</label>
                                    <select id="customerMobile" class="effect">
                                        <option value="">+94</option>
                                        <option value="">+23</option>
                                        <option value="">+42</option>
                                        <option value="">+32</option>
                                        <option value="">+65</option>
                                    </select>
                                    <input type="number" id="customerMobile" size="15" class="effect" placeholder="mobile">
                                </div>
                            </div>
                        <h4>Address</h4>
                            <div class="address_container">
                                <div class="shipaddr_container">
                                    <label for="shippingAddress">Shipping Address</label>
                                    <input type="text" id="shippingAddress" size="50" class="effect" placeholder="address">
                                </div>
                                <div class="zip_container">
                                    <label for="zipCode">Zip Code</label>
                                    <input type="number" id="zipCode" size="8" class="effect" placeholder="code" >
                                </div>
                                <div class="country_container">
                                    <label for="customerCountry">Country</label>
                                    <select id="customerCountry" class="effect">
                                        <option value="">Sri Lanka</option>
                                        <option value="">+23</option>
                                        <option value="">+42</option>
                                        <option value="">+94</option>
                                        <option value="">+65</option>
                                    </select>
                                </div>
                            </div>
    
                        <h2>Payment Methods</h2>
                        <div class="card-container">
                            <div class="card">
                                <label for="visa"></label>
                                <img src="Components/icons/visa.jpg" alt="visa_card" width="64px">
                                <input type="radio" id="visa" name="payment_card" value="visa" class="effect">
                            </div>
                            <div class="card">
                                <label for="master"></label>
                                <img src="Components/icons/master.jpg" alt="master_card" width="64px">
                                <input type="radio" id="master" name="payment_card" value="master" class="effect">
                            </div>
                            <div class="card">
                                <label for="am_express"></label>
                                <img src="Components/icons/am-express.jpg" alt="am_express_card" width="64px">
                                <input type="radio" id="am_express" name="payment_card" value="am_express" class="effect">
                            </div>
                            </div>
                            <div class="card_num_container">
                                <label for="cardNumber">Card Number</label>
                                <input type="number" id="cardNumber" size="20" class="effect" placeholder="card-number">
                            </div>
                            <div class="cvc_container">
                                <label for="cvc">CVC</label>
                                <input type="number" id="cvc" size="5" class="effect" placeholder="cvc">
                            </div>
                            <div class="promocode_container">
                                <label for="promotionCode">Promotion Code</label>
                                <input type="text" id="promotionCode" size="10" class="effect" placeholder="code" >
                            </div>
                        </div>
                <!--End of Order Details section-->
    
                
            </div>
    
        
    
            
            <a href="returnPolicy.html">See our return policy</a>
            
            <div class="deliveryTime">
                <span>Your Order will arrive within one week</span>
            </div>
    
            <div class="button-container">
                <div class="supportButtons">
                    <a href="Details.html">Customer Care</a>
                    <a href="Help.php">Help</a>
                </div>
                
                <div class="orderButtons">
                    <button id="cancelOrder" type = "reset">Cancel</button>
                    <button type="submit" id="placeOrder" onclick="">Confirm Order</button>
                
                </div>
            </div>
        </div>
    </form>
    </main>
    <link rel="stylesheet" href="Components/CSS/index/index_style.css">
    <?=template_footer()?>
</body>
</html>



