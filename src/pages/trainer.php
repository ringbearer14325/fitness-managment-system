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
<include "footer.html"></include>
</html>