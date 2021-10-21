<?php
$data = file_get_contents ('studentData.json');
$json = json_decode($data, true);
$records = array();
foreach ($json as $key => $value) {
    
       $records[$key] = $value ;
   
}
echo "<pre>";
//print_r($records);die;
?>
<style type="text/css">
        .studentInfo {
            width: 500px;
            border: 1px solid black;
        }
    </style>
<table class="studentInfo" >
        <tbody><tr>
            <td><b>Fname</b></td>
            <td><b>Lname</b></td>
            <td><b>Dob</b></td>
            <td><b>Fathername</b></td>
            <td><b>Country</b></td>
            <td><b>Gender</b></td>
            <td><b>Email</b></td>
            <td><b>Mob</b></td>
            <td><b>Address</b></td>
            <td><b>Photo</b></td>
        </tr>
        <?php foreach($records as $key=>$val) {?>
        <tr>
            <td><?php if(isset($val['fname'])) { echo $val['fname']; }?></td>
            <td><?php if(isset($val['lname'])) { echo $val['lname']; }?></td>
            <td><?php if(isset($val['dob'])) { echo $val['dob']; }?></td>
            <td><?php if(isset($val['Fathername'])) { echo $val['Fathername']; }?></td>
            <td><?php if(isset($val['country'])) { echo $val['country']; }?></td>
            <td><?php if(isset($val['gender'])) { echo $val['gender']; }?></td>
            <td><?php if(isset($val['email'])) { echo $val['email']; }?></td>
            <td><?php if(isset($val['mob'])) { echo $val['mob']; }?></td>
            <td><?php if(isset($val['address'])) { echo $val['address']; }?></td>
            <td><?php if( !empty($val['photo'])) { ?> <img  width="80" height="80" src=<?php echo $val['photo']; ?>> <?php } ?></td>

        </tr>
        <?php } ?>
       
      
    </tbody></table>
