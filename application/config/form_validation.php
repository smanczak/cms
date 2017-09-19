<?php
/**
 * Created by PhpStorm.
 * User: s.manczak
 * Date: 15.09.2017
 * Time: 14:22
 */

$config = array(
    'admin_user_create'=> array(
        array(
            'field'=>'username',
            'label' => 'Login',
            'rules' => 'trim|required'
        ),
        array(
            'field'=>'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|is_unique[users.email]'
        ),
        array(
            'field'=>'password',
            'label' => 'Hasło',
            'rules' => 'trim|required|min_length[5]'
        ),
        array(
            'field'=>'password_retry',
            'label' => 'Powtórz hasło',
            'rules' => 'trim|required|matches[password]'
        ),
    ),

    'admin_user_edit'=> array(
        array(
            'field'=>'username',
            'label' => 'Login',
            'rules' => 'trim|required'
        ),
        array(
            'field'=>'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|callback_email_edit'
        ),
        array(
            'field'=>'password',
            'label' => 'Nowe hasło',
            'rules' => 'trim|min_length[5]'
        ),
        array(
            'field'=>'password_retry',
            'label' => 'Powtórz nowe hasło',
            'rules' => 'trim|matches[password]'
        ),
    ),

    'site_user_create'=> array(
        array(
            'field'=>'username',
            'label' => 'Login',
            'rules' => 'trim|required'
        ),
        array(
            'field'=>'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|is_unique[users.email]'
        ),
        array(
            'field'=>'password',
            'label' => 'Hasło',
            'rules' => 'trim|required|min_length[5]'
        ),
        array(
            'field'=>'password_retry',
            'label' => 'Powtórz hasło',
            'rules' => 'trim|required|matches[password]'
        ),
    ),

    'site_user_login'=> array(

        array(
            'field'=>'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email'
        ),
        array(
            'field'=>'password',
            'label' => 'Hasło',
            'rules' => 'trim|required'
        ),
    ),

    'site_user_forgot'=> array(

        array(
            'field'=>'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email'
        ),
    ),

    'site_user_reset'=> array(

        array(
            'field'=>'password',
            'label' => 'Nowe Hasło',
            'rules' => 'trim|required|min_length[5]'
        ),
        array(
            'field'=>'password_retry',
            'label' => 'Powtórz nowe hasło',
            'rules' => 'trim|required|matches[password]'
        ),
    ),

);
