<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $name = $_GET['name'];
        if($name ==""){
            echo "can not be empty";
        }
        else{
            if($name ){
                echo "must contains two words";
            }
        }
    }
?>