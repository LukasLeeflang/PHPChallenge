<?php
include "Auth/dbh.php";

if (isset($_POST['btnLogin'])){
    header('Location: index.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    session_write_close();
    unset($userEmail);
    header("location: index.php");
}

?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <a class="navbar-brand" href="index.php">SpotiTube</a>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Playlists</a>
        </li>
    </ul>
    <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
        <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
        <?php if ($sessionUser) { ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <?= $sessionUser ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a style="margin-left: 10px" name="logout" href="index.php?logout='1'">Logout</a>
                </div>
            </li>
        <?php } ?>


        <?php if(!$sessionUser){ ?>
        <li class="dropdown order-1">
            <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right mt-2">
                <li class="px-3 py-2">
                    <form class="form" method="post" role="form">
                        <div class="form-group">
                            <input id="emailInput" placeholder="Username" class="form-control form-control-sm" type="text" required="">
                        </div>
                        <div class="form-group">
                            <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btnLogin" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <div class="form-group text-center">
                            <small><a href="Auth/register.php">Register</a></small>
                        </div>
                    </form>
                </li>
            </ul>
        </li>
        <?php } ?>
    </ul>
</nav>