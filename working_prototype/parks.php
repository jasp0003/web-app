<?php
/**
.* Small description of this file:
.* Lists all the parks in the database
.*
.* @author Prabhjot Jaspal <jasp0003@algonquincollege.com>
.* @copyright 2012 Prabhjot Jaspal
.* @license BSD-3-Clause <http://github.com/.../license.txt>
.* @version 1.0.0
.* @package web-app
.*/

require_once 'includes/db.php';

$sql = $db->query('
    SELECT id, park_name, park_address 
    FROM parks
    ORDER BY park_name ASC
');

// Display the last error created by our database

$results = $sql->fetchAll();


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<h1>Parks</h1>
<link href="css/general.css" rel="stylesheet">
</head>
<body>

      <div class="decorativeimages">
       <figure>
       <img src="images/park1.jpg" alt="">
        </figure>
       <figure>
       <img src="images/park2.jpg" alt="">
       </figure>
      
       
       
       </div>
       
       
        <div>
       
       <div class="rightimage">
       <figure>
       <img src="images/map.jpg" alt="">
        </figure>
        </div>
        
       

    <?php foreach ($results as $park): ?>
    <h2>
        <a href="parks-single.php?id=<?php echo $park['id']; ?>">
		<?php echo $park['park_name']; ?>
        </a>
         </h2>
         
    
    
      <?php endforeach; ?>
  <div class="content">
	<header>
    
   
     
     
    <a href="index.php">back</a>
       

</body>
</html>
