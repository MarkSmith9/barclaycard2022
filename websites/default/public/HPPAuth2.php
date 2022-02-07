<html>
<head>
<?php
	$transaction_uuid = $_POST['transaction_uuid'];
	$locale = $_POST['locale'];
	$transaction_type = $_POST['transaction_type'];
	$reference_number = $_POST['reference_number'];
	$amount = $_POST['amount'];
	$currency = $_POST['currency'];
	$signed_date_time = $_POST['signed_date_time'];
	$access_key = $_POST['access_key'];
	$profile_id = $_POST['profile_id'];
	$signed_field_names = $_POST['signed_field_names'];
	// $unsigned_field_names = $_POST['unsigned_field_names'];

        $SECRET_KEY = "17df99e6f888405ca81cf70f16cd4ce6397df16790d447ec94dd6abb1b4c629496e88f8cff9340ad8c8e53620f99d09eaeb2a1e3076240188fbf2f5a2f6b19759d352df23ff64761ad00ddbf8d1214c80cb311945b7e4173821f7c3acb26e7bb1dc42c245a724ab6aba7a0ee911bb9fa471900d92e1542af9a3d3249b4de926d";

	define ('SECRET_KEY', '17df99e6f888405ca81cf70f16cd4ce6397df16790d447ec94dd6abb1b4c629496e88f8cff9340ad8c8e53620f99d09eaeb2a1e3076240188fbf2f5a2f6b19759d352df23ff64761ad00ddbf8d1214c80cb311945b7e4173821f7c3acb26e7bb1dc42c245a724ab6aba7a0ee911bb9fa471900d92e1542af9a3d3249b4de926d');


	foreach($_REQUEST as $parameter_name => $parameter_value) {
        $params[$parameter_name] = $parameter_value;
    }

	function sign ($params) {
		return signData(buildDataToSign($params), SECRET_KEY);
	}

	function signData($data, $secretKey) {
		return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
	}

	function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
           $dataToSign[] = $field . "=" . $params[$field];
        }
        return commaSeparate($dataToSign);
	}

	function commaSeparate ($dataToSign) {
		return implode(",",$dataToSign);
	}

?>
        <style>
                table, th, td
		{
			border: 1px solid black;
			border-collapse: collapse;
                        font-face: Tahoma;
		}

		th, td
		{
			padding: 5px;
		}
	</style>
</head>
<body>
        <font face="Tahoma">

	<h1>
		Smartpay Fuse Pre Payment HPP
	</h1>
	<form method="post" action="https://testsecureacceptance.cybersource.com/pay" name="GatewayPush">
	<table>
		<col width="180">
		<col width="180">

	<?php
            foreach($params as $parameter_name => $parameter_value) {
                echo "<tr><td>" . $parameter_name . "</td><td>" . $parameter_value . "</td></tr>";
            }
        ?>
	</table>

	<?php
        foreach($params as $parameter_name => $parameter_value) {
            echo "<input type=\"hidden\" id=\"" . $parameter_name . "\" name=\"" . $parameter_name . "\" value=\"" . $parameter_value . "\"/>\n";
        }
        echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";

		echo "<br><br>";
		print buildDataToSign($params);
		echo "<br><br>";
		print sign($params);
    ?>
	<br /><br />

	<input type="submit" id="submit" value="Pay up!" style="background-color:#FFFFFF; height:30; width:150">
	</form>
</body>
</html>
