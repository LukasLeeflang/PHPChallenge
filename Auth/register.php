<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SpotiTube</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
<?php include '../Components/navigation2.php' ?>
<?php include '../Components/banner.php' ?>

<div class="container" style="margin-top: 50px;">
    <form action="">
        <div class="form-group">
            <label for="firstname">First name:</label>
            <input type="text" class="form-control" id="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last name:</label>
            <input type="text" class="form-control" id="lastname">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<?php include '../Components/footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>