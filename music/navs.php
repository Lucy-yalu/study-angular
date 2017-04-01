<?php

        header("Content-Type:text/html;charset=utf-8");
        $array=array(
             array("id"=>1,"categoryName"=>"中文流行"),
             array("id"=>2,"categoryName"=>"中文金典"),
             array("id"=>3,"categoryName"=>"欧美流行"),
             array("id"=>4,"categoryName"=>"日韩串烧")
        );
        echo json_encode($array);
?>