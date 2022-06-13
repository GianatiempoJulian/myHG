<?php
    namespace Controllers;

    use Models\Figure as Figure;
    use Models\UserXFigure as UserXFigure;

    use DAO\FigureDAO as FigureDAO;
    use DAO\CollectionDAO as CollectionDAO;
    use DAO\UserXFigureDAO as UserXFigureDAO;
   
   
    
    

    class FigureController
    {
        private $figureDAO;

        public function __construct()
        {
            $this->figureDAO = new FigureDAO();
        }

    
        public function Profile($id)
        {
            $collection_dao = new CollectionDAO;
            $figure = $this->figureDAO->getByID($id);
            $collection = $collection_dao->getCollectionFromID($figure->getCollection_id());
            
            
            require_once(VIEWS_PATH. "figure/figure-profile.php");
        }

        		
		public function SaveFigure($idFigure){

			$userXFigure = new UserXFigure();
            $userXFigure->setUserID($_SESSION['us_id']);
            $userXFigure->setFigureID($idFigure);

			
 
			$userXFigureDAO = new UserXFigureDAO();
			$userXFigureList = $userXFigureDAO->GetAll();
			$flag = 0;

			$userXFigureDAO->Add($userXFigure);
          
            header("location:". FRONT_ROOT . "Collection/List");
		
		}

        public function DeleteFigure($idFigure){

			$userXFigure = new UserXFigure();
            $userXFigure->setUserID($_SESSION['us_id']);
            $userXFigure->setFigureID($idFigure);

			
 
			$userXFigureDAO = new UserXFigureDAO();
			$userXFigureList = $userXFigureDAO->GetAll();
			$flag = 0;

			$userXFigureDAO->Delete($userXFigure);
          
            header("location:". FRONT_ROOT . "Figure/MyFigures");
		
		}

        public function myFigures(){
            
            if (!isset($_SESSION['us_username'])) {
                header("location:". FRONT_ROOT . "Session/Login");
            }
            
            $collection_dao = new CollectionDAO();
            $collection_list = $collection_dao->GetAll();


            $us_x_fig_dao = new UserXFigureDAO();
            $us_x_fig_list = $us_x_fig_dao->GetByUserId($_SESSION['us_id']);

            
            $figure_list = $this->figureDAO->GetAll();
            $x = 0;
            require_once(VIEWS_PATH."figure/figure-saved.php");
        }

}
?>