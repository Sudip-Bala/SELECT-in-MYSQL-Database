<?php
$conn = new mysqli('localhost', 'root', '', 'sms');
if($conn){
     $sql = "SELECT * FROM students";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()){
       echo $row['id'] .' -' . $row['class_id'] . ' -' . $row['name'] . ' -'. $row['age'] . ' -'. $row['roll'];
         echo "<br/>";
     }
}
?>
































