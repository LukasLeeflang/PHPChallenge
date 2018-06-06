<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SpotiTube</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
<?php include 'Components/navigation.php' ?>
<?php include 'Components/banner.php' ?>

<div class="container">

    <h1 style="margin-top: 20px;">Playlists</h1>

    <h5 style="margin-top: 20px;"><a href="addplaylist.php" style="color: black;">Add a new playlist</a></h5>

    <div class="row">
    <div class="card" style="margin-top: 20px;">
        <img class="card-img-top" src="Images/hiphop.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><a href="Playlists/hiphop.php" style="text-decoration: none; color: black;">Hip-Hop</a></h5>
        </div>
    </div>

    <div class="card" style="margin-top: 20px; margin-left: 20px;">
        <img class="card-img-top" src="Images/classics.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><a href="Playlists/classics.php" style="text-decoration: none; color: black;">Classics</a></h5>
        </div>
    </div>

    <div class="card" style="margin-top: 20px; ">
        <img class="card-img-top" src="Images/jazz.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><a href="Playlists/jazz.php " style="text-decoration: none; color: black;">Jazz</a></h5>
        </div>
    </div>
    </div>
</div>

<?php include 'Components/footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>