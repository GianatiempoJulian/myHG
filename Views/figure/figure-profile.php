<?php namespace Views; ?>
<?php include('Views/header.html'); ?>



<?php 

require_once("Config/Autoload.php");


use Config\Autoload as Autoload;
use Models\User as User;
use Models\Figure as Figure;

Autoload::Start();


?>

<div>
    <div id="profile_box">
        <img src="<?php echo IMG_PATH ?><?php echo $figure->getPhoto_name()?>" alt="profile_picture">
        <h1 id="fig_character"><?php  echo $figure->getCharacter()?></h1>
        <h4 id="fig_form"><?php  echo "(" . $figure->getForm() . ")"?></h4>
    </div>
    <ul>
        <h4 id="fig_collection"><?php  echo $collection->getColl_name()?></h4>
        <h4 id="fig_set"><?php  echo $collection->getColl_set()?></h4>
        <h4 id="fig_year"><?php  echo $collection->getColl_year()?></h4>
    </ul>
</div>

<?php include('Views/footer.html'); ?>
