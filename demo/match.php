<?php
    require_once('connect.php');
	$size = $_POST['size'];
	$material = $_POST['material'];
	$sql = "select * from variventn where size='$size' and material='$material'";
	$query = mysqli_query($con,$sql);
	if($query&&mysqli_num_rows($query)){
		$result = mysqli_fetch_assoc($query);
	}else{
		echo "can not connect";
	}
?>
<!doctype html>
<html>
 <head>
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <link href="css/varivent-n.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript"></script>
  <title>VARIVENT N</title>
 </head>
 <body>
  <div class="block">
     <!--标题栏-->
     <div class="header">
	     <div class="header-title">
             <h1>VARIVENT<sup>&reg;</sup></h1>
             <li><i>Shut-off Valve </i><b>N</b></li>
		 </div>
		 <div class="header-logo">
		     <image src="pictures/logo.jpg" alt="GEA LOGO" height="80px" align="right" />
		 </div>
     </div>
	 <!--示意图和备件信息栏-->
	 <div class="drowing">
	     <div class="order-code">
	         <a><i><b>Order Code Example--- </b></i><a title="Valve Type">NL</a>-<a title="Size">DN40</a>-SZ-TM1L3BAM-</a><a href="" title="Actuator">BD</a><a>-V1-12N/52</a>
	     </div>
		 <div class="picture">
		     <image src="pictures/varivent-n.png" title="Spare parts drawing" alt="VARIVENT N" height="600px" align="left"/>
		 </div>
		 <div class="spare-details">
		     <image src="pictures/Varivent N_.png" height="600px"/>
		 </div>
		 <div class="select">
		     <p>>>Please select valve parameters below to find spare parts number</p>
		     <form id="parameters" class="parameters" method="post" action="">
			 <select id="size" class="size" name="size"><!--选择尺寸-->
			     <option>--Select Size--</option>
			     <option>DN25</option>
				 <option>DN40</option>
				 <option>DN50</option>
				 <option>DN65</option>
				 <option>DN80</option>
				 <option>DN100</option>
				 <option>DN125</option>
				 <option>DN150</option>
				 <option>OD1"</option>
				 <option>OD1.5"</option>
				 <option>OD2"</option>
				 <option>OD2.5"</option>
				 <option>OD3"</option>
				 <option>OD4"</option>
				 <option>OD6"</option>
			 </select>
			 <select id="material" class="material" name="material"><!--选择材质-->
			 <option>--Select Material--</option>
			 <option>EPDM</option>
			 <option>FKM</option>
			 </select>
			 <button class="submit" type="submit">Submit</button>
			 <li><?php echo "SIZE: ";print_r($result['size']);?></li>
			 <li><?php echo "MATERIAL: ";print_r($result['material']);?></li>
			 <li><?php echo "SEALING SET: ";print_r($result['sealingset']);?></li>
			 </form>
		 </div>
	 
     </div>
	 <!--底部栏-->
	 <div class="bottom">
	     <image src="pictures/bottomlogo.jpg" height="40px" align="left" style="margin-left:40px;"/>
		 <div class="bottom-item">
		 <button class="button1">Reference</button>
		 <button class="button2">Back to home page </button>
		 <button class="button3"> See something behind</button>
		 <span>Since 2017<sub>_REV 1.0.2</sub></span>
		 </div>
	 </div>
  
  </div>
 </body>
 </html>