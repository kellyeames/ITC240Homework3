<?php

ob_start(); //prevents header errors
define('DEBUG',TRUE); //see all errors
//include('crednetials.php');

$siteName = 'The Page for all Things Doggo!';
//$tagLine - 'Headline 2';

define('THIS_PAGE', basename($_SERVER['PHP_SELF'])); 

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['contact.php'] = 'Contact';
$nav['images.php'] = 'Gallery';

switch(THIS_PAGE) {
case 'index.php':
$title = 'Home page of doggo site';
$bodyClass = 'home';
break;

case 'about.php':
$title = 'About page of doggo site';
$bodyClass = 'about inner';
break;

case 'daily.php':
$title = 'Daily page of doggo site';
$bodyClass = 'daily inner';
break;

case 'contact.php':
$title = 'Contact page of doggo site';
$bodyClass = 'contact inner';
break;

case 'images.php':
$title = 'My table of images';
$bodyClass = 'images inner';
break;

default:
$title = THIS_PAGE;
}


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
        echo "Error in file: <b>" . $myFile . "</b> on line:
        <b>" . $myLine . "</b><br />";
        echo "Error Message: <b>" . $errorMsg . "</b><br />";
        die();
    }else{
        echo "I'm sorry, we have encountered an error. Would
        you like to buy a dog?";
        die();
    }
}

function makeLinks($nav) {
$myReturn = '';
foreach(nav as $key => $value) {
    
    if(THIS_PAGE == $key) {
        $myReturn .='<li><a href=" '. $key . '" class="active"> ' .
        $value . '</a></li>
        ' ;
    } else {
        $myReturn .='<li><a href=" '. $key . ' "> ' . $value .
        '</a></li>
        ' ;
    } //end if else 
} //end for each
    
    return $myReturn;
} //end function


//form php!!!
$name = $email = $gender = $comments = $dogs = $phone = $privacy = '';
$nameErr = $emailErr = $genderErr = $commentsErr = $dogsErr = $phoneErr = $privacyErr = '';



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
if(empty($_POST['name']) ) {
$nameErr = 'Please fill out your name';
} else {
$name = $_POST['name'];
}

if(empty($_POST['email']) ) {
$emailErr = 'Please fill out your email';
} else {
$email = $_POST['email'];
}

if(empty($_POST['gender']) ) {
    $genderErr = 'Please choose your gender';
    } else {
    $gender = $_POST['gender'];
    }

    if(empty($_POST['privacy']) ) {
        $privacyErr = 'Please check privacy';
        } else {
        $privacy = $_POST['privacy'];
        }

    if(empty($_POST['dogs']) ) {
        $dogsErr = 'Please choose your dogs';
        } else {
        $dogs = $_POST['dogs'];
        }

        if(empty($_POST['comments']) ) {
            $commentsErr = 'Please add your comments';
            } else {
            $comments = $_POST['comments'];
            }

        if(empty($_POST['phone'])) {  // if empty, type in your number
            $telErr = 'Your phone number please!';
            } elseif(array_key_exists('tel', $_POST)){
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
            { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phoneErr = 'Invalid format!';
            } else{
            $phone = $_POST['phone'];
            }
            }





if(isset($_POST['name'],
$_POST['email'],
$_POST['gender'],
$_POST['privacy'],
$_POST['comments'],
$_POST['dogs'])) {


function myDogs() {
$myReturn = '';
if(!empty($_POST['dogs'])) {
$myReturn = implode(",",$_POST['dogs']);

} return $myReturn; // end if not empty

} // end of function

$to = 'k.leanne.e@gmail.com';
$subject = 'Test Email' .date("m/d/y");
$body = '
'.$name.' '.PHP_EOL.'
'.$email.' '.PHP_EOL.'
'.$gender.' '.PHP_EOL.'
'.$phone.' '.PHP_EOL.'
'.$comments.' '.PHP_EOL.'
'.myDogs().'
';
$headers = array(
    'From' => 'no-reply@gmail.com',
    'Reply-to' => ''.$email.'');


if($_POST['name']!="" && $_POST['email']!="" && $_POST ['dogs']!="" &&
$_POST['comments']!="" && $_POST['gender']!="" && $_POST['phone']!=""
&& $_POST['privacy']!="")
{
    mail($to, $subject, $body, $headers);
    header("Location: thx.php");
}


} // end isset


} // end server request

//MY GALLERY

$dog['Lassie'] = 'lassi_Lassie Come Home';
$dog['Toto'] = 'totod_Wizard of Oz';
$dog['Rin_Tin_Tin'] = 'rinti_Where The North Begins';
$dog['Pete_The_Pup'] = 'petet_Our Gang';
$dog['Beethovan'] = 'beeth_Beethovan';
$dog['Benji'] = 'benji_Benji';
$dog['Old_Yeller'] = 'oldye_Old Yeller';
$dog['Buddy'] = 'buddy_Air Bud';
$dog['Comet'] = 'comet_Full House';
$dog['Hooch'] = 'hooch_Turner and Hooch';
$dog['Marley'] = 'marle_Marley and Me';
