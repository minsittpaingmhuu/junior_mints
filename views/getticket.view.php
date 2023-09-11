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
        <div class="row justify-content-md-center mb-3">
          
        <div class="tablinks rounded-pill btn btn-light col-3" onclick="dnt (event, 'M1')">Match 1</div>
          <div class="tablinks rounded-pill btn btn-light col-3" onclick="dnt (event, 'M2')">Match 2</div>
          <div class="tablinks rounded-pill btn btn-light col-3" onclick="dnt (event, 'M3')">Match 3</div>
          <div class="tablinks rounded-pill btn btn-light col-3" onclick="dnt (event, 'M4')">Match 4</div>
          </div>
        </div>
      </div>
      
    </div>
    
    <div class="align center1">
    <div id="M1" class="tabcontent"><br>
        <h3>Junior Mint     VS      Slime</h3>
        <p>Date     : 1st September</p>
        <p>Time     : 3:00 pm</p>
        <p>Location : Aung San Stadium</p>
      </div>
      
      <div id="M2" class="tabcontent"><br>
        <h3>Junior Mint     VS      Team Liquid</h3>
        <p>Date     : 3rd September</p>
        <p>Time     : 4:00 pm</p>
        <p>Location : YUSC Stadium</p>
      </div>
      
      <div id="M3" class="tabcontent"><br>
        <h3>Junior Mint     VS      Apex</h3>
        <p>Date     : 6th September</p>
        <p>Time     : 3:30 pm</p>
        <p>Location : Aung San Stadium</p>
      </div>

      <div id="M4" class="tabcontent"><br>
        <h3>Junior Mint     VS      Ctrl kick</h3>
        <p>Date     : 8th September</p>
        <p>Time     : 4:00 pm</p>
        <p>Location : Kyite-Ka-San Footabll Stadium</p>
      </div>
    </div>

    <form action="/config/buyticket.php" id="orderForm" method="POST">
        <div class="row">
          <div class="form-group col-md-6">
            <label for="inputName" class="form-label">Your Name*</label>
            <input type="text" name="name" class="form-control" id="inputName" required placeholder="Name">
          </div>

          <div class="form-group col-md-6 mb-3">
            <label for="inputPhone"  class="form-label">Phone Number*</label>
            <input type="text" class="form-control" name="phoneNumber" pattern="[0][9][0-9]{9}" id="inputPhone" placeholder="09-XXX XXX XXX" required>
          </div>
        </div>
        
          <div class="row">
            <div class="form-group col-md-6 mb-3">
              <label for="inputEmail" class="form-label">Email*</label>
              <div class="input-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="user@user.com" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="matchSelect" class="form-label">Choose A Match</label>
              <select class="form-select form-select" name="matchSelect" aria-label="Small select example" onchange="showAmt()" onclick="calculateTotal()" required>
                <option selected>Select your Match</option>
                <option value="M1">Junior Mint VS Slime</option>
                <option value="M2">Junior Mint VS Team Liquid</option>
                <option value="M3">Junior Mint VS Apex</option>
                <option value="M4">Junior Mint VS Ctrl kick</option>
              </select>
            </div>
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
            <input type="number" name="ticket" class="form-control" id="inputNumber" pattern="[0-9]{1}" placeholder="1" required>
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
