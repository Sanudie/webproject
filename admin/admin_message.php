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
				$donations = mysqli_query($conn, "SELECT * FROM `donate`") or die('query failed');
				if(mysqli_num_rows($donations) > 0){
					while($fetch_donations = mysqli_fetch_assoc($donations)){


			?>
			<div class="box">
                <p>Name:<?php echo $fetch_donations['Name']; ?></p>
                <p>Email:<?php echo $fetch_donations['Email']; ?></p>
				<p>Adrress: <?php echo $fetch_donations['Address']; ?> </p>
				<p>City: <?php echo $fetch_donations['City']; ?> </p>
                <p>State:<?php echo $fetch_donations['State']; ?></p>
               <p>Amount:<?php echo $fetch_donations['Amount']; ?></p>
		

			
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