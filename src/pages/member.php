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
    <!-- style sheet-->
    <link href="src\css\member.css" rel="stylesheet" type="text/css">        
    <title>Member</title>
</head>
<body>
<div id="memberBar">
<div class="container">
<form>
    <div class="row">
    <div class="col-50">
    <h3>New Registration</h3>
    <label for="name"><i class="fa fa-user"></i>Full name</label>
        <input type="text" id="name" name="name" placeholder="Daniel Ramos">
    <label for="adr"><i class="fa fa-address-card"></i>Address</label>
        <input type="text" id="adr" name="address" placeholder="123 West 15th street">
    <label for="city"><i class="fa fa-city"></i>City</label>
        <input type="text" id="city" name="city" placeholder="New York">
    <label for="zipcode"><i class="fa fa-zipcode"></i>Zip Code</label>
        <input type="number" id="zipcode" name="zipcode" placeholder="00954">
    <label for="state"><i class="fa fa-state"></i>State</label>
        <input type="text" id="state" name="state" placeholder="New York">    
    <label for="gender"><i class="fa fa-gender"></i>gender</label>
        <input type="text" id="gender" name="gender" placeholder="M">
    <label for="dateOfBirth"><i class="fa fa-dateOfBirth"></i>date of birth</label>
        <input type="date" id="dateOfBirth" name="dateOfBirth" placeholder="02/16/1981">
    <label for="email"><i class="fa fa-envelope"></i> Email</label>
        <input type="email" id="email" name="email" placeholder="danielramos1981@gmail.com">
    <label for="joiningDate"><i class="fa fa-joiningDate"></i>Joining Date</label>
        <input type="date" id="joiningDate" name="joiningDate" placeholder="04/12/2019">
    <label for="plan"><i class="fa fa-plan"></i>plan</label>
        <input type="plan" id="plan" name="plan" placeholder="gold">
    <button type="submit" id="memberBtn" class="btn btn-primary btn-lg">Save</button>
    </div>
    </div>
</form>
</div>
</div>
</body>
<include>"footer.html"</include>
</html>