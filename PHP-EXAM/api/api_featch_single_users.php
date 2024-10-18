<?php
header("Access-Control-Allow-Method: POST");
header("Content-Type: application/json");

include "../Config/config.php";

$config = new Config();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $id = $_POST['id'];

    $res =$config->fetchSingleusers($id);

    $result = mysqli_fetch_assoc($res);
    if($result){
        $arr['data'] = $result;
    }else{
        $arr['err'] = "users Not Found...";
    }

}else{

    $arr['erroe'] = "only  POST  Method is Allow ...";
    }



 echo json_encode($arr);
?>