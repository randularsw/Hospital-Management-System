<?php
	/*Inherit the pre defined button class to this php page*/
	include("button.php");

	/*Create the connection with the data base*/
	mysql_connect("localhost","root","") or die ("Error Occures");
	mysql_select_db("hospital_management_system") or die ("Error Occures");
	
	error_reporting(0);
	/*Put the login user name and password in to declared variable*/
	$username = $_POST["user"];
	$password = $_POST["pass"];
	
	$eID="";
	$pss="";
	/*Assaign the username and password in the selected table if there is*/
	$tmp = "SELECT * FROM elog WHERE eID='$username'";
	$getData = mysql_query($tmp);
	while($assData=mysql_fetch_assoc($getData)) {
		$eID = $assData["eID"];
		$pss = $assData["password"];
	}
	
	/*Two sql queries to be declared*/
	$sql_1="SELECT eID,eName,phone,gender,DOB FROM employee WHERE eID='$username'";
	$sql_2="SELECT patient_ID,patient_name,gender,ward_ID,DOB FROM patient WHERE eID='$username'";
	
	$records_1=mysql_query($sql_1);
	$records_2=mysql_query($sql_2);
	
	/*Assigning datas which will be given through forms*/
		$pid = $_POST["pid"];
		$tid = $_POST["tid"];
		$tname = $_POST["tname"]; 
		$res = $_POST["res"];
		$sdate = $_POST["sdate"];
		$edate = $_POST["edate"];
		
		$pid_1 = $_POST["pid_1"];
		$tid_1 = $_POST["tid_1"];
		$want = $_POST["wantto"];
		$data = $_POST["data"];
		
	/*If username and passwords are correct then run the html codes*/	
	if($username==$eID && $password==$pss) {
?>
		<html>
			
			<head>
				<title>Employee Logged In Interface</title>
				<link rel="stylesheet" type="text/css" href="template.css" />
				
			</head>
			
			<body>
				<div class="template">
					<header>
						<h1 style="text-align:center;font-size:45px">Employee Login Interface</h1>
					</header>
					
					<div>
					<!creating a table to put data>
						<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
									
							<tr>
								<th>Employee ID</th>
								<th>Employee Name</th>
								<th>Phone Number</th>
								<th>Gender</th>
								<th>DOB</th>
							</tr>	
							<?php
								/*Loop the array to fill the table with datas*/	
								while($row = mysql_fetch_assoc($records_1)){
									echo "<tr>";
									echo "<td>".$row['eID']."</td>";
									echo "<td>".$row['eName']."</td>";
									echo "<td>".$row['phone']."</td>";
									echo "<td>".$row['gender']."</td>";
									echo "<td>".$row['DOB']."</td>";
									echo "</tr>";
								}
								echo "<table>";
								mysql_close();
							?>
					</div>
					<header>
						<h2 style="font-size:20px;text-align:center">Relatived Patient Details</h2>
					</header>
					<div>
					
						<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
									
							<tr>
								<th>Patient ID</th>
								<th>Patient Name</th>
								<th>Gender</th>
								<th>Ward ID</th>
								<th>DOB</th>
							</tr>	
							<?php
									
								while($row = mysql_fetch_assoc($records_2)){
									echo "<tr>";
									echo "<td>".$row['patient_ID']."</td>";
									echo "<td>".$row['patient_name']."</td>";
									echo "<td>".$row['gender']."</td>";
									echo "<td>".$row['ward_ID']."</td>";
									echo "<td>".$row['DOB']."</td>";
									echo "</tr>";
								}
								echo "<table>";
								mysql_close();
							?>
					</div>
					
					<article>
						<a href="insertTreatment.php"><button class="button button3">Insert Treatemnt to Patients</button></a>
						<a href="updateTreatment.php"><button class="button button2">Update Treatment Details</button></a>
						<a href="insertPatient.php"><button class="button">Insert New Patient</button></a>
						<a href="changePass.php"><button class="button button5">Change Password for Your Account</button></a>
					</article>
					
					<footer>
						<div>
							<a href="mainPage.php"><button>Log Out</button></a>
						</div>
						Copyrigth &copy; Group No:25
					</footer>
				</div>
			</body>

		</html>
<?php
	}
	else {
		
	}

?>