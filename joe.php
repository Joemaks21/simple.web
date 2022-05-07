<?php
$db_con = mysqli_connect('localhost','root','','cars');
if(isset($_POST['send'])){
$full_name = $_POST['name'];
$Car_Type = $_POST['car_type'];
$email = $_POST['email'];
$country = $_POST['country'];
$Phone_Number = $_POST['PhoneNo'];
$Address = $_POST['address'];
$Message = $_POST['Message'];

$sql = "Insert into tbl_cars(name, car, email, country, PhoneNo, Address, Message) values('$full_name','$Car_Type','$email','$country',$Phone_Number','$Address','$Message')";
mysqli_query($db_con,$sql);
header('location:form.html');
}
function button(){
    else {echo 'Error located';}
}


?>