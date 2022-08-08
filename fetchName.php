<?php
$serverame="localhost";
$username="root";
$password="";
$dbname="portfolio";
$conn=mysqli_connect($serverame,$username,$password,$dbname);

if ($conn){

    header("Content-Type: JSON");



$getName= 'SELECT name FROM USERS WHERE id =1';

$result=mysqli_query($conn,$getName);



if ($result){

    $row=mysqli_fetch_assoc($result);

 echo json_encode($row);

}


}else{
    echo "FAILED CONNECTING";
}
?>