
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
		<h3>PASSPORT APPLICATION - REVIEW ENROLMENT SUMMARY</h3>
		<P style="color:green; font-size: 12px;">Online application ID: OA0000004008216<P>
		<P style="color:green; font-size: 12px;">Enrolment Date: 26/06/2018<P>
		<p><span class="error">Reminder before submitting your application</span></P>
		<?php
	
		?>
		<form action="" method="post">
			<table class="stage1" style="border-collapse:collapse;border-color:gray;width:100%;text-align:left;">
				<tr>
					<td class="column_1">
						<p style="color:green">Personal Information Summary</p><br>
							
							Name of Applicant:
							<br><br>
							Second Part(Surname):
							<br><br>
							First Part(given Name):
							<br><br>
							Gender:
							<br><br>
							Nationality:
							<br><br>
							Date of Birth:
							<br><br>
							Place of Birth:
							<br><br>
							Father's Name:
							<br><br>
							Mother's name:
							<br><br>
							Spouse's name:
							<br><br>
							National ID No:
							<br><br>
							Birth ID No:
							<br><br>
							Old Passport No:
							<br><br>
							
					</td>
					<td class="column_2">
						<p style="color:green">Passport Information Summary</p><br>
							Applying in:
							<br><br>
							Passport Type:
							<br><br>
							Application Type:
							<br>
						<p style="color:green">Contact Information Summary</p><br>
							Mobile No:
							<br><br>
							Present Address:
							<br><br>
							Permanent Address:
							<br><br>
							Email:
							<br>
						<p style="color:green">Payment Information Summary</p><br>
							Payment Amount:
							<br><br>
							Payment Date:
							<br><br>
							Receipt No:
							<br><br>
							Bank Name:
							<br><br>
							Bank Branch:
					</td>
				<tr>
				<tr>
					<td colspan="2" class="column_3">
					<p class="error" style="text-align:left">Reminder: Bring old passport during collection of MRP; No correction after handover of delivery slip without fee.</p>
						<input type="submit" name="submit5" value="PREVIOUS PAGE" style="border-radius:5px; width:10%; text-align:center">&nbsp; &nbsp;
						<input type="submit" name="submit6" value="SAVE" style="text-align:center; width:10%; border-radius:5px">
					</td>
				</tr>
			</table>
		</form>


	</body>
</html>