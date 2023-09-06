<?php 

namespace bng\Controllers;

abstract class BaseController
{
    public function view()
    {
        require_once("../app/views/layouts/html_header.php");
        echo PHP_EOL;
        require_once("../app/views/layouts/html_footer.php");
    }
}



















?>