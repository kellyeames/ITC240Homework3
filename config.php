<?php
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['contact.php'] = 'Contact';

//$namePage = basename($_SERVER['PHP_SELF'], '.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
case 'index.php':
$title = 'Home page of switch site';
$bodyClass = 'home';
break;
case 'about.php':
$title = 'About page of switch site';
$bodyClass = 'about inner';
break;
case 'daily.php':
$title = 'Daily page of switch site';
$bodyClass = 'daily inner';
break;
case 'contact.php':
$title = 'Contact page of switch site';
$bodyClass = 'contact';
break;
}

?>