<?php

function chek_session()
{
    $CI= & get_instance();
    $session=$CI->session->userdata('status_login');
    if($session!='oke')
    {
        redirect('auth/login');
    }
}


function chek_session_login()
{
    $CI= & get_instance();
    $session=$CI->session->userdata('status_login');
    if($session=='oke')
    {
    if($CI->session->userdata('status')=='admin')
    {
        redirect('admin/dashboard');
    }
    elseif($CI->session->userdata('status')=='user')
    {
        redirect('dashboard');
    }
    }
 }

 ?>
