
<script type="text/javascript">

</script>
<form>
<input type="button" value="Print"
onclick="window.print()"/>
</form>
<?php
include('db.php');
$id=$_GET['id'];

$result = mysql_query("SELECT * FROM customer WHERE transactionum='$id'");
while($row = mysql_fetch_array($result))
	{
		echo 'Transaction Number: '.$row['transactionum'].'<br>';
		echo 'Name: '.$row['fname'].' '.$row['lname'].'<br>';
		echo 'Address: '.$row['address'].'<br>';
		echo 'Contact: '.$row['contact'].'<br>';
		echo 'Payable: '.$row['payable'].'<br>';
	}
$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$id'");
while($rows = mysql_fetch_array($results))
	{
		$abc=$rows['seat'];
		$ggagaga=$rows['bus'];
		echo 'Route and Type of Bus: ';
		$resulta = mysql_query("SELECT * FROM route WHERE id='$ggagaga'");
		while($rowa = mysql_fetch_array($resulta))
			{
			echo $rowa['Origin'].'  -'.$rowa['Destination'].'<br>'.$rowa['type'].'<br>';
			
			
			echo 'Time of Departure: '.$rowa['time']; }
			
		echo '<br>';
		//echo 'Seat Number: '.$setnum.'<br>';
		echo 'Seat Number: '.$abc.'<br>';
		echo 'Date Of Travel: '.$rows['date'].'<br>';
		
	}
?>

<a href="index.php">Home</a>