<?php
switch($action){
    case 'login':
        if (is_valid_admin_login($username, $password)){
            $_SESSION['is_valid_admin'] = true;
            header("Location: .?action=list_vehicles");
        } else {
            $login_message = 'You must login to view this page.';
            include('view/login.php');
        }
        break;
    case 'show_login':
        include('view/login.php');
        break;
    case 'logout':
        $_SESSION = array();
        session_destroy();
        $login_message = 'You have been logged out.';
        include('view/login.php');
        break;
    case 'register':
        include('util/valid_register.php');
        $errors = valid_registration($username, $password, $confirm_password);
        if(!empty($errors)){
            include('view/register.php');
        } else {
            add_admin($username, $password);
            $_SESSION['is_valid_admin'] = true;
            header("Location: .?action=list_vehicles");
        }
        break;
    case 'show_register':
        include('view/register.php');
        break;
}
