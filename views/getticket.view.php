<!DOCTYPE html>
<html lang="en">
<head>
    <title>Junior Mints | Get Ticket</title>
    <link rel="icon" type="image/x-icon" href="src/img/favicon.ico">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <script src="src/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/nav.css">
    <style>
      body{
        background-image: url("src/img/img1.png");
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
      }
      #h3{
      	font-size: 50px!important;
      }
    </style>
</head>
<body>
    <!-- <div id="preloader"></div> -->
    <!-- <script src="js/preloader.js"></script> -->
    <?php include 'partials/nav.php' ?>


    
    <div class="tab">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg">
          <?php
            if($_GET['error']=="none"){
              echo "<h3 class=\"center1 alert alert-success mb-3\">Your order have been successfully taken place !!</h3>";
            }elseif($_GET['error']=="fail"){
              echo "<h3 class=\"center1 alert alert-danger mb-3\">Your order Failed !!</h3>";
            }elseif($_GET['error']=="emptyinput"){
              echo "<h3 class=\"center1 alert alert-danger mb-3\">Please Fill all the fields with * !!</h3>";
            }
          ?>
          <h3 class="center1 mb-3" id="h3">Information about the matches</h3>
          </div>
        </div>
        <div class="row justify-content-md-center">
          
            <div class="tablinks btn btn-light border-radius-left col-3" onclick="dnt(event, 'FIFA')">FIFA football Cup</div>
            <div class="tablinks btn btn-light border-radius-none col-3" onclick="dnt(event, 'AYA')">AYA Bank Cup</div>
            <div class="tablinks btn btn-light border-radius-right col-3" onclick="dnt(event, 'NL')">National League</div>
          </div>
        </div>
      </div>
      
    </div>
    
    <div class="align center1">
      <div id="FIFA" class="tabcontent">
        <br>
        <h3>FIFA Football Cup</h3>
        <p>The match starts at 12:50, 9th August</p>
      </div>
      
      <div id="AYA" class="tabcontent">
        <br>
        <h3>AYA Bank Cup</h3>
        <p>The match starts at 15:00, 15th August</p>
      </div>
      
      <div id="NL" class="tabcontent">
        <br>
        <h3>National League</h3>
        <p>The match starts at 18:00, 20th August</p>
      </div>
    </div>

    <form action="/config/buyticket.php" id="orderForm" method="POST">
        <div class="row">
          <div class="form-group col-md-6">
            <label for="inputName" class="form-label">Your Name*</label>
            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
          </div>

          <div class="form-group col-md-6 mb-3">
            <label for="inputPhone"  class="form-label">Phone Number*</label>
            <input type="text" class="form-control" name="phoneNumber" id="inputPhone" placeholder="09788888888">
          </div>
        </div>
        
          <label for="inputEmail" class="form-label">Email*</label>
          <div class="input-group mb-3">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="user@user.com" aria-label="Recipient's username" aria-describedby="basic-addon2">
          </div>
        <div class="row">
          <div class="form-group col-md-5 mb-3">
          <label for="type" class="form-label">Choose the type seat*</label>
            <select class="form-select form-select" name="type" id="type" aria-label="Small select example">
              <option selected>Select A Seat</option>
              <option value="1">VIP Seat (20000-MMK)</option>
              <option value="2">Regular Seat (10000-MMK)</option>

            </select>
          </div>  
          <div class="form-group col-md-4 mb-3">
          <label for="payment" class="form-label">Choose the Payment*</label>
            <select class="form-select form-select" name="payment" id="payment" aria-label="Small select example" required>
              <option selected>Select Payment</option>
              <option value="0">Cash on Deli</option>
              <option value="1">Wave Pay</option>
              <option value="2">KBZ Pay</option>
              <option value="3">Take in</option>
            </select>
          </div> 

          <div class="form-group col-md-3 mb-3">
            <label for="inputNumber" class="form-label">Number of Tickets*</label>
            <input type="text" name="ticket" class="form-control" id="inputNumber" placeholder="1">
          </div>
          
          <div class="form-group mb-3">
            <label for="exampleFormControlTextarea1" class="mb-1">Leave a comment</label>
            <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3" placeholder="Leave a Suggestion" aria-describedby="msg"></textarea>
            <div id="msg" class="form-text">
              Feel free to leave us a message
            </div>
          </div>
        </div>
      </div>
      <div style="display:none" id="order" class="alert alert-secondary mb-4">
        <p>Pease check your information before you buy </p>
          <table class="table table-secondary">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Seat Type</th>
                <th scope="col">Number of Tickets</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row1"></th>
                <td id="seatType"></td>
                <td id="seatNum">0</td>
                <td id="seatPayment"></td>
                <td id="total">0</td>
              </tr>
              <tr>
                <th scope="row2"></th>
                <td colspan="3">TOTAL</td>
                <td id="seatTotal">0</td>
              </tr>
            </tbody>
          </table>
      </div>
      <div class="center">
        <input style="display:none" type="submit" id="submitButton" value="Submit" name="submit" class="form-control btn-light btn">
      </div>
    </form>


    <div class="container" >
        <div class="row center">
          <button type="button" id="orderButton" class="mx-3 col-md-5 btn-light aaa btn" onclick="checkVoucher()"> Check Your Order </button>
          <button type="button" id="confirmButton" class="mx-3 col-md-5 btn-light aaa btn" onclick="confirmVoucher()"> Confirm  </button>
        </div>
        </div>





    <br><br><br>
    <?php include "partials/footer.php" ?>
    <script src="src/js/getticket.js"></script>
</body>
</html>
