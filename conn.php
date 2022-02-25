<?php
$user id = $_POST['user id'];
$email id = $_POST['email id'];
$password= $_POST['password];
//database connection
$conn = new mysqli('localhost','root', ' ' ; 'test');
if($conn->connect_error)
{
die('connection failed : '.$conn->connect_error);
}
else
{
$stm = $conn->prepare("insert into registration(user id, email id, password)
  values(?,?,?)");
$stm->bild_param($user id , $email id ,$password);
$stm->execute();
echo " registration successfully.....";
$stm->close();
$conn->close();

}
?>
