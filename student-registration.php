<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Student Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
	
		<!-- CSS here -->
            <link rel="stylesheet" href="style.css">
          
   </head>

   <body>
  
<form action="store.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <h1>Student Registrations Form</h1>
   
    <hr>
    <label for="photo"><b>Upload photo</b></label>
    <input type="file" id="photo" name="photo[]" multiple><br><br>

    <label for="fname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="fname" id="fname" required>

    <label for="lname"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="lname" id="lname" required>

    
    <label for="fathername"><b>Father Name</b></label>
    <input type="text" placeholder="Enter Father Name" name="fathername" id="fathername" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required> <br><br>

    <label for="address"><b>Address</b></label><br>
    <textarea name="address" rows="5" id="address" required></textarea><br><br>
    

    <label for="mob"><b>Mobile no</b></label>
    <input type="tel" pattern="[0-9]+" maxlength="10" placeholder="Enter Phone number" name="mob" id="mob" ><br><br>

    <label for="gender"><b>Male</b></label>
    <input type="radio" placeholder="Enter Phone number" value="male" name="gender" >

    
    <label for="gender"><b>Male</b></label>
    <input type="radio" placeholder="Enter Phone number" value="female"  name="gender"><br><br>

    <label for="dob"><b>Dob</b></label>
    <input type="date" placeholder="Enter Phone number" value=""  name="dob"><br><br>

    <label for="country"><b>Country</b></label>
    <select name="country" required>
      <option value="india">India</option>
      <option value="us">US</option>
   </select>

   
    <button type="submit" class="registerbtn">Register</button>
  </div>
 
</form>
</body>
</html>