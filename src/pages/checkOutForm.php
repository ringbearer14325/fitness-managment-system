<!doctype html>
<html lang="en">
<include "header.html"></include>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Style sheet-->
    <link href="src\css\checkOut.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="row">
<div class="container">
<form action="/action_page.php">
    <div class="row">
    <div class="col-50">
    <h3>Billing Address</h3>
    <label for="fname"><i class="fa fa-user"></i> Full name</label>
    <input type="text" id="fname" name="firstname" placeholder="Daniel Ramos">

    <label for="email"><i class="fa fa-envelope"></i> Email</label>
    <input type="text" id="email" name="email" placeholder="danielramos1981@gmail.com">

    <label for="adr"><i class="fa fa-address-card"></i> Address</label>
    <input type="text" id="adr" name="address" placeholder="123 West 15th street">

    <label for="city"><i class="fa fa-city"></i> City</label>
    <input type="text" id="city" name="city" placeholder="New York">
    </div>
    </div>
    <div class="row">
        <div class="col-50">
          <label for="state">State</label>
          <input type="text" id="state" name="state" placeholder="NY">
        </div>
        <div class="col-50">
          <label for="zip">Zip</label>
          <input type="text" id="zip" name="zip" placeholder="10001">
        </div>
    </div>    
    <h2>Shipping address is the same as billing</h2>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Continue to checkout</button>

    <!-- <div id="paymentBar">
    <div class="container">
        <h2>Make a payment</h2>
        <div>Payment methods include Paypal or Credit card.</div>
        <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
    <button type="button" class="btn btn-primary">Pay</button>
    <?php <button>"button"</button> if (isset("button") == true ) ) ?>
    </div>
</div>  -->
</form>
</div>
</div>
</body>
<include "footer.html"></include>
</html>
