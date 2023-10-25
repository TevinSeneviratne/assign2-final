<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="description"	content="COS10026 Assignment Part 2 manage page">
	<meta name="keywords"		content="Swinburne COS10026 Assignment Part 2 manage page">	
	<meta name="author"			content="Tevin Seneviratne">
	<title>Code Crafters</title>
</head>
<body>

<?php 
include("settings.php");

$connection = mysqli_connect($host, $user, $pwd, $sql_db);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>

<!-- Form to list all EOIs -->
<form method="post" action="manage.php">
    <input type="submit" name="list_all" value="List All EOIs">
</form>

<!-- Form to list EOIs for a particular position -->
<form method="post" action="manage.php">
    Job Reference Number: <input type="text" name="jobReferenceNumber">
    <input type="submit" name="list_by_job" value="List EOIs by Job Reference">
</form>

<!-- Form to list EOIs by applicant's name -->
<form method="post" action="manage.php">
    First Name: <input type="text" name="firstName">
    Last Name: <input type="text" name="lastName">
    <input type="submit" name="list_by_name" value="List EOIs by Applicant">
</form>

<!-- Form to change the status of an EOI -->
<form method="post" action="manage.php">
    EOI Number: <input type="text" name="eoiNumber">
    Status: <select name="status">
        <option value="New">New</option>
        <option value="Current">Current</option>
        <option value="Final">Final</option>
    </select>
    <input type="submit" name="change_status" value="Change Status">
</form>

<!-- Form to delete all EOIs with a specific job reference number -->
<form method="post" action="manage.php">
    Job Reference Number: <input type="text" name="delJobReferenceNumber">
    <input type="submit" name="delete_by_job" value="Delete EOIs by Job Reference">
</form>

<?php
// Check for form submissions:
    if(isset($_POST['list_all'])) {
        $result = mysqli_query($connection, "SELECT * FROM EOI");
        displayResults($result);
    }
    
    if(isset($_POST['list_by_job'])) {
        $jobReferenceNumber = mysqli_real_escape_string($connection, $_POST['jobReferenceNumber']);
        $result = mysqli_query($connection, "SELECT * FROM EOI WHERE `Job Reference number`='$jobReferenceNumber'");
        displayResults($result);
    }
    
    if(isset($_POST['list_by_name'])) {
        $firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
        $result = mysqli_query($connection, "SELECT * FROM EOI WHERE `First name`='$firstName' OR `Last name`='$lastName'");
        displayResults($result);
    }
    
    if(isset($_POST['change_status'])) {
        $eoiNumber = mysqli_real_escape_string($connection, $_POST['eoiNumber']);
        $status = mysqli_real_escape_string($connection, $_POST['status']);
        mysqli_query($connection, "UPDATE EOI SET Status='$status' WHERE EOInumber='$eoiNumber'");
        echo "Status updated successfully!";
    }
    
    if(isset($_POST['delete_by_job'])) {
        $delJobReferenceNumber = mysqli_real_escape_string($connection, $_POST['delJobReferenceNumber']);
        mysqli_query($connection, "DELETE FROM EOI WHERE `Job Reference number`='$delJobReferenceNumber'");
        echo "EOIs deleted successfully!";
    }
    
    function displayResults($result) {
        global $connection;  
    
        echo "<table border='1'>
        <tr>
        <th>EOI Number</th>
        <th>Job Reference Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        </tr>";
        if ($result) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['eoi_number'] . "</td>";
                echo "<td>" . $row['job_reference_number'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Error: " . mysqli_error($connection);
        }
        echo "</table>";  
    }
?>

</body>
</html>
