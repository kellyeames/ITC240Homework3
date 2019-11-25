<?php include('includes/header.php'); ?>

<?php 

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


//include('config.php');
//include('includes/header.php'); 
?>

<main>
<h2>All Star Dogs!</h2>
<table>
<?php foreach($dog as $full_name => $image) : ?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5) ; ?>.jpg" alt="<?php echo 
htmlspecialchars($full_name); ?>">
</td>

<td><?php echo str_replace('_', ' ', $full_name) ;  ?>
</td>

<td><?php echo substr($image, 6) ; ?>
</td>

</tr>

<?php endforeach; ?>
</table>

</main>
<aside>
<h3>Here is my aside!</h3>
</aside>

<?php include('includes/footer.php'); 
?>
