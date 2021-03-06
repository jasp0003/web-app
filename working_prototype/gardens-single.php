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

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


 // -> prepare () allows us to have variables in our SQL
 // We can create  placeholders and later fill them with some content
 // By using prepare we are protecting against SQL injection attacks
 
$sql = $db->prepare('
   SELECT id, garden_name, garden_address
   FROM gardens
   WHERE id = :id
   
   
 ');
 
 // bindValue(placeholder, variable, datatype)
 $sql->bindvalue(':id', $id,  PDO::PARAM_INT);
 $sql->execute();

 $results = $sql->fetch();
 
 


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?php  echo $results['garden_name']; ?> &middot; gardens</title>
<link href="css/general.css" rel="stylesheet">
</head>
<body>

<h1><?php  echo $results['garden_name']; ?></h1>
  <dl>
       <dt class="gardens">garden address</dt>
      <dd><?php echo $results['garden_address']; ?></dd>
      </dl>
      
      
     
       <a href="index.php?id=<?php echo $id; ?>">Back</a>
</body>
</html>