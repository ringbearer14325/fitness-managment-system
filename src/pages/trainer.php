<?php 
require_once("config.php");

if (! empty( $_POST ) ) 
// connect and escape
$mysql = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
$data = array_map( array( $mysql, 'real_escape_string' ), $_POST);

// convert to variables
extract($data);

// submit to database
$insertQuery = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
$insert = $mysql->query( $insertQuery );

$deleteQuery = "DELETE FROM users (name, email) VALUES ('$name', '$email')";    
$delete = $mysql->query( $deleteQuery );     

$alterQuery = "ALTER users (name, email) VALUES ('$name', '$email')";  
$modify = $mysql->query( $alterQuery );    
?>
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
<div>
<div class="container">
<form id="memberForm">
<?php if (isset($insert) ) : ?>
        <div class="message">
            <?php if ( $insert == true ) : ?>
                    <p class="success">the data was inserted successfully.</p>
            <?php else : ?>
                    <p class="error">There was an error with the submission.</p>
            <?php endif; ?>
        </div>
            <?php endif; ?>      
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


<div class="membersTable">
    <h2>Members in queue</h2>
<table style="width:100%">
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Age</th>
    </tr>
    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
    </tr>
  </table>
<include>"footer.html"</include>
</html>