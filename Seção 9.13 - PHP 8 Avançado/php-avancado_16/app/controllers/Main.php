<?php 


namespace bng\Controllers;

use bng\Controllers\BaseController;
use bng\Models\Agents;

class Main extends BaseController {
    public function index(){

        // Check if there is no active user in session
        if(!check_session()){
            $this->login_frm();
            return;
        }

        $this->view('layouts/html_header');
        echo '<h3 class=" text-white text-center">Welcome to the main page</h3>';
        $this->view('layouts/html_footer');
    }

    // ----------------------------------------------
    // LOGIN
    // ----------------------------------------------
    public function login_frm(){
        // check is there is already a user in the session
        if(check_session()){
            $this->index();
            return;
        }

        // Check if there are errors (after login_submit)
        $data = [];
        if(!empty($_SESSION['validation_errors'])){
            $data['validation_errors'] = $_SESSION['validation_errors'];
            unset($_SESSION['validation_errors']);
        }

        // Display login form
        $this->view('layouts/html_header');
        $this->view('login_frm', $data);
        $this->view('layouts/html_footer');
    }

    // ----------------------------------------------
    public function login_submit(){
        // check is there is already an active session
        if(check_session()){
            $this->index();
            return;
        }

        // Check if there wa a post request
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            $this->index();
            return;
        }
        
        // Form validation
        $validation_errors = [];
        if(empty($_POST['text_username']) || empty($_POST['text_password'])){
            $validation_errors[] = 'Username e password são obrigatários';
        }
        
        // Check if there are validation errors
        if(!empty($validation_errors)){
            $_SESSION['validation_errors'] = $validation_errors;
            $this->login_frm();
            return;
        }

        // Get form data
        $username = $_POST['text_username'];
        $password = $_POST['text_password'];

        echo $username . ' <br> ' . $password;
    }
    
}











?>