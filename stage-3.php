
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
		<h3>PASSPORT APPLICATION - STAGE 3</h3>
		<P style="color:green; font-size: 12px;">Online application ID: OA0000004008216<P>
		<p>Fields marked with <span class="error">(*)</span> are mandatory</P>
		<?php
	
		?>

		<form action="temp.php" method="post">
			<table class="stage1" style="border-collapse:collapse;border-color:gray;width:100%;text-align:left;">
				<tr>
					<td class="column_1">
						<p style="color:green">Payment Information</p><br>
							Payment Type: <input type="radio" name="payment" value="online">Online<br>
										  <input type ="radio" name="payment" value="non-online">Non-Online
							<br><br>
							<input type="checkbox" name="skip" value="true"> Skip Payment
							<br><br>
							Amount:<span class="error" >* <?php ?></span>
								<select name="amount_type">
									<option>BDT</option>
								</select>
								&nbsp;
								<input type="number" name="amount">
							<br><br>
							Date of Payment:<span class="error" >* <?php ?></span> <input type="text" name="p_date">
							<br><br>
							Receipt No: <span class="error" >* <?php ?></span> <input type="text" name="receipt">
							<br><br>
							Name of Bank: 
								<select name="name_bank">
									<option>-SELECT-</option>
								</select>
							<br><br>
							Name of Branch: 
								<select name="name_branch">
									<option></option>
								</select>
							<br><br>
								
					</td>
					<td class="column_2">
						
					</td>
				<tr>
				<tr>
					<td colspan="2" class="column_3">
						<input type="submit" name="submit5" value="PREVIOUS PAGE" style="border-radius:5px; width:10%; text-align:center">&nbsp; &nbsp;
						<input type="submit" name="submit6" value="SAVE & NEXT" style="text-align:center; width:10%; border-radius:5px">
					</td>
				</tr>
			</table>
		</form>


	</body>
</html>