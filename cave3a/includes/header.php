<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
 case 'index.php':
    $title = 'Home page of our Cave Website';
    $body = 'home';
    $headline = 'Home Page Headline One';
    break;
case 'about.php':
    $title = 'About page of our Cave Website';
    $body = 'inner about';
    $headline = 'About Page Headline One';
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" >
    <!-- <link rel="stylesheet" href="http://basehold.it/24"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
        <style>

        </style>
</head>
<body class="<?php echo $body; ?>">
    <header>
        <div class="inner-header">

        <a href="index.php"><img src="images/logo.jpg" alt="Logo"></a>

        </div>
        
        <nav>
        <button class="nav-button">Toggle Navigation</button>
        
        <ul class="primary-nav">
			<li><a href="index.php">Home</a></li>
            <li><a href="about.php">About </a>
			<li class="parent"><a href="">Wines</a>
				<ul class="dropdown">
					<li><a href="#">Cabernet</a></li>
					<li><a href="#">Syrah</a></li>
					<li><a href="#">Merlot</a></li>
					
				</ul>
			</li>
			<li class="parent"><a href="tours.html">Tours</a>
            <ul class="dropdown">
                <li><a href="#">Washington</a></li>
                <li><a href="#">Oregon</a></li>
                <li><a href="#">Northern California</a></li>
            </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
		</ul>
        </nav>
    </header>

    <div id="wrapper">
    <h1><?php echo $headline; ?></h1>