<?php 

if ( ! function_exists('user_access')){
    function user_access(){
        $ci=& get_instance();
        if($ci->session->userdata('level') != 'user'){
            $ci->session->set_flashdata('error','Anda harus Login terlebih dahulu');
            redirect('log_out');
        }
    }
}

if ( ! function_exists('admin_access')){
    function admin_access(){
        $ci=& get_instance();
        if($ci->session->userdata('level') != 'admin'){
            $ci->session->set_flashdata('error','Anda harus Login terlebih dahulu');
            redirect('log_out');
        }
    }
}

if ( ! function_exists('redirect_back')){ //untuk redirect kembali ke halaman sebelumnya
    function redirect_back(){
        if(isset($_SERVER['HTTP_REFERER']))
        {
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
        else
        {
            header('Location: http://'.$_SERVER['SERVER_NAME']);
        }
        exit;
    }
}

function cetak($str){
    echo htmlentities($str, ENT_QUOTES, 'UTF-8');
}

