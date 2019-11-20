<!doctype html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body class="<?= $bodyClass ?>">
<header>

<img id="banner" src="images/banner.jpg" alt="banner">
<h1>The Site for all Things Doggo!</h1>
</header>
<nav>
<ul>
<?php
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
    echo '<li><a class="active href="'.$key.'"> '.$value.' </a></li>';
}else {
    echo '<li><a href="'.$key.'"> '.$value.' </a></li>';
} //end of else
} //end of for each
?>
</ul>

</nav>

<div id="wrapper">