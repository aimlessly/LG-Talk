<?php

class Login extends CI_Controller {

    function index() {
        if( $this->session->userdata('isLoggedIn') ) {
            redirect('/main/show_main');
        } else {
            $this->show_login(false);
        }
    }

    function create_new_user() {
    $userInfo = $this->input->post(null,true);

    if( count($userInfo) ) {
      $this->load->model('user_m');
      $saved = $this->user_m->create_new_user($userInfo);
    }
    if ( isset($saved) && $saved ) {
       echo "success";   }
    }

    public function login_user() {
        // Create an instance of the user model
        $this->load->model('user_m');

        // Grab the email and password from the form POST
        $name = $this->input->post('username');
        $pass  = $this->input->post('password');

        //Ensure values exist for email and pass, and validate the user's credentials
        if( $name && $pass && $this->user_m->validate_user($name,$pass)) {
            // If the user is valid, redirect to the main view
            redirect('/main/show_main');
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
    }

    function show_login( $show_error = false ) {
        $data['error'] = $show_error;

        $this->load->helper('form');
        $this->load->view('login',$data);
    }

    function logout_user() {
      $this->session->sess_destroy();
      $this->index();
    }

    function showphpinfo() {
        echo phpinfo();
    }


}