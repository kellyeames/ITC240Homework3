<?php
// this is going to be our people page
include('config.php');
//include('includes.php');

$sql = 'SELECT * FROM Breeds';
// we need to connect to the database


$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or 
die(myerror(__FILE__,__LINE__,mysqli_connect_error()));


// we need to extract the data
$result = mysqli_query($iConn, $sql) or 
die(myerror(__FILE__,__LINE__,mysqli_connect_error($iConn)));


//we need an if statement asking if we have more than 0 rows

if(mysqli_num_rows($result) > 0) {  //show the records

while($row = mysqli_fetch_assoc($result)) {
// the mysqli fetch associative array will display the contents of the row
echo '<ul>';
echo '<li class="large">For more info about <a href="breeds-view.php?id=' .$row['BreedID'].'">'.$row['BreedName'].'</a></li>';
echo '<li>'.$row['BreedName'].' </li>';
echo '<li>'.$row['Temperament'].' </li>';
echo '</ul>';
} //end while loop



}else  //end if statement and what if no candidates exist?
{
echo 'Sorry, no breeds!';
}

// release web server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);

//include('includes/footer.php')
