<?php
if($_SERVER ['REQUEST_METHOD']=='POST'){
$name= $_POST['name'];
$email= $_POST['email'];
$gender=$_POST ['gender'];
$interests=$_POST['interests'];


}
?>
<body>
    <table border="1px" cellspacing="0">
    <tr>
    <th>name</th>
    <th>email</th>
    <th>gender</th>
    <th>interests</th>
    </tr>
    
    <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $gender; ?></td>
    <td><?php echo $interests; ?></td>
    
    </tr>
    
    
    </table>
</body>