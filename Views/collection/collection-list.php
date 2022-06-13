<?php 

require_once("Config/Autoload.php");
use Config\Autoload as Autoload;


include('Views/nav.php');

Autoload::Start();

use DAO\FigureDAO as FigureDAO;
use Models\Figure as Figure;
use Controllers\FigureController as FigureController;



if (!isset($_SESSION['us_username'])) {
     header("location:". FRONT_ROOT . "Session/Login");
}
?>


<div class="productos">
     <div class="row">
          <?php
          foreach($collection_list as $collection){
               $x++;
          ?>
         <div class = "row collection">
               <h3 class="collection-data" ><?php echo $collection->getColl_name() . $collection->getColl_set()?> <button onclick="fn_hide(<?php echo $x?>)" class="collection-hide collection-btn" >▼</button> <button onclick="fn_show(<?php echo $x?>)" class="collection-show collection-btn">▲</button> </h3>
               <?php
               foreach($figure_list as $figure){
               
               if($figure->getCollection_id() == $collection->getColl_id()){?> 

               <div class="col-5 col-xs-4 col-sm-4 col-md-2 col-lg-1" >
                         <div class = "figure-collection-id">
                              <div class="card card-figures <?php echo $figure->getCollection_id() ?>" >
                                   <img id="figure-photo" src="<?php echo IMG_PATH ?><?php echo $figure->getPhoto_name()?>" alt="<?php echo $figure->getPhoto_name()?>">
                                   <a name ="figure_select" id="save-buttom" href="<?php echo FRONT_ROOT?>Figure/SaveFigure/<?php echo $figure->getFigure_id()?>">Guardar</a>    
                              </div>
                         </div>
                         
               </div>
               <?php
               }}
               ?>
          </div>
          <?php
          }
          ?>
     </div>      
</div>

<?php include('Views/footer.html'); ?>

