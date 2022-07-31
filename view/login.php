
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['successMsg'])){
     echo " <div class='alert alert-warning' >".$_SESSION['errorMsg']."</div>";
    unset($_SESSION['errorMsg']);
}

?>
<?php
if (isset($_SESSION['errorMsg'])){
    echo " <div class='alert alert-success' >".$_SESSION['successMsg']."</div>";
    unset($_SESSION['successMsg']);

}

?>
<form action="../controller/login.php" method="post">
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>

    <div class="mb-3">
        <label for="pswd" class="form-label">Password:</label>
        <input type="text" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



</body>
</html>