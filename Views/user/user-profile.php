<?php include('Views/nav.php'); ?>


<?php 

require_once("Config/Autoload.php");


use Config\Autoload as Autoload;
use Models\User as User;
use Models\Figure as Figure;

Autoload::Start();

foreach($userList as $user)
 {

   if($user->getUsername() == $username)
   {
    
?>

<body>
     <div class ="container">
          <div id="profile_box" class="row">
               <img id="user-pic" class="col-12" src="<?php echo IMG_PATH ?>user-pic.png" alt="profile_picture">
               <h1 id="profile-username" class="col-12"><?php  echo $user->getUsername()?></h1>
               <h6 id="profile-subtitle" class="col-12">SSJ GOD</h6>
          </div>
     </div>
     <div class="container">
          <div class="row">
               <div class="col-12 user-achievements">
                    <h1>Leyenda</h1>
                    <h6>Colecciona 50 figuras de Goku</h6>
               </div>
               <div class="col-12 user-achievements">
                    <h1>Leyenda</h1>
                    <h6>Colecciona 50 figuras de Goku</h6>
               </div>
               <div class="col-12 user-achievements">
                    <h1>Leyenda</h1>
                    <h6>Colecciona 50 figuras de Goku</h6>
               </div>
          </div>
     </div> 
</body>

<?php
    }
   }

include('Views/footer.html');
?>

