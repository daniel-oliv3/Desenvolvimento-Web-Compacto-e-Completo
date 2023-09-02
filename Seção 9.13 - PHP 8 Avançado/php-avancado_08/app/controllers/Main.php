<?php 


namespace bng\Controllers;


class Main {
    public function index($id){
        echo "Estou dentro do controlador Main - index";
        echo '<br>';
        echo "O id indicado foi: $id";
    }


    public function teste(){
        die("Aqui no Teste");
    }
}











?>