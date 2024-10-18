<?php


header("Access-Control-Allow-Method: DELETE");
header("Content-Type: application/json");


include "../Config/config.php";

$config = new Config();

if($_SERVER['REQUEST_METHOD']=='DELETE'){

    $input = file_get_contents("php://input"); 


    parse_str($input, $_DELETE);


    $id = $_DELETE['id'];
    $res = $config->deleteusers($id);

    if($res){

        $arr['data'] = "users Record Deleted Sucessfully...";
    }else{
        $arr['err'] = "users Record Deletion Failed...";
    }
}else{

    $arr['erroe'] = "only  POST  Method is Allow ...";

}


 echo json_encode($arr);












?>