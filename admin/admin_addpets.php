
<?php 
	include 'connection.php'; 
	session_start();
	           /*check the database connection*/


			/*------adding pets to the database--*/
if (isset($_POST['AddPets'])) {
	$pet_name = mysqli_real_escape_string($conn, $_POST['pet_name']);
	$pet_age = mysqli_real_escape_string($conn, $_POST['pet_age']);
	$pet_details = mysqli_real_escape_string($conn, $_POST['pet_details']);
	$pet_gender = mysqli_real_escape_string($conn, $_POST['pet_gender']);
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'image/'.$image;

    $select_pet_name= mysqli_query($conn, "SELECT pet_name FROM `pets` WHERE pet_name = '$pet_name'") or die('query failed');
    if(mysqli_num_rows($select_pet_name) > 0){
        $message[] = 'This name is already taken';
    }else{
		$insert_pet = mysqli_query($conn, "INSERT INTO `pets`(`pet_name`, `pet_age`, `pet_details`, `image`, `pet_gender`) VALUES('$pet_name', '$pet_age', '$pet_details', '$image', '$pet_gender')") or die('query failed');

        if($insert_pet){
            if ($image_size > 2000000) {
                $message[] = 'image size is too large';
            }else{
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'pet added successfully';
            }
        }
    }
}

/*-----------deleting pets--------------------*/
if (isset($_GET['delete'])) {
	$delete_id = $_GET['delete'];
	$select_delete_image = mysqli_query($conn, "SELECT image FROM `pets` WHERE pet_id = '$delete_id'") or die('query failed');
	$fetch_delete_image = mysqli_fetch_assoc($select_delete_image);
	unlink('image/'.$fetch_delete_image['image']);

	mysqli_query($conn, "DELETE FROM `pets` WHERE pet_id = '$delete_id'") or die('query failed');


	header('location:admin_addpets.php');



}


if (isset($_GET['pet_id'])) {
    $pet_id = $_GET['pet_id'];
    $select_pet = mysqli_query($conn, "SELECT * FROM `pets` WHERE pet_id = '$pet_id'") or die('query failed');
    $fetch_pet = mysqli_fetch_assoc($select_pet);
}

if (isset($_POST['UpdatePet'])) {

    $pet_name = mysqli_real_escape_string($conn, $_POST['pet_name']);
    $pet_age = mysqli_real_escape_string($conn, $_POST['pet_age']);
    $pet_details = mysqli_real_escape_string($conn, $_POST['pet_details']);
    
  

    $update_pet = mysqli_query($conn, "UPDATE `pets` SET `pet_name`='$pet_name', `pet_age`='$pet_age', `pet_details`='$pet_details',  WHERE `pet_id`='$pet_id'") or die('update query failed');

    if ($update_pet) {
        $message[] = 'Pet updated successfully';
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="styles3.css">
	<title>manage pets</title>
</head>
<body>
	<?php include 'headeradmin.php'; ?>
<section class="AddPets">
		<form method="post" action="" enctype="multipart/form-data">  
			<h1 class="title">Add a pet</h1>
			<div class="input-field">
				<label>Name</label><br><br>
				<input type="text" name="pet_name" id="pet_name" required><br><br>
			</div>
			<div class="input-field">
				<label>Age(in months)</label><br><br>
				<input type="text" name="pet_age"  id="pet_age"required><br><br>
			</div>
			<div class="radio">
   		 		<label>Gender :</label><br>
    			Male      <input type="radio" name="pet_gender" id="pet_gender" value="male" required>
    			Female    <input type="radio" name="pet_gender" id="pet_gender" value="female" required><br><br>
    
			</div>

			<div class="input-field">
				<label>Pet Details</label>
				<textarea name="pet_details" id="pet_details" required></textarea>
			</div>
			<div class="input-field">
				<label>Image</label>
				<input type="file" name="image" id="image" accept="image/jpg, image/png, image/jpeg, image/webp" required>
			</div>
			
			<input type="submit" id="submit"name="AddPets" value="Add Pet" class="btn">
		</form>
	</section>
    <script type="text/javascript" src="script.js"></script>





<section class="show-pets">
		<div class="box-container">
			<?php 
				$select_pets = mysqli_query($conn, "SELECT * FROM `pets`") or die('query failed');
				if(mysqli_num_rows($select_pets) > 0){
					while($fetch_pets = mysqli_fetch_assoc($select_pets)){


			?>
			<div class="box">
				<img src="image/<?php echo $fetch_pets['image']; ?>">
				<p>Age: <?php echo $fetch_pets['pet_age']; ?> months</p>
				<p>Gender: <?php echo $fetch_pets['pet_gender']; ?> </p>
				<h4><?php echo $fetch_pets['pet_name']; ?></h4>
				<p class="detail"><?php echo $fetch_pets['pet_details']; ?></p>
				<a href="admin_addpets.php?edit=<?php echo $fetch_pets['id'] ?>" class="edit">edit</a>
				<a href="admin_addpets.php?delete=<?php echo $fetch_pets['pet_id'] ?>" class="delete" onclick = "return conform('delete this pet');">delete</a>
			</div>
			<?php 
					}
				}
			?>
		</div>
	</section>
<section class="Update-pet">
<form method="post" action="" enctype="multipart/form-data">
            <h1 class="title">Update Pet</h1>

           >
            <div class="input-field">
                <label for="pet_name">Name</label><br><br>
                <input type="text" name="pet_name" id="pet_name" value="<?php echo $fetch_pet['pet_name']; ?>" required><br><br>
            </div>

            <div class="input-field">
                <label for="pet_age">Age (in months)</label><br><br>
                <input type="text" name="pet_age" id="pet_age" value="<?php echo $fetch_pet['pet_age']; ?>" required><br><br>
            </div>

           

            <div class="input-field">
                <label for="pet_details">Pet Details</label>
                <textarea name="pet_details" id="pet_details" required><?php echo $fetch_pet['pet_details']; ?></textarea>
            </div>

            <input type="submit" name="UpdatePet" value="Update Pet" class="btn">
        </form>
    </section>
</body>



</html>