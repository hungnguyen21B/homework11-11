<?php
 
// Array account
$admin = array(
                ["username"=>"ngoc","password"=>"ngoc","phone"=> "000"],
                ["username"=>"hung","password"=>"hung","phone"=> "111"]
            );
//Login
    $username = $_POST["input-username"];
    $password = $_POST["input-password"];
    $check = false;
for ($i=0; $i < sizeof($admin);$i++) { 
    if(($username==$admin[$i]["username"]) and ( $password==$admin[$i]["password"])){
       $check = true; 
    break;
    }
}
if ($check){
    header("location: ../formScore.html");
} else {
    header("location: index.html");
}
// Register
?>