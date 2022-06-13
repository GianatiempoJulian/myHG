<?php

namespace Controllers;

use DAO\CompanyDAO as CompanyDAO;
use DAO\UserDao as UserDAO;
use DAO\StudentDAO as StudentDAO;
use Controllers\UserController as UserController;
use Models\User as User;



class SessionController
{
    public function Index(){
        require_once(VIEWS_PATH . "start.php");
    }
    
    public function Register (){
        require_once(VIEWS_PATH . "user/user-register.php");
    }

    public function Login (){
        require_once(VIEWS_PATH . "user/user-login.php");
    }



public function Verify($username,$password)
{
        $users = new UserDAO();
        $flag = $users->existUser($username,$password);
        $user_in_session = new User();

        
        
        if($flag == 1)
        {
            $user_in_session = $users->searchUser($username);
            session_start();
            $_SESSION['us_id'] = $user_in_session->getUser_id();
            $_SESSION['us_username'] = $user_in_session->getUsername();
            $_SESSION['us_email'] = $user_in_session->getEmail();
            header("location:". FRONT_ROOT . "User/Profile");
        }
        else
        {
            echo "<script>alert('Usuario y/o contraseña incorrecto. Intente nuevamente.');</script>";
            require_once(VIEWS_PATH. "user/user-login.php");
        }
}

public function VerifyRegister($username,$email,$password)
{
        $users = new UserDAO();
        $flag = $users->existUserWithMail($username,$email);
        $us_comprobador = $users->searchUser($username);
        
        if($flag == 0 && $us_comprobador == NULL)
        {
            
            $userController = new UserController;
            $userController->Add($username,$email,$password);
            
            
        }
        else
        {
            echo "<script>alert('Usuario y/o correo en uso. Intente nuevamente con otros datos.');</script>";
            require_once(VIEWS_PATH. "user/user-register.php");
        }
}

    public function LogOut()
    {    
        session_destroy();
        header("location:". FRONT_ROOT . "Session/Index");
     }
}

?>