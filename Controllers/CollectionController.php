<?php
    namespace Controllers;

    use Models\Collection as Collection;

    use DAO\CollectionDAO as CollectionDAO;
    use DAO\FigureDAO as FigureDAO;

    
   
    

    

    class CollectionController
    {
        private $collectionDAO;

        public function __construct()
        {
            $this->collectionDAO = new CollectionDAO();
        }

        public function List()
        {
            $figure_dao = new FigureDAO();
            $figure_list = $figure_dao->GetAll();
            $x = 0;
            $collection_list = $this->collectionDAO->GetAll();
            require_once(VIEWS_PATH."collection/collection-list.php");
        }

  

        public function Profile($id)
        {
            $figure = $this->figureDAO->getByID($id);
            require_once(VIEWS_PATH. "figure/figure-profile.php");
        }

        

}
?>