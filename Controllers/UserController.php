<?php
    namespace Controllers;

    use DAO\UserDAO as UserDAO;
    use Models\User as User;
    use DAO\FigureDAO as FigureDAO;
    

    class UserController
    {
        private $userDAO;

        public function __construct()
        {
            $this->userDAO = new UserDAO();
        }

        public function Profile()
        {
            if (!isset($_SESSION['us_username'])) {
                header("location:". FRONT_ROOT . "Session/Login");
            }

            $figureList = new FigureDAO();
            $figureList2 = $figureList->GetAll();
            
            $userList = $this->userDAO->GetAll();
            $username = $_SESSION['us_username'];
            require_once(VIEWS_PATH. "user/user-profile.php");
        }


        public function Add($username,$email,$password)
        {   
            
         $userDAOaux = new UserDAO(); 
         $user_list = $userDAOaux->GetAll();

         $user = new User();
         
         $user->setUser_id(count($user_list)+1);
         $user->setUsername($username);
         $user->setEmail($email);
         $user->setPassword($password);
         $user->setActive(1);           

         $this->userDAO->Add($user);
       
        require_once(VIEWS_PATH. "user/user-login.php");


    }
}
?>