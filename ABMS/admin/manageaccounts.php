<?php include '../include/links.php'?>
<?php include '../database/dbcon.php'?>
<?php


// Assuming you have a database connection
// $conn = new mysqli("hostname", "username", "password", "database");

// Query to retrieve vaccinated animal records
//$query = "SELECT * FROM tblusers";
//$result = $con->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your meta tags, stylesheets, and other head content -->

</head>
<body>
    <!-- Include your header, sidebar, and other common elements -->
    <?php include 'sidebar.php'?>
    <?php include 'navbar.php'?>
    <link rel="stylesheet" href="../css/admin.css">

    <!-- Display vaccinated animal records -->
    <main>
            <h1 class="title">Manage Accounts</h1>
			<ul class="breadcrumbs">
				<li><a href="admin.php">Dashboard</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Manage Accounts</a></li>
			</ul>
    </main>

    <!-- Include your footer and scripts -->
    <script src="../js/index.js"></script>
</body>
</html>
