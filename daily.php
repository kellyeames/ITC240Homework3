<?php 
include('config.php');
include('includes/header.php'); 

if(isset($_GET['today'])){  //if it is set, do the following
$today = $_GET['today'];
}else {         //if not, do the following
$today = date('l');
}

switch($today) {

case 'Sunday';
$dog = 'Sunday\'s dog is the Spaniel!';
$subHeading = 'Spaniel\'s make Sunday into a fun day!!!';
$pic = 'spaniel.jpg';
$alt = 'Spaniel';
break;

case 'Monday';
$dog = 'Monday\'s dog is the Beagle!';
$subHeading = 'Beagle\'s make Monday less of a Monday!!!';
$pic = 'beagle.jpg';
$alt = 'Beagle';
break;

case 'Tuesday';
$dog = 'Tuesday\'s dog is the Terrier!';
$subHeading = 'Terrier\'s make Tuesday terrific!!!';
$pic = 'terrier.jpg';
$alt = 'Terrier';
break;

case 'Wednesday';
$dog = 'Wednesday\'s dog is the Weimaraner!';
$subHeading = 'Weimarener is the way to go!!!';
$pic = 'weimaraner.jpg';
$alt = 'Weimaraner';
break;

case 'Thursday';
$dog = 'Thursday\'s dog is the Lab!';
$subHeading = 'Labrador\'s make Thursday a great day!!!';
$pic = 'lab.jpg';
$alt = 'Lab';
break;

case 'Friday';
$dog = 'Friday\'s dog is the Shepherd!';
$subHeading = 'Shepherd\'s make Friday a fantastic day!!!';
$pic = 'shepherd.jpg';
$alt = 'Shepherd';
break;

case 'Saturday';
$dog = 'Saturday\'s dog is the Chihuahua!';
$subHeading = 'Chihuahua\'s spice up Saturday!!!';
$pic = 'chihuahua.jpg';
$alt = 'Chihuahua';
break;

}


?>

<main>
<h2><?= $dog ?></h2>
<h3>To check out our daily dogs, please click below!</h3>

<ul>
<li><a href="daily.php?today=Sunday">Sunday</a></li>
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>

<h2>Information About Doggos</h2>
<p>Dogs (Canis lupus familiaris) are domesticated mammals, not natural wild animals. 
They were originally bred from wolves. They have been bred by humans for a long time, 
and were the first animals ever to be domesticated. There are different studies that 
suggest that this happened between 15.000 and 100.000 years before our time. 
The dingo is also a dog, but many dingos have become wild animals again and live 
independently of humans in the range where they occur (parts of Australia). </p>

<p>Today, some dogs are used as pets, others are used to help humans do their work. 
They are a popular pet because they are usually playful, friendly, loyal and listen to humans. 
Thirty million dogs in the United States are registered as pets. 
Dogs eat both meat and vegetables, often mixed together and sold in stores as dog food. 
Dogs often have jobs, including as police dogs, army dogs, assistance dogs, fire dogs, 
messenger dogs, hunting dogs, herding dogs, or rescue dogs.

They are sometimes called "canines" from the Latin word for dog - canis. 
Sometimes people also use "dog" to describe other canids, such as wolves. 
A baby dog is called a pup or puppy. A dog is called a puppy until it is about one year old. </p>

</main>
<aside>
<h3><?= $subHeading ?></h3>
<img src="images/<?= $pic ?>" alt="<?= $pic ?>">
</aside>
<?php include('includes/footer.php'); ?>
