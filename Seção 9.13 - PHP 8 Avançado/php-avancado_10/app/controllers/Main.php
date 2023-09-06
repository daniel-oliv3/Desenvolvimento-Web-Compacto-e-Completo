<?php 


namespace bng\Controllers;


class Main {
    public function index($id = null){
        echo "Estou dentro do controlador Main - index<br>";
    }


    public function teste(){
        die("Aqui no Teste");
    }
}











?>