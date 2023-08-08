<?php 
include_once("include/db.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drag and Drop Reorder with jQuery, PHP & MySQL</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="">
	<div class="container" style="min-height:500px;">
		<div class="container">
			<h2>Images</h2>
			<div>		
				<div class="gallery">
					<ul class="reorder-gallery">
					<?php 			
					$sql_query = "SELECT id, image_name FROM gallery ORDER BY display_order";
					$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
					$data_records = array();
					while( $row = mysqli_fetch_assoc($resultset)) {				
					?>
						<li id="<?php echo $row['id']; ?>" class="ui-sortable-handle"><a href="javascript:void(0);"><img src="images/<?php echo $row['image_name']; ?>" alt=""></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="insert-post-ads1" style="margin-top:20px;"></div>
	</div>
</body>
</html>




