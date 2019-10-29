<!DOCTYPE html>
<html>
<head>
	<title>CALCULATOR</title>
	<link rel="stylesheet" href="maytinh.css" />
</head>
<body>
	<?php
		if(isset($_POST['kq'])){
		    $number1 = $_POST['kq'];
		}else{
		    $number1 = 0;
		}	
		if(isset($_POST['kq_out'])){
		    $ket_qua = $_POST['kq_out'];
		}else{
		    $ket_qua = 0;
		}
		if (isset($_POST['number_1'])) {
    		$display = "1";
		}
		if (isset($_POST['number_2'])) {
		    $display = "2";
		}
		if (isset($_POST['number_3'])) {
		    $display = "3";
		}
		if (isset($_POST['number_4'])) {
		    $display = "4";
		}
		if (isset($_POST['number_5'])) {
		    $display = "5";
		}
		if (isset($_POST['number_6'])) {
		    $display = "6";
		}
		if (isset($_POST['number_7'])) {
		    $display = "7";
		}
		if (isset($_POST['number_8'])) {
		    $display = "8";
		}
		if (isset($_POST['number_9'])) {
		    $display = "9";
		}
		if (isset($_POST['number_0'])) {
		    $display = "0";
		}
		if (isset($_POST['cham'])) {
		    $display = ".";
		}
		if (isset($_POST['opera_cong'])) {
		    $display = "+";
		}
		if (isset($_POST['opera_tru'])) {
		    $display = "-";
		}
		if (isset($_POST['opera_chia'])) {
		    $display = "/";
		}
		if (isset($_POST['opera_nhan'])) {
		    $display = "*";
		}
		if (isset($_POST['xoa_sach'])) {
		    $display = "clear";
		}
		if (isset($_POST['xoa'])) {
		    $display = "del";
		}
		if (isset($_POST['bang'])) {
		    $display = "calc";
		}

		if ($display == "calc") {
		    // Calculate using eval 
			$ket_qua = eval('return ' . $number1 . ';');
		} else if ($display == "del") {
		        $number1 = substr($number1,0,strlen($number1)-1);
		} else{
		    // Append input to formula
		    $number1 .= $display;
		}

		if ($display == "clear") {
		    $number1 = "";
		    $ket_qua = "0";
		}


	?>
	<form method="post" action="#" id="form1" name="cal">
		
		<table id="table_mt" style="border: 1px solid black">
			<tr>
				<input style = "border-bottom: none !important" type="text" name="kq" id="result" value="<?php echo $number1?>">
			</tr>
			<br>
			<tr>
				<input type="text" name="kq_out" id="result_kq" value="<?php echo $ket_qua?>" style = "height: 40px;width: 314px;border: 1px solid black;font-size: 20px; border-top: none; border-bottom: 1px solid white">
			</tr>
			<tr>
				<td><input type="submit" id="btnCE" value="CE" class = "btn" name = "xoa_sach" ></td>
				<td><input type="submit" id="btnDEL" value="Del" class = "btn" name = "xoa"></td>
				<td><input type="submit" id="btnCONG" value="+" class = "btn" name = "opera_cong"></td>
			</tr>
			<tr>
				<td><input type="submit" id="btnTRU" value="-" class = "btn"  name = "opera_tru"></td>
				<td><input type="submit" id="btnNHAN" value="*" class = "btn" name = "opera_nhan"></td>
				<td><input type="submit" id="btnCHIA" value="/" class = "btn" name = "opera_chia"></td>
			</tr>
			<tr>
				<td><input type="submit" id="btn9" value="9" class = "btn"  name = "number_9"></td>
				<td><input type="submit" id="btn8" value="8" class = "btn" name = "number_8"></td>
				<td><input type="submit" id="btn7" value="7" class = "btn" name = "number_7" ></td>
			</tr>
			<tr>
				<td><input type="submit" id="btn6" value="6" class = "btn" name = "number_6"></td>
				<td><input type="submit" id="btn5" value="5" class = "btn" name = "number_5"></td>
				<td><input type="submit" id="btn4" value="4" class = "btn" name = "number_4"></td>
			</tr>
			<tr>
				<td><input type="submit" id="btn3" value="3" class = "btn" name = "number_3"></td>
				<td><input type="submit" id="btn2" value="2" class = "btn" name = "number_2"></td>
				<td><input type="submit" id="btn1" value="1" class = "btn" name = "number_1"></td>
			</tr>
			<tr>
				<td><input type="submit" id="btn0" value="0" class = "btn" name = "number_0"></td>
				<td><input type="submit" id="btnCHAM" value="." class = "btn" name = "cham"></td>
				<td><input type="submit" id="btnBANG" value="=" class = "btn" name = "bang"></td>
			</tr>
		</table>		
	</form>
	
	
</body>
</html>