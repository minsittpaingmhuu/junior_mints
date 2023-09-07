<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Junior Mints | Shop</title>
    <link rel="icon" type="image/x-icon" href="src/img/favicon.ico">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/nav.css">
    <script src="src/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="src/css/shop.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!--Navbar-->
    <?php include 'partials/nav.php' ?>
    
    <form action="config/shop.php" method="POST">
    <header>
        <!--Nav-->
        <div class="nav container">
            <!--logo-->
            <a href="#" class="logo">Junior Mints</a>
            <div class="cart">
                
                <h2 class="cart-title">
                    <br><br>
                    Your Cart<i class="bx bx-x" id="close-cart"></i>
                </h2>
                <!--content-->
                <div class="cart-content">
                
                    <div class="cart-box">
                        <img style="display:none;" src="src/img/logo.png" alt="" class="cart-img" />
                        <div class="detail-box " style="display:none;">
                            <div class="cart-product-title">Enjoy our Shop?</div>
                            <div class="cart-price">$0</div>
                            <input type="text" readonly value="1" class="cart-quantity" />
                            </div>
                            
                            <i style="display:none;" class="bx bx-trash-alt cart-remove"></i>
                    </div>
                </div>
                <!--Total-->
                
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">$0</div>
                    
                </div>
                <!--Buy Button-->
                <input type="hidden" name="id" value=<?php echo $_SESSION['username']; ?>>
                <button type="submit" name="submit" value="submit" class="btn-buy">Pay Now</button>
                <!--Close cart-->
                
                <br>
            </div>
        </div>
    </header>
    </form>


    <!--Products-->
    <section class="shop container">
        <?php if($_GET['error']=="none"){?>
            <div class="alert alert-success">Order Completed</div>
        <?php }?>
        <h2 class="section-title">Shop Products <i class="bx bx-shopping-bag" id="cart-icon"></i></li></h2><span class="section-title">Prices are in Myanmar Kyats</span>
        <!--Shop Content-->
        <div class="shop-content">
            <!--Box 1-->
            <div class="product-box">
                <img src="src/img/awaykit.png" class="product-img" />
                <h2 class="product-title">AwayKit</h2>
                <span class="price">$15000</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!--Box 2-->
            <div class="product-box">
                <img src="src/img/homekit.png" class="product-img" />
                <h2 class="product-title">HomeKit</h2>
                <span class="price">$15000</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!--Box 3-->
            <div class="product-box">
                <img src="src/img/scarf.png" class="product-img" />
                <h2 class="product-title">TeamScarf</h2>
                <span class="price">$7000</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!--Box 4-->
            <div class="product-box">
                <img src="src/img/mug.png" class="product-img" />
                <h2 class="product-title">TeamMug</h2>
                <span class="price">$5000</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <!--Box 5-->
            <div class="product-box">
                <img src="src/img/cover.png" class="product-img" />
                <h2 class="product-title">PhoneCover</h2>
                <span class="price">$3000</span>
                <i class="bx bx-shopping-bag add-cart"></i>
            </div>
        </div>
    </section>
    <script src="src/js/main.js"></script>
    <?php include 'views/partials/footer.php'?>
</body>

</html>