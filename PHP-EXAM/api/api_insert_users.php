<?php

header("Access-Control-Allow-Method: POST");
header("Content-Type: application/json");

include "../Config/config.php";

$config = new Config();

if($_SERVER['REQUEST_METHOD']=='POST'){

        $name = $_POST['name'];
        $age = $_POST['email'];


        $res = $config->insertusers($name,$email);
        if($res){

            $arr['data'] = "User created successfully";
            http_response_code(201);
        }else{
            $arr['err'] = "Error creating user";
        }
    }
else{

    $arr['erroe'] = "only  POST  Method is Allow ...";
}

echo json_encode($arr);

?>