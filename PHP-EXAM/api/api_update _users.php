<?php


header("Access-Control-Allow-Method: PUT");
header("Content-Type: application/json");   

include "../Config/config.php";

$config = new Config();

if($_SERVER['REQUEST_METHOD']=='PUT'   || $_SERVER['REQUEST_METHOD']=='PATCH'){

    $input = file_get_contents("php://input"); 

    parse_str($input, $_UPDATE);
    
    

    $name = $_UPDATE['name'];
    $age = $_UPDATE['email'];
    $id = $_UPDATE['id'];
    $res = $config->updateusers($name, $email, $course, $id);


    if($res){

        $arr['data'] = "users Update Sucessfully...";
      
    }else{
        $arr['err'] = "users Update Failed...";
    }
}else{

    $arr['erroe'] = "only  POST  Method is Allow ...";



}

echo json_encode($arr);







?>