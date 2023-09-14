<?php 


namespace bng\Controllers;

use bng\Controllers\BaseController;
use bng\Models\Agents;

class Main extends BaseController {
    public function index(){


        $this->view('layouts/html_header');

        // login
        // $this->view('login_frm');

        // esqueci-me da password (formulário)
        // $this->view('reset_password_frm');

        // esqueci-me da password - email enviado
        // $this->view('reset_password_email_sent');

        // esqueci-me da password - introduza o código
        // $this->view('reset_password_insert_code');
        
        // esqueci-me da password - definir nova password
        // $this->view('reset_password_define_password_frm');
        
        // esqueci-me da password - definir nova password
        // $this->view('reset_password_define_password_success');
        
        // nav bar
        $this->view('navbar');
        
        // homepage
        // $this->view('homepage');
        
        // meus clientes
        // $this->view('agent_clients');
        
        // inserir novo cliente
        // $this->view('insert_client_frm');
        
        // upload de ficheiro de clientes
        // $this->view('upload_file_with_clients_frm');

        // editar cliente
        // $this->view('edit_client_frm');

        // confirmar eliminação de cliente
        // $this->view('delete_client_confirmation');
        
        // perfil - alterar a password
        // $this->view('profile_change_password_frm');
        
        // perfil - password alterada com sucesso
        // $this->view('profile_change_password_success'); 
        
        // global clientes - para visualização dos clientes pelo admin
        // $this->view('global_clients');
        
        // ---------------
        // gestão de agentes - quadro inicial
        // $this->view('agents_managment');
        
        // gestão de agentes - adicionar agente formulário
        // $this->view('agents_add_new_frm');

        // envio de email para conclusão da password
        // $this->view('agents_email_sent');    
        
        // gestão de agentes - editar agente formulário
        // $this->view('agents_edit_frm');
        
        // gestão de agentes - confirmar eliminação
        // $this->view('agents_delete_confirmation');

        // gestão de agentes - confirmar reativação
        // $this->view('agents_recover_confirmation'); 

        // stats
        // $this->view('stats'); 

        $this->view('footer');
        $this->view('layouts/html_footer');

    }


    
}











?>