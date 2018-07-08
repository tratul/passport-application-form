
<?php
	session_start();
	// define variables and set to empty values
	$errors = array();
	
	/* REQUIRED FIELD CHECK */
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//e name
		if (empty($_POST["Em_name"])) {
			$errors['Em_nameErr'] = "*This field is required";
		} 
		else {
			$name = test_input($_POST["name"]);
			
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/", $name)) 
			{
				$errors['$Em_nameErr'] = "*Letters only and (-,')";
			}
		}
		if (empty($_POST["Em_country"])) {
			$errors['Em_countryErr'] = "*This field is required";
		} 
		//district
		if (empty($_POST["Em_district"])) {
			$errors['Em_districtErr'] = "*This field is required";
		} 
		//police
		if (empty($_POST["Em_police"])) {
			$errors['Em_policeErr'] = "*This field is required";
		} 
		//postOffice
		if (empty($_POST["Em_postOffice"])) {
			$errors['Em_postErr'] = "*This field is required";
		} 
		//contact number
		if (empty($_POST["Em_contact"])) {
			$errors['Em_contactErr'] = "*This field is required";
		} 
		//Relationship
		if (empty($_POST["Em_relationship"])) {
			$errors['Em_relationErr'] = "*This field is required";
		}
		
		if(count($errors)==0)
		{
			
			if($_POST['submit2']){
				//$_SESSION['un']=$un;
				header("location:stage-1.php");
				
			}
			else if($_POST['submit3']){
				header("location:stage-3.php");
			}
			exit();
		}
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data); # stripslashes = Removes / or \ 
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<html>
	<head>
		<style>
			.error { color: #FF0000; }
			
			.stage1 {
				border: 1px solid gray;
			}
			.column_1{
				width: 50%;
				padding: 25px;
				
			}
			.column_2{
				width: 50%;
				padding: 25px;
				border-left: 1px dotted;
				text-align:top;
			}
			.column_3{
				text-align: right;
				padding: 25px;
			}
			input[type="text"]{
				
			}
		</style>
	</head>
	<body>
		<h3>PASSPORT APPLICATION - STAGE 2</h3>
		<P style="color:green; font-size: 12px;">Online application ID: OA0000004008216<P>
		<p>Fields marked with <span class="error">(*)</span> are mandatory</P>
		<?php
	
		?>

		<form action="" method="post">
			<table class="stage1" style="border-collapse:collapse;border-color:gray;width:100%;text-align:left;">
				<tr>
					<td class="column_1">
						<p style="color:green">Applicant Contact Information</p><br>
							Office No: <input type="number" name="Office">
							<br><br>
							Residence No: <input type="number" name="residence">
							<br><br>
							Mobile No: <input type="number" name="mobile">
						<br><br><br>
						
						<p style="color:green">Emergency Contact Person's Details</P><br>
							Name: <span class="error" >* </span>
							<input type="text" name="Em_name">
							<span class="error" > <?php echo $errors['Em_nameErr'];?></span>
							<br><br>
							Country:<span class="error" >* <?php ?></span>
								<select name="Em_country">
									<option value="BD">BANGLADESH</option>
									<option value="Not BD">Not BD</option>
								</select>								
							<br><br>
							<input type="checkbox" name="permanent" value="true">&nbsp; &nbsp; Same as permanent address
							<br><br>
							<input type="checkbox" name="present" value="true">&nbsp; &nbsp; Same as present address
							<br><br>
							Village/House:<input type="text" name="Em_house">
							<br><br>
							Road/Block/Sector:<input type="text" name="Em_road">
							<br><br>
							District:<span class="error" >* </span>
								<select name="Em_district">
									<option value="BD">-SELECT-</option>
									<option value="Not BD">Not BD</option>
								</select>
								<span class="error" > <?php echo $errors['Em_districtErr'];?></span>
							<br><br>
							Police  Station:<span class="error" >* </span>
								<select name="Em_police">
									<option value="BD"></option>
									<option value="Not BD">Not BD</option>
								</select>
								<span class="error" > <?php echo $errors['Em_policeErr'];?></span>
							<br><br>
							Post Office:<span class="error" >* </span>
								<select name="Em_postOffice">
									<option value="BD">-SELECT-</option>
									<option value="Not BD">Not BD</option>
								</select>
								<span class="error" > <?php echo $errors['Em_postErr'];?></span>
							<br><br>
							Contact No:<span class="error" >* </span><input type="number" name="Em_contact">
							<span class="error" > <?php echo $errors['Em_contactErr'];?></span>
							<br><br>
							Email:<input type="text" name="Em_email">
							<br><br>
							Relationship:<span class="error" >* </span> 
								<select name="Em_relationship">
									<option value="">-SELECT-</option>
									<option value="father">FATHER</option>
									<option value="mother">MOTHER</option>
									<option value="other">OTHER</option>
								</select>
								<span class="error" > <?php echo $errors['Em_relationErr'];?></span>
							<br><br>
					</td>
					<td class="column_2">
						<p style="color:green">Old Passport Information</p><br>
							Passport No.: <input type="number" name="P_no">
							<br><br>
							Place of Issue: <input type="text" name="place">
							<br><br>
							Date of Issue: <input type="text" name="date">
							<br><br>
							Re-issue Reason : 
								<select name="resion">
									<option>-SELECT-</option>
								</select>
					</td>
				<tr>
				<tr>
					<td colspan="2" class="column_3">
						<input type="submit" name="submit3" value="PREVIOUS PAGE" style="border-radius:5px; width:10%; text-align:center">&nbsp; &nbsp;
						<input type="submit" name="submit4" value="SAVE & NEXT" style="text-align:center; width:10%; border-radius:5px">
					</td>
				</tr>
			</table>
		</form>


	</body>
</html>