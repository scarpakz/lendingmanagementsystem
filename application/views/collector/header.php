<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta author="<?php echo $author;?>">
    <title><?php echo $title;?></title>
    <link rel="icon" href="<?php echo $lending_icon;?>">
    <link rel="stylesheet" href="<?php echo $style;?>">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
	<div class="container-sidear">
		<div class="content-sidebar">
			<a href="<?php echo base_url();?>index.php/Collector/dashboard"><img id="official_logo" src="<?php echo $lending_logo;?>" alt="Lending Management System"></a>
			<center><a href="<?php echo base_url();?>index.php/Collector/dashboard"><img id="logo_only" src="<?php echo $lending_icon;?>" alt="Lending Management System - Logo only"></a></center>
			<p class="admin-text">Collector</p>
			<div class="admin-menu">
				<ul>
					<a href="<?php echo base_url();?>index.php/Collector/dashboard" class="dashboard"><li class="active-menu"> <i id="icons" class="fa fa-home"></i><p id="menu-p"> Dashboard</p></li></a>
					<a href="<?php echo base_url();?>index.php/Collector/settings" class="settings"><li><i id="icons" class="fa fa-gear"></i><p id="menu-p"> Settings</p></li></a>
					<a href="#" onclick="logout()" class="logout"><li><i id="icons" class="fa fa-sign-out"></i><p id="menu-p"> Log Out</p></li></a>
				</ul>
			</div>
		</div>
	</div>
	