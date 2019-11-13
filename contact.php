<?php
include('config.php');
include('includes/header.php'); 

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
?>
<!doctype html>
<html lang="en">
<head>
<title>Our Emailable Form</title>

</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
<legend>Contact Us!</legend>

<label>Name</label>
<input type="text" name="name" value="
<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])?>"><br>
<span><?php echo $nameErr;?></span>

<label>Email</label>
<input type="text" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])?>">
<span><?php echo $emailErr;?></span>

<label>Phone</label>
<input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="
<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])?>">
<span><?php echo $phoneErr;?></span>

<label>Gender</label>
<ul>
<li><input type="radio" name="gender" value="female"
<?php 
if(isset($_POST['gender']) && $_POST['gender'] == 'female')
echo 'checked = "checked"' ; ?>>Female</li>
<li><input type="radio" name="gender" value="male"
<?php 
if(isset($_POST['gender']) && $_POST['gender'] == 'male')
echo 'checked = "checked"' ; ?>>Male</li>
</ul>
<span><?php echo $genderErr; ?></span>

<label>Favorite Dogs</label>
<ul>
<li><input type="checkbox" name="dogs[]" value="lab"
<?php if(isset($_POST['dogs']) && in_array('lab', $dogs)) echo 'checked="checked"'; ?>
>Labrador</li>
<li><input type="checkbox" name="dogs[]" value="chihuahua"
<?php if(isset($_POST['dogs']) && in_array('chihuahua', $dogs)) echo 'checked="checked"'; ?>
>Chihuahua</li>
<li><input type="checkbox" name="dogs[]" value="hound"
<?php if(isset($_POST['dogs']) && in_array('hound', $dogs)) echo 'checked="checked"'; ?>
>Hound</li>
<li><input type="checkbox" name="dogs[]" value="poodle"
<?php if(isset($_POST['dogs']) && in_array('poodle', $dogs)) echo 'checked="checked"'; ?>
>Poodle</li>
</ul>

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo $_POST['comments']; ?></textarea><br>
<span><?php echo $commentsErr;?></span>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes')
echo 'checked = "checked"'; ?>>I agree</li>
</ul>
<span><?php echo $privacyErr;?></span>
<input type="submit" name="submit" value="Send it">

<input type="button" onclick="window.location.href =
'<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'" value="RESET!"/>
</fieldset>
</form>
</body>

<?php include('includes/footer.php');?> 

</html>