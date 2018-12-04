<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function cookie_login() {
    $CI = & get_instance();
    $CI->input->cookie('loggedin');
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
