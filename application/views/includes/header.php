<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        var BASE_URL="<?php echo base_url() ?>";
    </script>
	<title>Home</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>tools/css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>tools/fonts/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>tools/css/style.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="#"><font face="FreeMono">E-Shop</font></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Electronics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'home/login' ?>"><i class="fa fa-sign-in"></i></a>
                </li>
            </ul>
        </div>
    </nav>