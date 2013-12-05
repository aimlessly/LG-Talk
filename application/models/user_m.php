<?php


class user_m extends CI_Model {

    var $details;

    function validate_user( $username, $password ) {
        // Build a query to retrieve the user's details
        // based on the received username and password
        $this->db->from('user');
        $this->db->where('username',$username );
        $this->db->where( 'password', sha1($password) );
        $login = $this->db->get()->result();

        // The results of the query are stored in $login.
        // If a value exists, then the user account exists and is validated
        if ( is_array($login) && count($login) == 1 ) {
            // Set the users details into the $details property of this class
            $this->details = $login[0];
            // Call set_session to set the user's session vars via CodeIgniter
            $this->set_session();
            return true;
        }

        return false;
    }

    function set_session() {
        // session->set_userdata is a CodeIgniter function that
        // stores data in CodeIgniter's session storage.  Some of the values are built in
        // to CodeIgniter, others are added.  See CodeIgniter's documentation for details.
        $this->session->set_userdata( array(
                'name'=> $this->details->username,
                'email'=>$this->details->email,
                'avatar'=>$this->details->avatar,
                'tagline'=>$this->details->tagline,
                'isLoggedIn'=>true
            )
        );
    }
    //จาก mainjs function addNewUser บรรทัด 61 มาใส่ใน $data['..']
    function  create_new_user( $userData ) {
      $data['username'] = $userData['username'];
      $data['password'] = sha1($userData['password1']);
      $data['email'] = $userData['email'];
      $data['avatar'] = $this->getAvatar();
      $data['tagline'] = "Click here to edit tagline.";


      return $this->db->insert('user',$data);
    }
    
    public function update_tagline( $user_name, $tagline ) {
      $data = array('tagline'=>$tagline);
      $result = $this->db->update('user', $data, array('username'=>$user_name));
      return $result;
    }

    private function getAvatar() {
      $avatar_names = array();

      foreach(glob('assets/img/avatars/*.png') as $avatar_filename){
        $avatar_filename =   str_replace("assets/img/avatars/","",$avatar_filename);
        array_push($avatar_names, str_replace(".png","",$avatar_filename));
      }

      return $avatar_names[array_rand($avatar_names)];
    }

    public function check_email_user($email)
    {
        $queryString = "select * from user where email = '$email'";
    $query = $this->db->query($queryString);
    if($query->num_rows() == 1){
        return  $query->result();
    } 
    }
}
