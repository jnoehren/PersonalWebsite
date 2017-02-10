<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jeffrey Noehren Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URL; ?>css/home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo URL;?>">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Projects</a></li>

<?php if(isset($_SESSION['user'])) { ?>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href ="<?php echo URL;?>admin/editPage">Edit</a></li>
                <li><a href ="<?php echo URL;?>admin/logout">Logout</a></li>
              </ul>
            </li>

<?php }         ?>
        <li><a href=""><img src='http://seeklogo.com/images/L/linkedin-icon-logo-05B2880899-seeklogo.com.gif' height="30em" width="30em"></a></li>
        <li><a href="https://www.facebook.com/jeffrey.noehren"><img src='https://www.abecedamodelu.cz/fotky2554/logo-facebook.png' height="30em" width="30em"></a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br><br><br>
