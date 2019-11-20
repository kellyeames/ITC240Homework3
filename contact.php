<?php
include('config.php');
include('includes/header.php'); 
?>

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
    <span style="color:red;"><?php echo $dogsErr;  ?></span>

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