<html>
	<head>
		<style>
			table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
                                font-face: Tahoma;
			}

			th, td {
				padding: 5px;
			}
		</style>
	</head>
	<body>
		<font face="Tahoma">
			<h1>Payment Page</h1>
			<p></p>
			<form method="post" action="HPPAuth2.php" name=BaseForm id="form1">
				<table hidden>
					<col width="180">
					<col width="180">
					<tr>
						<td><font face="Tahoma" color="#000000">transaction_uuid</font></td>
						<td>							<input type="text" name="transaction_uuid" value="<?php echo uniqid() ?>" >						</td>
					</tr>

					<tr>
						<td><font face="Tahoma" color="#000000">locale</font>						</td>
						<td><input type="text" name="locale" value="en">						</td>
					</tr>

					<tr>
						<td>							<font face="Tahoma" color="#000000">transaction_type</font>						</td>
						<td>							<input type="text" name="transaction_type" value="authorization">						</td>
					</tr>

					<tr>
						<td>
							<font face="Tahoma" color="#000000">reference_number</font>
						</td>
						<td>
							<input type="text" name="reference_number" value="Ref_No <?php echo gmdate("d-m-Y\H:i:s\Z"); ?>">
						</td>
					</tr>

					<tr>
						<td>
							<font face="Tahoma" color="#000000">amount</font>
						</td>
						<td>
							<input type="text" name="amount" value="<?=$_POST['total']?>">
						</td>
					</tr>

					<tr>
						<td>
							<font face="Tahoma" color="#000000">currency</font>
						</td>
						<td>
							<input type="text" name="currency" value="GBP">
						</td>
					</tr>

					<tr>
						<td>
							<font face="Tahoma" color="#000000">signed_date_time</font>
						</td>
						<td>
							<input type="text" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
						</td>
					</tr>

					<tr>
						<td>
							<font face="Tahoma" color="#000000">access_key</font>
						</td>
						<td>
                                                        <input type="text" name="access_key" value="8b2864a9b94339f5af95940c0d968992">
						</td>
					</tr>

					<tr>
						<td>
							<font face="Tahoma" color="#000000">profile_id</font>
						</td>
						<td>
                                                        <input type="text" name="profile_id" value="9207FCBE-3777-41D0-82D6-4706E52DD773">
						</td>
					</tr>

                                        <tr>
						<td colspan="2">
							<font face="Tahoma" color="#000000"><b>Do not change unless necessary</b></font>
						</td>
					</tr>

					<tr>
						<td>
							<font face="Tahoma" color="#000000">signed_field_names</font>
						</td>
						<td>
							<input type="text" name="signed_field_names" value="access_key,amount,currency,locale,profile_id,reference_number,signed_date_time,signed_field_names,transaction_type,transaction_uuid">
						</td>
					</tr>

					<tr>
						<td align="center">
							<input type="submit" value="Pay up!" style="background-color:#FFFFFF; height:30; width:150">
						</td>
						<td align="center">
							<input type="button" value="Clear the field!" style="background-color:#FFFFFF; height:30; width:150" onclick="resetFunction()">
						</td>
					</tr>
				</table>
			</form>
		</font>


		<script>document.getElementById("form1").submit();</script>
		


	</body>
</html>
