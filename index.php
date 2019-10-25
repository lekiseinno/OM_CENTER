<!DOCTYPE html>
<html>
<head>
	<title>OM Application Center</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- icon -->
	<link rel="stylesheet" type="text/css" href="asset/css/default.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/component.css" />

    <!-- fancybox css -->
    <link rel="stylesheet" type="text/css" href="asset/fancybox-2.1.7/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- fancybox script -->
    <!-- Add jQuery library -->
    <script type="text/javascript" src="asset/fancybox-2.1.7/lib/jquery-1.10.2.min.js"></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="asset/fancybox-2.1.7/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="asset/fancybox-2.1.7/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script src="asset/js/modernizr.custom.js"></script>
<style type="text/css">
	body{
		background-image: url(picture/banner.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		color: #000000;
		/*font-family: Arial, Helvetica, sans-serif;*/
		/*font-family: Verdana, Arial, Helvetica, sans-serif;*/
		font-family: Times, Times New Roman, Georgia, serif;
	}
	.row{
		vertical-align: middle;
		max-width: 75%;
		height: 100%;
		margin-top: 5%;
		margin-left: 15%;
		margin-right: 15%;
		border: 5px solid rgb(139,69,19,0.7);
		border-radius: 10px;
		box-shadow: 1px 2px 3px rgba(0,0,0,0.2);
		background:rgb(65, 171, 107, 0.7);
	}
	/*.column{
		margin-top: 1%;
		margin-bottom: 1%;
		width: 100%;
		display: flex;
	}
	.circle_test{
		background: rgba(255, 255, 255, 0.7);
    	padding: 2em 2em;
    	text-align: center;
    	border: 10px solid #62abc5;
    	border-radius: 100%;
    	height: 250px;
    	width: 20%;
    	margin: 0 auto;
	}*/
	.hi-icon-wrap{
		display: inline-flex;
		width: 100%;
	}
	.hi-icon{
		width: 20%;
		height: 250px;
		margin: 10px 10px;
		font-size: 17.5px;
	}
	.hi-icon:before{
		line-height: normal;
		margin-top: 35%;
		margin-bottom: 5%;
	}
	.hi-icon-effect-1 .hi-icon {
		background: rgba(255,255,255,0.4);
	}
</style>
</head>
<body>
<div class="container-fluid">
	<h1 style="text-align: center;margin-top: 1%;margin-bottom: -3%;">OM Application Center</h1>
	<div class="row">
		<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
		<a href="list_link.php?list_menu=center" class="fancybox fancybox.iframe hi-icon hi-icon-earth">CENTER</a>
		<a href="list_link.php?list_menu=market" class="fancybox fancybox.iframe hi-icon hi-icon-videos">การตลาด</a>
		<a href="list_link.php?list_menu=manufacture" class="fancybox fancybox.iframe hi-icon hi-icon-cog">ผลิต</a>
		<a href="list_link.php?list_menu=purchase" class="fancybox fancybox.iframe hi-icon hi-icon-chat">จัดซื้อ / คลังม้วน</a>
		<a href="list_link.php?list_menu=qc" class="fancybox fancybox.iframe hi-icon hi-icon-locked">QC</a>
		</div>
		<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
		<a href="#set-1" class="fancybox fancybox.iframe hi-icon hi-icon-location">จัดซื้อ / คลังม้วน / วิศวกรรม / จัดส่ง / บุคคล / ขนส่ง</a>
		<a href="#set-1" class="fancybox fancybox.iframe hi-icon hi-icon-images">GRAPH</a>
		<a href="#set-1" class="fancybox fancybox.iframe hi-icon hi-icon-link">อื่นๆ</a>
		<a href="#set-1" class="fancybox fancybox.iframe hi-icon hi-icon-support">Support</a>
		<a href="#set-1" class="fancybox fancybox.iframe hi-icon hi-icon-archive">Report</a>
		</div>
		<!--<div class="column">
		<div class="circle_test" data-container="container">Test</div>
		<div class="circle_test" data-container="container">Test</div>
		<div class="circle_test" data-container="container">Test</div>
		<div class="circle_test" data-container="container">Test</div>
		</div> -->
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	  $('.fancybox').fancybox({
        width: 750
        // ,
		// height: 50
      });
	});
</script>
</body>
</html>