<?php

header("Access-Control-Allow-Method: POST");
header("Content-Type: application/json");

include "../Config/config.php";

$config = new Config();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $release_date = $_POST['release_date'];

    $res = $config->insertmovies($title,$genre,$release_date);

    if($res){

        $arr['data'] = "movies Inserted Sucessfully...";
        http_response_code(201);
    }else{
        $arr['err'] = "movies Insertion Failed...";
    }
}else{

    $arr['erroe'] = "only  POST  Method is Allow ...";

}


echo json_encode($arr);













?>