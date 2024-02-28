<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="formstyles.css">
	<title>Requests to adopt</title>
</head>
<body>
<div class="show-requests">
<form method="post" action="../admin/admin_requests.php" enctype="multipart/form-data">  
    <h1 class="title">Request to adopt a pet</h1>
    <div class="input-field">
        <label>Name</label><br><br>
        <input type="text" name="adopter_name" id="adopter_name" required><br><br>
    </div>
    <div class="input-field">
        <label>Address</label><br><br>
        <input type="text" name="address"  id="address"required><br><br>
    </div>

    <div class="radio">
            <label>Do you have pets at home? :</label><br>
        Yes      <input type="radio" name="havepets" id="havepets" value="y" required>
        No  <input type="radio" name="havepets" id="havepets" value="n" required><br><br>

    </div>

    <div class="input-field">
        <label>email</label><br><br>
        <input type="email" name="adopter_email"  id="adopter_email"required><br><br>
    </div>
    <div class="input-field">
        <label>How would you take care of the dog?</label>
        <textarea name="takingcare" id="takingcare" coloumns="10" rows ="8"></textarea>
    </div>
    
    <input type="submit" id="submit"name="SendRequest" value="Send request" class="btn">
</form>
        
</div>
</body>
</html>