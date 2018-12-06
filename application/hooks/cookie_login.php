<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
    As Name implies this hook will accept cookie form client and login the user by setting session
*/
function cookie_login() {
    $CI = & get_instance();
    if (!user_logged_in() && $CI->input->cookie('user')) {
        $rcookie = base64_decode($CI->input->cookie('user'));
        $cookie = explode(":", $rcookie);
        $result = $CI->db->get_where('users',['username'=>$cookie[1],'password'=>$cookie[4]])->row_array();
        if (count($result)) {
            unset($result['token']);
            unset($result['password']);
            $result['loggedin'] = 1;
            $CI->session->set_userdata( $result );
        }
    }
}
