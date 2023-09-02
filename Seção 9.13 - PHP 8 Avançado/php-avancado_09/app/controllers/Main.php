<?php 


namespace bng\Controllers;


class Main {
    public function index(){
        echo "Estou dentro do controlador Main - index<br>";
        echo "Aqui no index OK<br>";
        teste();
    }


    public function teste(){
        die("Aqui no Teste");
    }
}











?>