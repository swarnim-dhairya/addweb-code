<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
      $data = file_get_contents('studentData.json');

      // decode json
      $json_arr = json_decode($data, true);
      
      // add data
      
      
      $json_arr[] = array(
        'fname'=>$_POST['fname'], 
        'lname'=>$_POST['fname'], 
        'Fathername'=>$_POST['fathername'],
        'email'=>$_POST['email'],
        'mob'=>$_POST['mob'],
        'country'=>$_POST['country'],
        'gender' => $_POST['gender'],
        'address' => $_POST['address']
      );
      //print_r($_FILES['photo']['name']);die;
     
      $countfiles = count($_FILES['photo']['name']);

// Upload directory
$upload_location = "uploads/";



// Loop all files
for($index = 0;$index < $countfiles;$index++){

   if(isset($_FILES['photo']['name'][$index]) && $_FILES['photo']['name'][$index] != ''){
      // File name
      $filename = $_FILES['photo']['name'][$index];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid image extension
      $valid_ext = array("png","jpeg","jpg");

      // Check extension
      if(in_array($ext, $valid_ext)){

         // File path
         $path = $upload_location.$filename;

         // Upload file
         if(move_uploaded_file($_FILES['photo']['tmp_name'][$index],$path)){
            $json_arr[] = array('photo'.$index => $path);
         }
      }
   }
}

      
      // encode json and save to file
      file_put_contents('studentData.json', json_encode($json_arr));
    }

    
    
?>