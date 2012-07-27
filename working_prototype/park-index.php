<?php

require_once 'includes/db.php';

$sql = $db->query('
    SELECT id, park_name, park_address, 
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
<title>Parks</title>
<link href="css/general.css" rel="stylesheet">
</head>
<body>

     <a href="add.php">Add a Park</a>

    <?php foreach ($results as $park): ?>
    <h2>
        <a href="park-single.php?id=<?php echo $park['id']; ?>">
		<?php echo $park['park_name']; ?>
        </a>
         </h2>
         
    
    <dl>
      <dt>park name</dt>
      <dd><?php echo $park['park_name']; ?></dd>
      <dt>park address</dt>
      <dd><?php echo $park['park_address']; ?></dd>
      </dl>
      <?php endforeach; ?>

</body>
</html>
