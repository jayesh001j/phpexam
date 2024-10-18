<?php

header("Access-Control-Allow-Method: POST");
header("Content-Type: application/json");

include "../Config/config.php";

$config = new Config();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $movie_id = $_POST['movie_id'];
    $user_id = $_POST['user_id'];

    $res = $config->insertbookings($movie_id, $user_id);

    if($res){

        $arr['data'] = "bookings is Sucessfully...";

    }else{
        $arr['err'] = "bookings is Failed...";
    }
}else{

    $arr['erroe'] = "only  POST  Method is Allow ...";

}


echo json_encode($arr);
        












?>