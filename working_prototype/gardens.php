<?php
/**
.* Small description of this file:
.* Lists all the gardens in the database
.*
.* @author Prabhjot Jaspal <jasp0003@algonquincollege.com>
.* @copyright 2012 Prabhjot Jaspal
.* @license BSD-3-Clause <http://github.com/.../license.txt>
.* @version 1.0.0
.* @package web-app
.*/


require_once 'includes/db.php';

$sql = $db->query('
    SELECT id, garden_name, garden_address
    FROM gardens
    ORDER BY garden_name ASC
');

// Display the last error created by our database

$results = $sql->fetchAll();


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<h1>Gardens</h1>
<link href="css/general.css" rel="stylesheet">
</head>
<body>





       <div class="decorativeimages">
       <figure>
       <img src="images/garden1.jpg" alt="">
        </figure>
       <figure>
       <img src="images/garden2.jpg" alt="">
       </figure>
      
       
       
       </div>
       
       
        <div>
       
       <div class="rightimage">
       <figure>
       <img src="images/map.jpg" alt="">
        </figure>
        </div>
        
    
    <?php foreach ($results as $garden): ?>
    <h2>
        <a href="gardens-single.php?id=<?php echo $garden['id']; ?>">
		<?php echo $garden['garden_name']; ?>
        </a>
         </h2>
         
    
   
      <?php endforeach; ?>
      
                <a href="index.php">back</a>

</body>
</html>
