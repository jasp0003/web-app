<?php

require_once 'includes/db.php';

$sql = $db->query('
    SELECT id, garden_name, garden_address, 
    FROM gardens
    ORDER BY garden_name ASC
');

// Display the last error created by our database
var_dump($db->errorInfo());
$results = $sql->fetchAll();


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Gardens</title>
<link href="css/general.css" rel="stylesheet">
</head>
<body>

     <a href="add.php">Add a Garden</a>

    <?php foreach ($results as $movie): ?>
    <h2>
        <a href="single.php?id=<?php echo $garden['id']; ?>">
		<?php echo $garden['garden_name']; ?>
        </a>
         </h2>
         
    
    <dl>
      <dt>garden name</dt>
      <dd><?php echo $garden['garden_name']; ?></dd>
      <dt>garden address</dt>
      <dd><?php echo $garden['garden_address']; ?></dd>
      </dl>
      <?php endforeach; ?>

</body>
</html>
