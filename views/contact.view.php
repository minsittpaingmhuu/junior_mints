<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Junior Mints | Contact</title>
    <link rel="icon" type="image/x-icon" href="src/img/favicon.ico">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">        
    <link rel="stylesheet" href="src/css/base.css">
    <link rel="stylesheet" href="src/css/main.css">               
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <script src="src/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="src/css/nav.css">
    
</head>
<body>
    <!-- <div id="preloader"></div>
    <script src="js/preloader.js"></script> -->
    <?php include 'partials/nav.php' ?>
    <div class="mainbg">
    <main1>
            
            <div class="title">Contact us</div>
            <?php 
                if($_GET['error']=="none"){
                    echo '<div class="title-info alert alert-success">We have recieved your submission. Thanks for making Contact with us</div>';
                }
            ?>
            <!-- <div class="title-info">We'll get back to you soon!</div> -->

            <form action="config/contact.php" method="POST" id="form" class="form">
            
                <div class="input-group">
                    <input type="text" name="name" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                
                <div class="input-group">
                    <input type="text" name="phone" id="phone" placeholder="09xxxxxxxxx">
                    <label for="phone">Phone Number</label>
                </div>

                <div class="input-group">
                    <input type="email" name="email" id="e-mail" placeholder="e-mail">
                    <label for="e-mail">E-mail</label>
                </div>

                <div class="textarea-group">
                    <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
                    <label for="message">Message</label>
                </div>
                <input type="hidden" name="submit" value="submit" >

                <div class="button-div">
                    <button onclick="click()">Send</button>
                </div>
            </form>
        </main1>
        <div class="container">
            <div class="row">
                <div class="col-md-4 icon">
                    <h4><i class="fa-solid fa-location-dot"></i></h4>
                    <h3>Address</h3>
                    <p>Parami Street, Hlaing Township, Yangon</p>
                </div>
                <div class="col-md-4 icon">
                    <h4><i class="fa-solid fa-location-dot"></i></h4>
                    <h3>Phone</h3>
                    <p>09-123456789<br>09-231455894</p>
                </div>
                <div class="col-md-4 icon">
                    <h4><i class="fa-solid fa-location-dot"></i></h4>
                    <h3>Email</h3>
                    <p>contact@juniormints.com</p>
                </div>
            </div>
            <div class="row">
                    <iframe class="ma" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.4044021488758!2d96.13270257488396!3d16.855878117899785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1936f625d4ba7%3A0x9676670831769962!2sUniversity%20of%20Information%20Technology(UIT)!5e0!3m2!1sen!2smm!4v1691982193374!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    
    <script>
        var click = _=>{
            document.querySelector("#form").submit();
        }
    </script>
    <?php include 'partials/footer.php'?>
</body>
</html>

