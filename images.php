<?php include('config.php');

include('includes/header.php'); ?>

<main>
<h2>All Star Dogs!</h2>
<table>
<?php foreach($dog as $full_name => $image) :   ?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5) ;   ?>.jpg" alt="<?php echo 
htmlspecialchars($full_name); ?>">
</td>

<td><?php echo str_replace('_', ' ', $full_name) ;  ?>
</td>

<td><?php echo substr($image, 6) ;    ?>
</td>


</tr>

<?php endforeach; ?>
</table>

</main>
<aside>
<h3>Here is my aside!</h3>
</aside>
<?php include('includes/footer.php'); ?>
