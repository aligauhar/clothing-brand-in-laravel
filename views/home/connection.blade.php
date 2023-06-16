<!-- for establishing the connection to database -->
<?php
$conn = mysqli_connect("localhost","root","","laravelprj" ) or die ("error" . mysqli_error($conn));
?>