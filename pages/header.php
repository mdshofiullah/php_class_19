<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
<?php if (isset($_SESSION['name'])) { ?>
<nav class="navbar navbar-expand-md navbar-dark bg-info">
    <div class="container">
        <a href="" class="navbar-brand font-weight-bolder">Logo</a>
        <ul class="navbar-nav">
            <li><a href="action.php?pages=home" class="nav-link text-white">Home</a></li>
            <li><a href="action.php?pages=series" class="nav-link text-white">Series</a></li>
            <li><a href="action.php?pages=register" class="nav-link text-white">Registration</a></li>
            <li><a href="action.php?pages=all-data" class="nav-link text-white">All Data</a></li>
            <li class="dropdown">
                <a href="action.php?pages=register" class="nav-link dropdown-toggle text-white" data-toggle="dropdown"><?php echo $_SESSION['name']; ?></a>
                <ul class="dropdown-menu">
                    <li><a href="action.php?pages=logout" class="dropdown-item">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<?php }  ?>