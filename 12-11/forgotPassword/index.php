<?php
 
// Array account
$admin = array(
                ["username"=>"ngoc","password"=>"ngoc","phone"=> "000"],
                ["username"=>"hung","password"=>"hung","phone"=> "111"]
            );
//Login
    $username = $_POST["input-username"];
    $phone = $_POST["input-phone"];
    $check = false;
for ($i=0; $i < sizeof($admin);$i++) { 
    if(($username==$admin[$i]["username"]) and ( $phone==$admin[$i]["phone"])){
       $check = true; 
    break;
    }
}
if ($check){
    header("location: http://localhost/HungNguyen/12-11/login/index.html");
} else {
    header("location: index.html");
}
// Register
?>