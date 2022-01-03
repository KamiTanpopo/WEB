

<?php
require_once 'config/connectDB.php';

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$numOfTickets=$_POST['numOfTickets'];
$price=$_POST['price'];
$query = parse_url($_SERVER[REQUEST_URI])["query"];
$sessionId = substr($query, 3);


mysqli_query($connect, "UPDATE `session`
                        SET ticketsnum = ticketsnum-$numOfTickets
                        WHERE idsession = $sessionId");

echo 'Ви, '.$firstName.' '.$lastName.', купили '.$numOfTickets.' білети на суму '.$price*$numOfTickets.'';   
?>