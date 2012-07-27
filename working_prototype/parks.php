<?php

require_once 'includes/db.php';

$sql = $db->query('
    SELECT id, park_name, park_address 
    FROM parks
    ORDER BY park_name ASC
');

// Display the last error created by our database
var_dump($db->errorInfo());
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
