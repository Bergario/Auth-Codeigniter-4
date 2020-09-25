<?php

function logged_in()
{
    $e = 'email';
    session();
    // dd($_SESSION['email']);
    $email = $_SESSION['email'];

    if (!$email) {

        header("location: http:/user/login");
    }

    // if (!$e) {
    //     return redirect()->to('user/login');
    // } else {
    //     echo "tai";
    // {
    //     if ($r == 'admin') {
    //         return redirect()->to('admin/');
    // //     }

}