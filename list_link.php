<!DOCTYPE>
<html>
<head>
	<title>OM Application Center</title>
</head>
<style type="text/css">
	.block{
		border-radius: 10px;
		border: 1px solid #e3e3e3;
		margin-bottom: 1%;
	}
	.banner{
		color: #1b63a2;
		padding-top: 10%;
		padding-left: 2%;
		padding-right: 2%;
		padding-bottom: 2%;
	}
	.group{
		padding-top: 1%;
		padding-left: 2%;
		padding-right: 2%;
		padding-bottom: 3%;
	}
	.column{
		height: 30px;
		border: 1px solid #e3e3e3;
		padding-top: 2%;
		padding-left: 2%;
		padding-right: 2%;
	}
	.column:first-of-type {
  		border-top-left-radius: 10px;
  		border-top-right-radius: 10px;
	}
	.column:last-of-type {
  		border-bottom-left-radius: 10px;
  		border-bottom-right-radius: 10px;
	}
	a:active {
  		text-decoration: underline;
	}
	a{
		color: #0088cc;
	}
	a:active{
		color: #FF0000;;
	} 
</style>
<body>
	<div class="container-fluid">
	<h3>OM App Center List</h3>
	<hr color="#e3e3e3">
	<div class="row">
		<?php if($_GET["list_menu"]=="center"){ ?> 
		<div class="block">
			<br>
			<span class="banner">CENTER</span>
			<hr color="#e3e3e3">
			<div class="group">
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายวัน</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายสัปดาห์</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายเดือน</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายปี</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายไตรมาศ</a></div>
				<div class="column"><a href="http://localhost/om_order_status/index.php" target="blank">Order Status</a></div>
			</div>
		</div>
		<?php }elseif($_GET["list_menu"]=="market"){ ?> 
		<div class="block">
			<br>
			<span class="banner">การตลาด</span>
			<hr color="#e3e3e3">
			<div class="group">
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายวัน</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายสัปดาห์</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายเดือน</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายปี</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายไตรมาศ</a></div>
				<div class="column"><a href="http://localhost/om_order_status/index.php" target="blank">Order Status</a></div>
			</div>
		</div>
		<?php }elseif($_GET["list_menu"]=="manufacture"){ ?> 
		<div class="block">
			<br>
			<span class="banner">ผลิต</span>
			<hr color="#e3e3e3">
			<div class="group">
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายวัน</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายสัปดาห์</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายเดือน</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายปี</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายไตรมาศ</a></div>
				<div class="column"><a href="http://localhost/om_order_status/index.php" target="blank">Order Status</a></div>
			</div>
		</div>
		<?php }elseif($_GET["list_menu"]=="purchase"){ ?> 
		<div class="block">
			<br>
			<span class="banner">จัดซื้อ</span>
			<hr color="#e3e3e3">
			<div class="group">
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายวัน</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายสัปดาห์</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายเดือน</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายปี</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายไตรมาศ</a></div>
				<div class="column"><a href="http://localhost/om_order_status/index.php" target="blank">Order Status</a></div>
			</div>
		</div> 
		<?php }elseif($_GET["list_menu"]=="qc"){ ?> 
		<div class="block">
			<br>
			<span class="banner">QC</span>
			<hr color="#e3e3e3">
			<div class="group">
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายวัน</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายสัปดาห์</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายเดือน</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายปี</a></div>
				<div class="column"><a href="index.php" target="_blank">รายงานยอดขายรายไตรมาศ</a></div>
				<div class="column"><a href="http://localhost/om_order_status/index.php" target="blank">Order Status</a></div>
			</div>
		</div> 
		<?php } ?>
	</div>
	</div>
</body>
</html>