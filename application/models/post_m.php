<?php

class post_m extends CI_Model {

  function save_post( $body ) {

    $data['body'] = $body;
    $data['senderName'] = $this->session->userdata('name');
    $data['createdDate'] = date('Y-m-d H:i:s',time());

    if ( $this->db->insert('post',$data) ) {
      return $data;
    } else {
      return false;
    }
  }

  function get_posts_for_user( $user_name, $num_posts = 10 ) {

    $this->db->from('post');
    $this->db->where( array('senderName'=>$user_name) );
    $this->db->limit( $num_posts );
    $this->db->order_by('createdDate','desc');

    $posts = $this->db->get()->result_array();

    if( is_array($posts) && count($posts) > 0 ) {
      return $posts;
    }

    return false;
  }

  function get_all_other_posts( $user_name, $num_posts = 10 ) {
    // start building a query
    $this->db->from('post');
    $this->db->join('user','post.senderName=user.username');

    // restrict to teammates if not an admin

    $this->db->where_not_in('senderName', array($user_name));
    $this->db->limit( $num_posts );
    $this->db->order_by('createdDate','desc');

    $posts = $this->db->get()->result_array();

    if( is_array($posts) && count($posts) > 0 ) {
      return $posts;
    }

    return false;
  }

  function get_post_count_for_user( $user_name ) {

    $this->db->from('post');
    $this->db->where( array('senderName'=>$user_name) );

    return $this->db->count_all_results();
  }
}
