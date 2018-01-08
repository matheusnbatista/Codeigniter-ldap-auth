<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function index() 
	{ 
        $this->load->helper(array('form'));
			
        $this->load->library('form_validation','session');
			
        $this->form_validation->set_rules('username', 'username', 'required'); 
        $this->form_validation->set_rules('password', 'password', 'required'); 
			
        if ($this->form_validation->run() == FALSE) 
        { 
         	/* Mensagem de erro caso usuario não preencher corretamente os campos */
			$this->session->set_flashdata('message_login', '<br><div class="well error-msg" style="color: red">É obrigatório preencher os campos!</div>');
			
			/* Redireciona p/ página de login */
			redirect("auth/login");

        } 
        else 
        { 
        	// Connection to AD server 
        	if (!($connect = @ldap_connect("ita.corp",389))) 
        	{
                die("Could not connect!");
            } 

            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);

            // User authentication
            if (!($bind = @ldap_bind($connect, $username.'@your_domain', $password))) // Enter your domain Example: @domain.corp
            { 
            	/* Error message Incorrect user or password */
				$this->session->set_flashdata('message_login', '<div class="alert alert-danger text-center">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                    <span><i class="fa fa-lg fa-frown-o" aria-hidden="true"></i> <b>User</b> or <b>password</b> was incorrect! </span>
                                                                </div>');
				
				// Redirect to login
				redirect("auth/login");
            }
            else
            {	
            	$this->session->set_userdata('username', $username);
				redirect("panel");	 
            }
        } 
    }

    public function login() 
    { 
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/footer');
    }

    public function logout()
    {
		$this->session->sess_destroy();
		redirect("auth/login");
	}
}