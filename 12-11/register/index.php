<?php
// Array account
$admin = array(
                ["username"=>"ngoc","password"=>"ngoc","phone"=> "000"],
                ["username"=>"hung","password"=>"hung","phone"=> "111"]
            );
//Login
    $username = $_POST["input-username"];
    $password1 = $_POST["input-password1"];
    $password2 = $_POST["input-password2"];
    $phone = $_POST["input-phone"];
    $check = false;
for ($i=0; $i < sizeof($admin);$i++) { 
    if($username==$admin[$i]["username"]){
       $check = true; 
        break;
    }
}
if ($check==false){
    array_push($admin,["username"=>$username,"password"=>$password1,"phone"=> $phone]);
    var_dump($admin);
    header("location: http://localhost/HungNguyen/12-11/login/index.html");
} else {
    header("location: index.html");
}

// Register
?>