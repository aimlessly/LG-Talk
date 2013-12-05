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

    public function send_mail()
    { 
        $this->load->helper('url');
        $mail_name = $this->input->post('register');
        $this->load->model('user_m','',TRUE);
        $query  =  $this->user_m->check_email_user($mail_name);
        if(isset($query )){
            foreach( $query as $val1){
                    $name = $val1->username;
                    $password = $val1->password;
                }
            $this->load->library('email'); 

            $this->email->from('chaaim.booking@gmail.com', 'LGTalk');
            $this->email->to($mail_name); 
     
            $this->email->subject('Password from LGTalk');
            $this->email->message('Hello !'."\r\n"."\r\n".'Your username is: '.$name."\r\n".'Your password is: '.$password."\r\n"."\r\n".'Thank You');
    
            $this->email->send();

            $data['message'] = "**ระบบได้ส่ง E-mail เรียบร้อยแล้ว**"; 
            $this->load->view('login',$data); 

            }else{
            $data['message'] = "**E-mail นี้ไม่ได้ใช้ในการสมัครสมาชิก**";
            $this->load->view('login',$data);

            }
        }

        


    /*public function send_mail() {

    $this->load->view('login');
    $this->load->helper('url');

    if (!isset($_POST['e-mail'])){
      //redirect if no parameter e-mail
      redirect(base_url());
    };

    //load email helper
    $this->load->helper('email');
    //load email library
    $this->load->library('email');
    
    //read parameters from $_POST using input class
    $email = $this->input->post('e-mail',true); 

     // check is email addrress valid or no
    if (valid_email($email)){  
      // compose email
      $this->email->from($email , 'Namesmile');
      $this->email->to($email); 
      $this->email->subject('Runnable CodeIgniter Email Example');
      $this->email->message('Hello from Runnable CodeIgniter Email Example App!');  
      
      // try send mail ant if not able print debug
      if ( ! $this->email->send())
      {
        $data['message'] ="Email not sent \n".$this->email->print_debugger();      
        $this->load->view('login',$data);

      }
         // successfull message
        $data['message'] ="Email was successfully sent to $email";
        $this->load->view('login',$data);

    } else {

        $data['message'] ="Email address ($email) is not correct. Please <a href=".base_url().">try again</a>";
        $this->load->view('login',$data);
    }

  }*/
  


    /*function send_mail() {

    $email_config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => '465',
            'smtp_user' => 'aiminggg@gmail.com',
            'smtp_pass' => 'atgoogle',
            'mailtype'  => 'html',
            'starttls'  => true,
            'newline'   => "\r\n"
        );

    $this->load->library('email', $email_config);

    $this->email->from('aiminggg@gmail.com', 'invoice');
    $this->email->to('chaaim.booking@gmail.com');
    $this->email->subject('Invoice');
    $this->email->message('Test');

    $this->email->send();

    }*/



    function logout_user() {
      $this->session->sess_destroy();
      $this->index();
    }

    function showphpinfo() {
        echo phpinfo();
    }


}