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

<div class="container" style="margin-top: 50px;">
    <form action="">
        <div class="form-group">
            <label for="addplaylist">Playlist name:</label>
            <input type="text" class="form-control" id="nameplaylist">
        </div>
        <div class="form-group">
            <label for="imageurl">URL playlist background (512x512):</label>
            <input type="text" class="form-control" id="imageurl">
        </div>
        <button type="submit" class="btn btn-primary">Add playlist</button>
    </form>
</div>

<?php include 'Components/footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>