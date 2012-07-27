<?php

require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


 // -> prepare () allows us to have variables in our SQL
 // We can create  placeholders and later fill them with some content
 // By using prepare we are protecting against SQL injection attacks
 
$sql = $db->prepare('
   SELECT id, garden_name, garden_address,
   FROM gardens
   WHERE id = :id
   
   
 ');
 
 // bindValue(placeholder, variable, datatype)
 $sql->bindvalue(':id', $id,  PDO::PARAM_INT);
 $sql->execute();
 var_dump($db->errorInfo());
 $results = $sql->fetch();
 
 


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php  echo $results['garden_name']; ?> &middot; gardens</title>
</head>
<body>

<h1><?php  echo $results['garden_name']; ?></h1>
  <dl>
      <dt>garden address</dt>
      <dd><?php echo $results['garden_address']; ?></dd>
      </dl>
      
      <a href="delete.php?id=<?php echo $id; ?>">Delete</a>
      <a href="edit.php?id=<?php echo $id; ?>">Edit</a>
</body>
</html>