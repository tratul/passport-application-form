<?php
session_start();
// define variables and set to empty values
$errors = array();
//$countryErr = $typeErr = $nameErr = $name2Err = $FnameErr = $FnatErr = $FproErr = $MnameErr = $MnatErr = $MproErr = $maritalErr = $proErr = $cobErr = $DbirthErr =$dobErr = $genderErr = $birthIDErr = $heightErr = $religionErr = $emailErr = $natErr = $citizErr = $dualcitizErr = $districtErr = $policeErr = $postErr = $PdistrictErr = $PpoliceErr = $PpostErr = "";
//$name= $name2= $Fname= $Mname= $email= "";

/* REQUIRED FIELD CHECK */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["country"])) {
        $errors['countryErr'] = "*This field is required";
    } 
	if (empty($_POST["type"])) {
        $errors['typeErr'] = "*This field is required";
    } 
	//Applicant name
	if (empty($_POST["name"])) {
        $errors['nameErr'] = "*This field is required";
    } 
	else {
        $name = test_input($_POST["name"]);
		
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) 
		{
            $errors['$nameErr'] = "*Letters only and (-,')";
        }
    }
	//name2
	if (empty($_POST["name2"])) {
        $errors['$name2Err'] = "*This field is required";
    } 
	else {
        $name2 = test_input($_POST["name2"]);
		
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name2)) 
		{
            $errors['$name2Err'] = "*Letters only and (-,')";
        }
    }
	//Father name
	if (empty($_POST["Fname"])) {
        $errors['FnameErr'] = "*This field is required";
    } 
	else {
        $Fname = test_input($_POST["Fname"]);
		
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $Fname)) 
		{
            $errors['FnameErr'] = "*Letters only and (-,')";
        }
    }
	//Father nationality
	if (empty($_POST["Fnationality"])) {
        $errors['FnatErr'] = "*This field is required";
    } 
	//Father profession
	if (empty($_POST["Fprofession"])) {
        $errors['FprErr'] = "*This field is required";
    } 
	//Mother name
	if (empty($_POST["Mname"])) {
        $errors['MnameErr'] = "*This field is required";
    } 
	else {
        $Mname = test_input($_POST["Mname"]);
		
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $Mname)) 
		{
            $$errors['MnameErr'] = "*Letters only and (-,')";
        }
    }
	//Mother nationality
	if (empty($_POST["Mnationality"])) {
        $errors['MnatErr'] = "*This field is required";
    } 
	//Mother profession
	if (empty($_POST["Mprofession"])) {
        $errors['MprErr'] = "*This field is required";
    } 
	//marital status
	if (empty($_POST["marital"])) {
        $errors['maritalErr'] = "*This field is required";
    } 
	//aplicant profession
	if (empty($_POST["profession"])) {
        $errors['prolErr'] = "*This field is required";
    } 
	//country of birth
	if (empty($_POST["Cbirth"])) {
        $errors['cobErr'] = "*This field is required";
    }
	//birth district
	if (empty($_POST["Dbirth"])) {
        $errors['DbirthErr'] = "*This field is required";
    } 
	//date of birth
	if (empty($_POST["dob"])) {
        $errors['dobErr'] = "*This field is required";
    }
	//gender
	if (empty($_POST["gender"])) {
        $errors['genderErr'] = "Gender is required";
    } 
	//Birthid no
	if (empty($_POST["birthID"])) {
        $errors['birthIDErr'] = "*This field is required";
    }
	//height
	if (empty($_POST["height"])) {
        $errors['heightErr'] = "*This field is required";
    }
	//Religion
	if (empty($_POST["religion"])) {
        $errors['religionErr'] = "*This field is required";
    }
	//Email
    if (empty($_POST["email"])) {
        $errors['emailErr'] = "*This field is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $errors['emailErr'] = "*Invalid email address";
        }
    }
	//nationality
	 if (empty($_POST["nationality"])) {
        $errors['natErr'] = "*This field is required";
    } 
	//citizen status
	 if (empty($_POST["citizen"])) {
        $errors['citizErr'] = "*This field is required";
    } 
	//dualcitizErr
	 if (empty($_POST["Dcitizen"])) {
        $errors['dualcitizErr'] = "*This field is required";
    } 
	//district
	 if (empty($_POST["district"])) {
        $errors['districtErr'] = "*This field is required";
    } 
	//police
	 if (empty($_POST["police"])) {
        $errors['policeErr'] = "*This field is required";
    } 
	//postOffice
	 if (empty($_POST["postOffice"])) {
        $errors['postErr'] = "*This field is required";
    } 
	//perm district
	 if (empty($_POST["Pdistrict"])) {
        $errors['PdistrictErr'] = "*This field is required";
    } 
	//perm police
	 if (empty($_POST["Ppolice"])) {
        $errors['PpoliceErr'] = "*This field is required";
    }
	// per postOffice
	 if (empty($_POST["PpostOffice"])) {
        $errors['PpostErr'] = "*This field is required";
    }   
	if(count($errors)==0)
	{
		
		if($_POST['submit1']){
			//$_SESSION['un']=$un;
			header("location:stage-1.php");
			
		}
		else if($_POST['submit2']){
			header("location:stage-2.php");
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
		<h3>PASSPORT APPLICATION - STAGE 1</h3>
		<P style="color:red; font-size: 12px;">Before filling up the online application form read the <a href="https://www.google.com">guidelines</a> carefully.  <P>
		<p>Fields marked with <span class="error">(*)</span> are mandatory</P>
		<?php
	
		?>

		<form method="POST" action=""> 
			<table class="stage1" style="border-collapse:collapse;border-color:gray;width:100%;text-align:left;">
				<tr>
					<td class="column_1">
						<p style="color:green">Passport Application Information</p><br>
							Applying in: <span class="error" >* </span> 
								<select name="country" >
									<option value="BANGLADESH">BANGLADESH</option>
									<option value="Not BD">NOT BD</option>
								</select>
								<!--<span class="error"><?php echo $errors['countryErr'];?></span>-->
							<br><br>
							Application Type: <b>NEW APPLICATION</b>
							<br><br>
							Passport Type: <span class="error" >* </span>
								<select name="type">
									<option value="">-SELECT-</option>
									<option value="ordinary">ORDINARY</option>
									<option value="diplomatic">DIPLOMATIC</option>
									<option value="official">OFFICIAL</option>
								</select>
								<span class="error"><?php echo $errors['typeErr'];?></span>
							<br><br>
							Delivery Type:  <input type="radio" name="delivery" value="regular">Regular<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="radio" name="delivery" value="express">Express
						<br><br><br>
						<p style="color:green">Personal Information</P><br>
							Name of applicant: <span class="error" >* </span>
							<input type="text" name="name">
							<span class="error"><?php echo $errors['nameErr'];?></span>
							<br><br>
							First Part(Given Name):<input type="text" name="name1">
							<br><br>
							Second Part(Surname):<span class="error" >* </span><input type="text" name="name2"><span class="error" > <?php echo $errors['$name2Err']; ?></span>
							<br><br><br>
							Guardian <input type="checkbox" name="guardian" value="true"> <span class="error" >"Tick" </span>only if Applicant is legally adapted
							<br><br>
							Father's name:<span class="error" >* </span> <input type="text" name="Fname"> 
							<span class="error" > <?php echo  $errors['FnameErr']; ?></span>
							<br><br>
							Father's Nationality:<span class="error" >* </span>
								<select name="Fnationality">
									<option value="BD">BANGLADESHI</option>
									<option value="Not BD">Not BD</option>
								</select>
							<br><br>
							Father's Profession:<span class="error" >* </span>
								<select name="Fprofession">
									<option value="">-SELECT-</option>
									<option value="accountant">ACCOUNTANT</option>
									<option value="teacher">TEACHER</option>
								</select>
								<span class="error" > <?php echo $errors['FprErr'] ;?></span>
							<br><br>
							Mother's name:<span class="error" >* <</span> <input type="text" name="Mname">
							<span class="error" > <?php echo   $$errors['MnameErr'] ;?></span>
							<br><br>
							Mother's Nationality:<span class="error" >* </span>
								<select name="Mnationality">
									<option value="BD">BANGLADESHI</option>
									<option value="Not BD">Not BD</option>
								</select>
							<br><br>
							Mother's Profession:<span class="error" >* </span>
								<select name="Mprofession">
									<option value="">-SELECT-</option>
									<option value="housewife">HOUSEWIFE</option>
									<option value="jobholder">JOBHOLDER</option>
								</select>
								<span class="error" > <?php echo  $errors['MprErr'] ;?></span>
							<br><br>
							Spouse's name: <input type="text" name="Sname">
							<br><br>
							Spouse's Nationality:
								<select name="Snationality">
									<option value="BD">-SELECT-</option>
									<option value="Not BD">Not BD</option>
								</select>
							<br><br>
							Spouse's Profession:
								<select name="Sprofession">
									<option value="BD">-SELECT-</option>
									<option value="Not BD">Not BD</option>
								</select>
							<br><br>
							Marital Status:<span class="error" >* </span>
								<select name="marital">
									<option value="">-SELECT-</option>
									<option value="single">SINGLE</option>
									<option value="married">MARRIED</option>
									<option value="divorced">DIVORCED</option>
									<option value="widivorced">WIDIVORCED</option>
								</select>
								<span class="error" > <?php echo $errors['maritalErr'] ;?></span>
							<br><br>
							Applicant's Profession:<span class="error" >* </span>
								<select name="profession">
									<option value="">-SELECT-</option>
									<option value="accountant">ACCOUNTANT</option>
									<option value="artist">ARTIST</option>
									<option value="bechelor">BECHELOR</option>
								</select>
								<span class="error" > <?php echo $errors['prolErr']  ;?></span>
							<br><br>
							Country of Birth:<span class="error" >* </span>
								<select name="Cbirth">
									<option value="BD">BANGLADESH</option>
									<option value="Not BD">Not BD</option>
								</select>
							<br><br>
							Birth District:<span class="error" >* </span>
								<select name="Dbirth">
									<option value="">-SELECT-</option>
									<option value="dhaka">DHAKA</option>
									<option value="comilla">COMILLA</option>
								</select>
								<span class="error" > <?php echo  $errors['DbirthErr'] ;?></span>
							<br><br>
					</td>
					<td class="column_2">
							Date of Birth:<span class="error" >* </span> <input type="text" name="dob">
							<span class="error" > <?php echo $errors['dobErr'] ;?></span>
							<br><br>
							Gender: <span class="error" >* </span>
								<input type="radio" name="gender" value="male">Male<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="gender" value="female">Female<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="gender" value="others">Others
								<span class="error" > <?php echo $errors['genderErr'] ;?></span>
							<br><br>
							Birth ID No: <span class="error" >* </span> <input type="number" name="birthID">
							<span class="error" > <?php echo $errors['birthIDErr'] ;?></span>
							<br><br>
							National ID No:<input type="number" name="nationalID">
							<br><br>
							Tax ID No:<input type="number" name="taxID">
							<br><br>
							Height:<span class="error" >* </span> <input type="number" name="cm"> &nbsp;cm &nbsp; <input type="number" name="inch"> &nbsp; inch
							<span class="error" > <?php echo $errors['heightErr']  ;?></span>
							<br><br>
							Religion:<span class="error" >* </span>
								<select name="religion">
									<option value="">-SELECT-</option>
									<option value="islam">ISLAM</option>
									<option value="hindu">HINDUISM</option>
									<option value="other">OTHERS</option>
								</select>
								<span class="error" > <?php echo $errors['religionErr'] ;?></span>
							<br><br>
							Email:<span class="error" >* </span> <input type="text" name="email">
							<span class="error" > <?php echo  $errors['emailErr'] ;?></span>
							<br><br><br>
						<p style="color:green">Citizenship Information</p><br>
							Nationality:<span class="error" >* <?php ?></span>
								<select name="nationality">
									<option value="BD">BANGLADESH</option>
									<option value="Not BD">Not BD</option>
								</select>
							<br><br>
							Citizenship Status:<span class="error" >* </span>
								<select name="citizen">
									<option value="BD">BIRTH</option>
									<option value="migration">MIGRATION</option>
									<option value="other">OTHERS</option>
									
								</select>
								
							<br><br>
							Dual Citizenship: <span class="error" >* </span>
								<input type="radio" name="Dcitizen" value="yes">Yes<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="Dcitizen" value="no">No
								<span class="error" > <?php echo $errors['dualcitizErr'] ;?></span>
							<br><br><br>
						<p style="color:green">Present Address</p><br>
							Village/House:<input type="text" name="house">
							<br><br>
							Road/Block/Sector:<input type="text" name="road">
							<br><br>
							District:<span class="error" >* </span>
								<select name="district">
									<option value="">-SELECT-</option>
									<option value="Not BD">Not BD</option>
								</select>
								<span class="error" > <?php echo $errors['districtErr'] ;?></span>
							<br><br>
							Police  Station:<span class="error" >* </span>
								<select name="police">
									<option value=""></option>
									<option value="Not BD">Not BD</option>
								</select>
								<span class="error" > <?php echo $errors['policeErr'] ;?></span>
							<br><br>
							Post Office:<span class="error" >* </span>
								<select name="postOffice">
									<option value="">-SELECT-</option>
									<option value="Not BD">Not BD</option>
								</select>
								<span class="error" > <?php echo $errors['postErr'] ;?></span>
							<br><br><br>
						<p style="color:green">Permanent Address</p><br>
							Village/House:<input type="text" name="Phouse">
							<br><br>
							Road/Block/Sector:<input type="text" name="Proad">
							<br><br>
							District:<span class="error" >* </span>
								<select name="Pdistrict">
									<option value="">-SELECT-</option>
									<option value="Not BD">Not BD</option>
								</select>
								<span class="error" > <?php echo $errors['PdistrictErr'] ;?></span>
							<br><br>
							Police  Station:<span class="error" >* </span>
								<select name="Ppolice">
									<option value=""></option>
									<option value="Not BD">Not BD</option>
								</select>
								<span class="error" > <?php echo $errors['PpoliceErr'] ;?></span>
							<br><br>
							Post Office:<span class="error" >* span>
								<select name="PpostOffice">
									<option value="">-SELECT-</option>
									<option value="Not BD">Not BD</option>
								</select>
								<span class="error" > <?php echo $errors['PpostErr'] ;?></span>
					</td>
				<tr>
				<tr>
					<td colspan="2" class="column_3">
						<input type="submit" name="submit1" value="SAVE NOW & CONTINUE IN THE FUTURE" style="border-radius:5px">&nbsp; &nbsp;
						<input type="submit" name="submit2" value="SAVE & NEXT" style="text-align:center; width:10%; border-radius:5px">
					</td>
				</tr>
			</table>
		</form>


	</body>
</html>