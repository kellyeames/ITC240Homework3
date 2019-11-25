<?php 
include('config.php');
include('includes/header.php'); 
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
