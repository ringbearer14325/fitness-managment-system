<!doctype html>
<html lang="en">
<include>"header.html"</include>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>
<div id="memberBar">
<div class="container">
    <div class="row">
        <div class="col-sm">
            "First Name"
        </div>
        <div class="col-sm">
            "Last Name"
        </div>
        <div class="col-sm">
            "last login time"
        </div>
    </div>
</div>
</div>
<div id="paymentBar">
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
</div>
</body>
<include>"footer.html"</include>
</html>