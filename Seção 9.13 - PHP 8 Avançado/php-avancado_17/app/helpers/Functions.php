<?php 

// Verifica se existe um usuario logado
function check_session(){
    // Check if there is an active session
    return isset($_SESSION['user']);
}

function printData($data, $die = true){
    echo'<pre>';

    if(is_array($data) || is_object($data)){
        print_r($data);
    } else {
        echo $data;
    }

    if($die){
        die('<br>FIM<br>');
    }
}

















?>