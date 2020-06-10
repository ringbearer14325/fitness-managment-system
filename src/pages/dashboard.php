<!DOCTYPE html>
<html lang="en">
<include>"header.php"</include>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- style sheet-->
    <link href="src\css\dashboard.css" rel="stylesheet" type="text/css">
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
        <button type="submit" id="addMember" class="btn btn-primary" value="Submit">Add member</button>
      
        <button type="submit" id="deleteMember" class="btn btn-primary" value="Submit">Delete member</button>
      

        <button type="submit" id="modifyMember" class="btn btn-primary" value="Submit">Modify member data</button>
        

    </div>
    <div class="row">
        <button type="button" id="addTrainer" class="btn btn-primary" value="Submit">Add trainer</button>
        <?php if (isset($insert) ) : ?>
           <?php $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";  ?>  
           <?php $insert = $mysql->query( $query ); ?>     
           <?php endif ?>

        <button type="button" id="deleteTrainer" class="btn btn-primary" value="Submit">Delete trainer</button>
        <?php if (isset($insert) ) : ?>
           <?php $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";  ?>  
           <?php $insert = $mysql->query( $query ); ?>     
           <?php endif ?>

        <button type="button" id="modifyTrainer" class="btn btn-primary" value="Submit">Modify trainers shift</button>
        <?php if (isset($insert) ) : ?>
           <?php $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";  ?>  
           <?php $insert = $mysql->query( $query ); ?>     
           <?php endif ?>
    </div>
</div>
</div>
<div class="membersTable">
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
<include>"footer.php"</include>
</html>