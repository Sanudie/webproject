<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage pets</title>
    <link rel="stylesheet" type="text/css" href="styles3.css">
</head>
<body>

<?php include 'headeradmin.php';
 include 'connection.php'?>
<section class="show-pets">
		<div class="box-container">
			<?php 
				$requests = mysqli_query($conn, "SELECT * FROM `requests`") or die('query failed');
				if(mysqli_num_rows($requests) > 0){
					while($fetch_requests = mysqli_fetch_assoc($requests)){


			?>
			<div class="box">
                <p>Name:<?php echo $fetch_requests['adopter_name']; ?></p>
				<p>Adrress: <?php echo $fetch_requests['address']; ?> </p>
				<p>Have pets?: <?php echo $fetch_requests['havepets']; ?> </p>
				<p>email:<?php echo $fetch_requests['adopter_email']; ?></p>
				<p class="detail"><?php echo $fetch_requests['takingcare']; ?></p>

			
			</div>
			<?php 
					}
				}
			?>
		</div>
	</section>
    <script type="text/javascript" src="script.js"></script>


            </body>
            </html>