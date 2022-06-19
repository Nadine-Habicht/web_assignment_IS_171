<style>
	<?php include 'general style.css'; ?>
	table{
		background-color: powderblue;
		width:99%;
		border: solid 2px yellow;
		font-family: Helvetica;
		margin-left:0%;
		text-align: center;
	}
</style>
<?php


echo "<table id='maintable'>
			<tr>
				<td><a href='newhomepage.html'> Home </a></td>
				<td><a href='newabout.html'> About </a></td>
				<td><a href='newregister.html'> Register </a></td>
				<td><a href='alumni1.html'> Alumni </a></td>
				<td><a href='newstaff.html'> Staff </a></td>
				<td><a href='newcontacts.html'> Contacts </a></td>
			</tr>
		</table>";



$connection = mysqli_connect("localhost", "root", "", "web_assignment");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM alumni_registration";
$result = $connection->query($sql);

echo "<table border='1px'>
				<tr>
					<th>First name</th><th>Last name</th>
					<th>Year of enrolment</th><th>Year of graduation</th>
					<th>Headmaster(mistress)</th><th>Famous teacher</th>
					<th>Summary of results</th><th>Current occupation</th>
					<th>Address</th><th>Email</th>
					<th>Mobile number</th>
				</tr>";
				
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo 
			"<tr>
				<td> {$row['fname']} </td><td> {$row['lastname']} </td>
				<td> {$row['year_of_enrolment']} </td><td> {$row['year_of_graduation']} </td>
				<td> {$row['headm']} </td><td> {$row['famous_teacher']} </td>
				<td> {$row['results']} </td><td> {$row['occupation']} </td>
				<td> {$row['address']} </td><td> {$row['email']} </td><td> {$row['mnumber']} </td>
			</tr>";
		}
		echo "	</table>"; 
	} else {
		echo ("0 result");
	}

?>