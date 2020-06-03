<?php 
require_once("config.php");

if (! empty( $_POST ) ) 
// connect and escape
$mysql = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME);
$data = array_map( array( $mysql, 'real_escape_string' ), $_POST);




?>
<!doctype html>
<html lang="en">
<include "header.html"></include>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- style sheet-->
    <link href="src\css\admin.css" rel="stylesheet" type="text/css">
    <title>Admin</title>
</head>
<body>
<div id="adminBar">
<div class="container">
    <div class="row">
        <div class="col-sm">
            "Admin"
        </div>
        <div class="col-sm">
           "name admin"
        </div>
        <div class="col-sm">
            "last login time"
        </div>
    </div>
</div>
</div>
<div id=buttonsBar>
<div class="container">
    <div class="row">
        <?php if (isset($insert) ) : ?>
        <div class="message">
            <?php if ( $insert == true ) : ?>
                    <p class="success">the data was inserted successfully.</p>
            <?php else : ?>
                    <p class="error">There was an error with the submission.</p>
            <?php endif; ?>
        </div>
            <?php endif; ?>      
        <button type="button" class="btn btn-primary">Add member</button>
        <button type="button" class="btn btn-primary">Delete member</button>
        <button type="button" class="btn btn-primary">Modify member data</button>
    </div>
    <div class="row">
        <button type="button" class="btn btn-primary">Add trainer</button>
        <button type="button" class="btn btn-primary">Delete trainer</button>
        <button type="button" class="btn btn-primary">Modify trainers shift</button>
    </div>
</div>
</div>
<div class="customersTable">
    <h2>Customers in queue</h2>
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
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
<include "footer.html"></include>
</html>