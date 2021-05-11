<?php
function prl($hindi, $english){
    if (@$_COOKIE['lang'] === 'en'){
        echo $english;
    }else{
        echo $hindi;
    }
}
function rrl($hindi, $english){
    if (@$_COOKIE['lang'] === 'en'){
        return $english;
    }else{
        return $hindi;
    }
}
function select($light, $dark){
    if (@$_COOKIE['theme'] === "d"){
        echo $dark;
    }else{
        echo $light;
    }
}
function rclr($light, $dark){
    if (@$_COOKIE['theme'] === "d"){
        return $dark;
    }else{
        return $light;
    }
}
function connect(){
    global $server;
    global $user;
    global $pass;
    global $db;
    return mysqli_connect($server, $user, $pass, $db);
}
?>