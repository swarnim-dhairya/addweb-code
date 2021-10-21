<?php
$data = file_get_contents ('studentData.json');
$json = json_decode($data, true);
$records = array();
foreach ($json as $key => $value) {
    if (!is_array($value)) {
       $records[$key] = $value ;
    } else {
        foreach ($value as $key => $val) {
          $records[$key] =  $val;
        }
    }
}
echo "<pre>";
print_r($records);
?>
<table class="studentInfo">
        <tbody><tr>
            <td>Name</td>
            <td>Father name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Dob</td>
            <td>Gender</td>
            <td>photo1</td>
            <td>photo2</td>
        </tr>
     
        <tr>
            <td><?php echo $rec['fname'] $rec['fname']?></td>
            <td><?php echo $rec['fname'] $rec['fname']?></td>
            <td>87</td>
            <td>88</td>
            <td>92</td>
            <td>88</td>
        </tr>
     
       
       
    </tbody></table>