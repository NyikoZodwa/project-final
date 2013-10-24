<html>
	<head>
		<title>iVeri Lite Example in PHP 5</title>
	</head>
	<body>
		URL Page Result: <b><?php echo $_GET['Result']; ?></b>
		<br />
        LITE_PAYMENT_CARD_STATUS: <b><?php echo $_POST['LITE_PAYMENT_CARD_STATUS']; ?></b>
        <br />
        LITE_RESULT_DESCRIPTION: <b><?php echo $_POST['LITE_RESULT_DESCRIPTION']; ?></b>
        <br />
        <br />
		<table>
			<tr>
				<td style="text-decoration:underline;">Parameter</td>
				<td style="text-decoration:underline;">Value</td>
			</tr>
		<?php
			foreach($_POST as $key => $value) {
		?>
			<tr>
				<td><?php echo $key; ?></td>
				<td><?php echo $value; ?></td>
			</tr>
		<?php
			}
		?>
		</table>
	</body>
<html>